<?php

namespace App\Http\Controllers;
use App\Models\Noticia;
use App\Models\NoticiaImg;
use App\Http\Resources\NoticiaResource;

use Illuminate\Http\Request;


use Symfony\Component\Routing\Route;


class NoticiaController extends Controller
{
    public function all(){
         return NoticiaResource::collection(Noticia::latest()->paginate());
        // return $campana = 'hola';
    }

    public function getByCategory($id){
        // var_dump($categoria);die;
         return NoticiaResource::collection(Noticia::where('categoria_id', $id)->latest()->take(2)->get());
        // $noticias = Noticia::where('seccion_id', SeccionPagina::where('link', $pathSeccion)->pluck('id'))->get();

    }

    // public function show(Noticia $noticia){
    //     return new NoticiaResource($noticia);
    // }
}
