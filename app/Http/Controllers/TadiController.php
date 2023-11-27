<?php

namespace App\Http\Controllers;

use App\Models\Tadi;
use Illuminate\Http\Request;

class TadiController extends Controller
{
    /**
     * Muestar el Index de Tres Arroyos Digital
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tadi.index');
    }

    /**
     * Resgistrar usuario a TADi (o lo hago en el index con js?)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Almacenar nuevo usuario de TADi
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Perfil del usuario por si quiere ver/modificar datos
     *
     * @param  \App\Models\Tadi  $tadi
     * @return \Illuminate\Http\Response
     */
    public function show(Tadi $tadi)
    {
        //
    }

    /**
     * Modificar datos (v er si se puede modificar algo) o usarla para modificar password
     *
     * @param  \App\Models\Tadi  $tadi
     * @return \Illuminate\Http\Response
     */
    public function edit(Tadi $tadi)
    {
        //
    }

    /**
     * Almacena los datos actualizados/modificados
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tadi  $tadi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tadi $tadi)
    {
        //
    }

    /**
     * Eliminar usuario TADi
     *
     * @param  \App\Models\Tadi  $tadi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tadi $tadi)
    {
        //
    }
}
