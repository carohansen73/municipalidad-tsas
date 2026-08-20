<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTallerRequest;
use App\Http\Requests\UpdateTallerRequest;
use App\Models\Actividad;
use App\Models\CategoriaActividad;
use App\Models\Institucion;
use App\Models\Publico;
use App\Models\Taller;
use App\Municipalidad\FileManagement;
use Illuminate\Support\Facades\DB;

class TallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Taller::class);

        $talleres = Taller::with(['categoria', 'publico'])
            ->withCount('actividades')
            ->orderBy('nombre')
            ->get();

        return view('cms.talleres.index', compact('talleres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Taller::class);

        $categorias = CategoriaActividad::orderBy('nombre')->pluck('nombre', 'id')->all();
        $publicos = Publico::orderBy('nombre')->pluck('nombre', 'id')->all();
        $instituciones = Institucion::orderBy('nombre')->get();

        return view('cms.talleres.create', compact('categorias', 'publicos', 'instituciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTallerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTallerRequest $request)
    {
        $this->authorize('create', Taller::class);

        $data = $request->validated();

        DB::transaction(function () use ($data, $request) {
            $taller = Taller::create([
                'nombre' => $data['nombre'],
                'descripcion' => $data['descripcion'] ?? null,
                'categoria_id' => $data['categoria_id'],
                'publico_id' => $data['publico_id'],
                'activo' => true,
            ]);

            foreach ($data['lugares'] as $index => $lugar) {
                $imagen = null;
                $archivoImagen = $request->file("lugares.$index.imagen");

                if ($archivoImagen) {
                    $imagen = FileManagement::uploadImage($archivoImagen, '/talleres/actividades/', 800, 800);
                }

                $actividad = $taller->actividades()->create([
                    'institucion_id' => $lugar['institucion_id'],
                    'instructor' => $lugar['instructor'] ?? null,
                    'modalidad' => $lugar['modalidad'],
                    'costo' => $lugar['costo'] ?? null,
                    'fecha_inicio' => $lugar['fecha_inicio'] ?? null,
                    'fecha_fin' => $lugar['fecha_fin'] ?? null,
                    'requisitos' => $lugar['requisitos'] ?? null,
                    'contacto_inscripcion' => $lugar['contacto_inscripcion'] ?? null,
                    'imagen' => $imagen,
                    'destacado' => false,
                    'activo' => true,
                ]);

                foreach ($lugar['horarios'] as $horario) {
                    $actividad->horarios()->create([
                        'dia_semana' => $horario['dia_semana'],
                        'hora_inicio' => $horario['hora_inicio'],
                        'hora_fin' => $horario['hora_fin'],
                    ]);
                }
            }
        });

        flash('Taller creado correctamente')->success();

        return redirect()->route('talleres.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function edit(Taller $taller)
    {
        $this->authorize('update', $taller);

        $taller->load(['actividades.horarios', 'actividades.institucion']);

        $categorias = CategoriaActividad::orderBy('nombre')->pluck('nombre', 'id')->all();
        $publicos = Publico::orderBy('nombre')->pluck('nombre', 'id')->all();
        $instituciones = Institucion::orderBy('nombre')->get();

        return view('cms.talleres.edit', compact('taller', 'categorias', 'publicos', 'instituciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTallerRequest  $request
     * @param  \App\Models\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTallerRequest $request, Taller $taller)
    {
        $this->authorize('update', $taller);

        $data = $request->validated();

        DB::transaction(function () use ($data, $request, $taller) {
            $taller->update([
                'nombre' => $data['nombre'],
                'descripcion' => $data['descripcion'] ?? null,
                'categoria_id' => $data['categoria_id'],
                'publico_id' => $data['publico_id'],
                'activo' => $request->boolean('activo'),
            ]);

            $actividadesEnviadas = [];

            foreach ($data['lugares'] as $index => $lugar) {
                $actividad = !empty($lugar['id'])
                    ? $taller->actividades()->find($lugar['id'])
                    : null;

                $imagen = $actividad->imagen ?? null;
                $archivoImagen = $request->file("lugares.$index.imagen");

                if ($archivoImagen) {
                    if ($imagen) {
                        FileManagement::deleteImg($imagen, '/talleres/actividades/');
                    }

                    $imagen = FileManagement::uploadImage($archivoImagen, '/talleres/actividades/', 800, 800);
                }

                $valores = [
                    'institucion_id' => $lugar['institucion_id'],
                    'instructor' => $lugar['instructor'] ?? null,
                    'modalidad' => $lugar['modalidad'],
                    'costo' => $lugar['costo'] ?? null,
                    'fecha_inicio' => $lugar['fecha_inicio'] ?? null,
                    'fecha_fin' => $lugar['fecha_fin'] ?? null,
                    'requisitos' => $lugar['requisitos'] ?? null,
                    'contacto_inscripcion' => $lugar['contacto_inscripcion'] ?? null,
                    'imagen' => $imagen,
                    'destacado' => $request->boolean("lugares.$index.destacado"),
                    'activo' => $request->boolean("lugares.$index.activo"),
                ];

                if ($actividad) {
                    $actividad->update($valores);
                } else {
                    $actividad = $taller->actividades()->create($valores);
                }

                $actividadesEnviadas[] = $actividad->id;

                $horariosEnviados = [];

                foreach ($lugar['horarios'] as $horario) {
                    $horarioModelo = !empty($horario['id'])
                        ? $actividad->horarios()->find($horario['id'])
                        : null;

                    $valoresHorario = [
                        'dia_semana' => $horario['dia_semana'],
                        'hora_inicio' => $horario['hora_inicio'],
                        'hora_fin' => $horario['hora_fin'],
                    ];

                    if ($horarioModelo) {
                        $horarioModelo->update($valoresHorario);
                    } else {
                        $horarioModelo = $actividad->horarios()->create($valoresHorario);
                    }

                    $horariosEnviados[] = $horarioModelo->id;
                }

                // Los horarios que ya no vinieron en el form (se quitaron con "Quitar") se eliminan.
                $actividad->horarios()->whereNotIn('id', $horariosEnviados)->delete();
            }

            // Los lugares que ya no vinieron en el form se eliminan (borra sus horarios
            // en cascada por la FK) y su imagen, si tenían.
            $taller->actividades()
                ->whereNotIn('id', $actividadesEnviadas)
                ->get()
                ->each(function ($actividad) {
                    if ($actividad->imagen) {
                        FileManagement::deleteImg($actividad->imagen, '/talleres/actividades/');
                    }

                    $actividad->delete();
                });
        });

        flash('Taller actualizado correctamente')->success();

        return redirect()->route('talleres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taller $taller)
    {
        $this->authorize('delete', $taller);

        DB::transaction(function () use ($taller) {
            $taller->actividades->each(function ($actividad) {
                if ($actividad->imagen) {
                    FileManagement::deleteImg($actividad->imagen, '/talleres/actividades/');
                }
            });

            // Borra en cascada sus actividades y los horarios de cada una (FK).
            $taller->delete();
        });

        flash('Taller eliminado correctamente')->success();

        return redirect()->route('talleres.index');
    }

    /**
     * Elimina un único lugar (Actividad) del taller, sin tocar el resto.
     *
     * @param  \App\Models\Taller  $taller
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function destroyActividad(Taller $taller, Actividad $actividad)
    {
        $this->authorize('delete', $taller);

        abort_unless((int) $actividad->taller_id === (int) $taller->id, 404);

        if ($actividad->imagen) {
            FileManagement::deleteImg($actividad->imagen, '/talleres/actividades/');
        }

        // Borra en cascada sus horarios (FK).
        $actividad->delete();

        flash('Lugar eliminado correctamente')->success();

        return redirect()->route('talleres.edit', $taller);
    }
}
