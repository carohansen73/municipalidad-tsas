<?php

namespace App\Http\Controllers;

use App\Models\FdtLicitacionArchivo;
use App\Http\Requests\StoreFdtLicitacionArchivoRequest;
use App\Http\Requests\UpdateFdtLicitacionArchivoRequest;
use App\Models\FdtLicitacion;
use Illuminate\Support\Str;

class FdtLicitacionArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFdtLicitacionArchivoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFdtLicitacionArchivoRequest $request, FdtLicitacion $licitacion)
    {
        $this->authorize('create', FdtLicitacionArchivo::class);

        // Valido las reglas
        $validated= $request->validated(); //ahora es un array

        // Genero nombre del archivo y lo guardo
        $filename = Str::slug($request->titulo) . '-' . time() . '.pdf';
        $path = $request->file('archivo')
            ->storeAs('fdt/licitaciones', $filename, 'public');

        // Hago el insert en la DB
        $licitacion->archivos()->create([
            'titulo' => $validated['titulo'],
            'archivo' => $path,
            'activa' => true,
        ]);

        flash('Archivo agregado correctamente')->success();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FdtLicitacionArchivo  $fdtLicitacionArchivo
     * @return \Illuminate\Http\Response
     */
    public function show(FdtLicitacionArchivo $fdtLicitacionArchivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FdtLicitacionArchivo  $fdtLicitacionArchivo
     * @return \Illuminate\Http\Response
     */
    public function edit(FdtLicitacionArchivo $fdtLicitacionArchivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFdtLicitacionArchivoRequest  $request
     * @param  \App\Models\FdtLicitacionArchivo  $fdtLicitacionArchivo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFdtLicitacionArchivoRequest $request, FdtLicitacionArchivo $fdtLicitacionArchivo)
    {
         $ticket->update($request->validated());

        flash('Edición actualizada correctamente')->success();
        return redirect()->route('tickets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FdtLicitacionArchivo  $fdtLicitacionArchivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(FdtLicitacionArchivo $fdtLicitacionArchivo)
    {
        //
    }
}
