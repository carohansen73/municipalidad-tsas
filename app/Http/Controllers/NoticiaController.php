<?php

namespace App\Http\Controllers;
use App\Models\Noticia;
use App\Models\NoticiaImg;
use App\Http\Resources\NoticiaResource;

use Illuminate\Http\Request;


use Symfony\Component\Routing\Route;


class NoticiaController extends Controller
{
    public function index(){
        return NoticiaResource::collection(Noticia::latest()->paginate());
    }

    public function show(Noticia $noticia){
        return new NoticiaResource($noticia);
    }
}
