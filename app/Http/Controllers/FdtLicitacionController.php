<?php

namespace App\Http\Controllers;

use App\Models\FdtLicitacion;
use Illuminate\Http\Request;

class FdtLicitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', FdtLicitacion::class);

        $licitaciones = FdtLicitacion::withCount('archivos')
            ->orderByDesc('created_at')
            ->get();

        return view('cms.fdt.licitaciones.index', compact('licitaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', FdtLicitacion::class);

         return view('cms.fdt.licitaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', FdtLicitacion::class);

        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        // Desactivo licitaciones de ediciones anteriores
        FdtLicitacion::where('activa', true)->update(['activa' => false]);

        // Creo la nueva licitación como activa
        FdtLicitacion::create([
            'titulo'      => $request->titulo,
            'descripcion' => $request->descripcion,
            'activa'      => true,
        ]);

        flash('Licitación creada correctamente')->success();

        return redirect()->route('licitaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FdtLicitacion $licitacion)
    {
        $this->authorize('update', $licitacion);

        // Traigo la licitación + archivos
        $licitacion->load('archivos');

         return view('cms.fdt.licitaciones.edit')
            ->with('licitacion', $licitacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  FdtLicitacion $licitacion)
    {
        $this->authorize('update', $licitacion);

        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        $licitacion->update($validated);

        flash('Licitación actualizada correctamente')->success();

        return redirect()->route('licitaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
