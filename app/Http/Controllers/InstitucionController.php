<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInstitucionRequest;
use App\Http\Requests\UpdateInstitucionRequest;
use App\Models\Institucion;

class InstitucionController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Institucion::class);

        $instituciones = Institucion::withCount('actividades')
            ->orderBy('nombre')
            ->get();

        return view('cms.instituciones.index', compact('instituciones'));
    }

    public function create()
    {
        $this->authorize('create', Institucion::class);

        return view('cms.instituciones.create');
    }

    public function store(StoreInstitucionRequest $request)
    {
        $this->authorize('create', Institucion::class);

        Institucion::create($request->validated());

        flash('Institución creada correctamente')->success();

        return redirect()->route('instituciones.index');
    }

    public function edit(Institucion $institucion)
    {
        $this->authorize('update', $institucion);

        return view('cms.instituciones.edit', compact('institucion'));
    }

    public function update(UpdateInstitucionRequest $request, Institucion $institucion)
    {
        $this->authorize('update', $institucion);

        $institucion->update($request->validated());

        flash('Institución actualizada correctamente')->success();

        return redirect()->route('instituciones.index');
    }

    public function destroy(Institucion $institucion)
    {
        $this->authorize('delete', $institucion);

        if ($institucion->actividades()->exists()) {
            flash('No se puede eliminar "' . $institucion->nombre . '" porque tiene talleres asociados. Primero desvinculá o eliminá esos talleres.')->error();

            return redirect()->route('instituciones.index');
        }

        $institucion->delete();

        flash('Institución eliminada correctamente')->success();

        return redirect()->route('instituciones.index');
    }
}
