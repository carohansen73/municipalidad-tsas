<?php

namespace App\Http\Controllers;

use App\Models\Reclamo;
use App\Models\User;
use App\Models\Area;
use App\Models\ReclamoTema;
use Illuminate\Http\Request;
use Flash;
use Response;
use Image;

 /*SI ESTA LOGUEADO EN TADI GUARDA EL USUARIO , SINO ES ANONIMA*/
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
        /*HACERLO LOGUEARSE EN TADI O INGRESAR DENUNCIA ANONIMA*/
        $usuario = \Auth::user(); //chequear si anda cuando este auth
        $temas = ReclamoTema::orderBy('nombre', 'ASC')->get();
        return view('reclamos.create')
            ->with('temas', $temas)
            ->with('usuario', $usuario);
    }

    /**
     * almacena el nuevo reclamo.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request->area_id)
        $reclamo = New Reclamo($request->all());

        if(\Auth::user()){
            $reclamo->usuario_id =\Auth::user()->id;
        }

        // $reclamo->usuario_id = \Auth::user()->id; --> Cuando este Auth
        $reclamo->estado = 'IN';
        $reclamo->save();
        $reclamo->id;

        // $reclamo = Reclamo::findOrFail($reclamo->id);

        if($request->imagen){
            $reclamo->imagen = $this->uploadPicture($request, $reclamo->id, public_path().'/storage/reclamos/', 'imagen', 640, 480);
        }
        $reclamo->save();
        // $request->session()->flash('status', 'Task was successful!');
        Flash::success('Usted ah ingresado un nuevo reclamo.');

        return view('reclamos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reclamo  $Reclamo
     * @return \Illuminate\Http\Response
     */
    public function show(Reclamo $Reclamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reclamo  $Reclamo
     * @return \Illuminate\Http\Response
     */
    public function edit(Reclamo $Reclamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reclamo  $Reclamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reclamo $Reclamo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reclamo  $Reclamo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reclamo $Reclamo)
    {
        //
    }


      /*
    *   Sube avatar del usuario y retorna el nombre del archivo a buscar
    *   Ej: 1593014289que-la-gente-creajpg.jpg
    *   Que se guardará en la base de datos
    */
    public function uploadPicture(Request $request, $idReclamo, $url, $file_request_name, $width, $height)
    {
        // Si no existe la carpeta user_avatars la crea
        if (! \File::exists($url))
        {
            \File::makeDirectory($url);
        }

        $originalImage= $request->file($file_request_name);

        $thumbnailImage =  Image::make($originalImage)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        $thumbnailPath = $url;

        $avatarName = time() . '-' . \Str::slug($idReclamo . '-'). '.' .$request->$file_request_name->getClientOriginalExtension();

        $thumbnailImage->save($thumbnailPath . $avatarName);

        return $avatarName;
    }

}
