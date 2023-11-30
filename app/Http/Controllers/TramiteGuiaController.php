<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\TramiteTipo;
use App\Models\TramiteGuia;
use Illuminate\Http\Request;

/*Esta clase maneja la guia de tramites desde el CMS
*/
class TramiteGuiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposTramites = TramiteTipo::orderBy('tipo')->get();
        $guiaTramites = TramiteGuia::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TramiteGuia  $tramiteGuia
     * @return \Illuminate\Http\Response
     */
    public function show(TramiteGuia $tramiteGuia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TramiteGuia  $tramiteGuia
     * @return \Illuminate\Http\Response
     */
    public function edit(TramiteGuia $tramiteGuia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TramiteGuia  $tramiteGuia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TramiteGuia $tramiteGuia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TramiteGuia  $tramiteGuia
     * @return \Illuminate\Http\Response
     */
    public function destroy(TramiteGuia $tramiteGuia)
    {
        //
    }
}
