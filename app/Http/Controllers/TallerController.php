<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTallerRequest;
use App\Models\CategoriaActividad;
use App\Models\Institucion;
use App\Models\Publico;
use App\Models\Taller;
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

        DB::transaction(function () use ($data) {
            $taller = Taller::create([
                'nombre' => $data['nombre'],
                'descripcion' => $data['descripcion'] ?? null,
                'categoria_id' => $data['categoria_id'],
                'publico_id' => $data['publico_id'],
                'activo' => true,
            ]);

            foreach ($data['lugares'] as $lugar) {
                $actividad = $taller->actividades()->create([
                    'institucion_id' => $lugar['institucion_id'],
                    'instructor' => $lugar['instructor'] ?? null,
                    'modalidad' => $lugar['modalidad'],
                    'costo' => $lugar['costo'] ?? null,
                    'fecha_inicio' => $lugar['fecha_inicio'] ?? null,
                    'fecha_fin' => $lugar['fecha_fin'] ?? null,
                    'requisitos' => $lugar['requisitos'] ?? null,
                    'contacto_inscripcion' => $lugar['contacto_inscripcion'] ?? null,
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
}
