<?php

namespace App\Http\Controllers;

use App\Models\Reclamos;
use App\Models\User;
use Illuminate\Http\Request;

class ReclamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = \Auth::user(); //chequear si anda cuando este auth
        return view('reclamos.index')->with('usuario', $usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = \Auth::user(); //chequear si anda cuando este auth

        return view('reclamos.create')->with('usuario', $usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reclamos  $reclamos
     * @return \Illuminate\Http\Response
     */
    public function show(Reclamos $reclamos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reclamos  $reclamos
     * @return \Illuminate\Http\Response
     */
    public function edit(Reclamos $reclamos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reclamos  $reclamos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reclamos $reclamos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reclamos  $reclamos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reclamos $reclamos)
    {
        //
    }
}
