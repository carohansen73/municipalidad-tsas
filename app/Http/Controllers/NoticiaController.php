<?php

namespace App\Http\Controllers;
use App\Models\Noticia;
use App\Models\NoticiaImg;
use App\Http\Resources\NoticiaResource;

use App\Http\Requests\CreatenoticiaRequest;
use App\Http\Requests\UpdatenoticiaRequest;
use App\Repositories\noticiaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;


use Symfony\Component\Routing\Route;

use Flash;
use Response;
use App\Models\Categoria;

use App\Municipalidad\FileManagement;

class noticiaController extends AppBaseController
{
    /** @var noticiaRepository $noticiaRepository*/
    private $noticiaRepository;

    public function __construct(noticiaRepository $noticiaRepo)
    {
        $this->noticiaRepository = $noticiaRepo;
    }

    /**
     * Display a listing of the noticia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $noticias = $this->noticiaRepository->all();

        return view('cms.noticias.index')
        ->with('noticias', $noticias);
    }

    /**
     * Show the form for creating a new noticia.
     *
     * @return Response
     */
    public function create()
    {
        $categorias=Categoria::pluck('nombre','id')->all();
        return view('cms.noticias.create',compact('categorias'));
    }

    /**
     * Store a newly created noticia in storage.
     *
     * @param CreatenoticiaRequest $request
     *
     * @return Response
     */
    public function store(CreatenoticiaRequest $request)
    {
        $input = $request->all();
        $input['usuario_id']=\Auth::user()->id;
        //dd($input);
        //dd(\Auth::user()->id);
        $noticia = $this->noticiaRepository->create($input);
        //Guardo las categorias asociadas
        if (!empty($input['categorias'])){
            foreach ($input['categorias'] as $id_categoria) {

                $noticia->categorias()->attach($id_categoria);
            }
            }
        else { $noticia->categorias()->attach(null);}

        //subo las imagenes y las guardo en la bd
        $path='/noticia_img/'.$noticia->id.'/';

        if (!empty($input['imagenes'])){
            foreach ($input['imagenes'] as $file) {
                $name=FileManagement::uploadImage($file,$path, 960, 680);
                $noticia->Imgs()->create([
                    'img'=>$name,
                    'leyenda'=>$noticia->titulo
                ]);
            }
        }

        Flash::success('Noticia Guardada.');
        return redirect(route('noticias.index'));
    }

    /**
     * Display the specified noticia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $noticia = $this->noticiaRepository->find($id);

        if (empty($noticia)) {
            Flash::error('No se encontro la noticia');

            return redirect(route('noticias.index'));
        }

        return view('cms.noticias.show')->with('noticia', $noticia);

    }

    /**
     * Show the form for editing the specified noticia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $noticia = $this->noticiaRepository->find($id);
        $categorias=Categoria::pluck('nombre','id')->all();

        if (empty($noticia)) {
            Flash::error('No se encontro la noticia');

            return redirect(route('noticias.index'));
        }

        //return view('cms.noticias.edit')->with('noticia', $noticia);
        return view('cms.noticias.edit',compact(['noticia','categorias']));
    }

    /**
     * Update the specified noticia in storage.
     *
     * @param int $id
     * @param UpdatenoticiaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatenoticiaRequest $request)
    {
        $noticia = $this->noticiaRepository->find($id);

        if (empty($noticia)) {
            Flash::error('No se encontro la noticiad');

            return redirect(route('noticias.index'));
        }

        $noticia = $this->noticiaRepository->update($request->all(), $id);

        $noticia->categorias()->sync($request['categorias']);

        $path='/noticia_img/'.$noticia->id.'/';

        if (!empty($request['imagenes'])){
            foreach ($request['imagenes'] as $file) {
                $name=FileManagement::uploadImage($file,$path, 960, 680);
                $noticia->Imgs()->create([
                    'img'=>$name,
                    'leyenda'=>$noticia->titulo
                ]);
            }
        }
        Flash::success('Noticia Guardada.');

        return redirect(route('noticias.index'));
    }

    /**
     * Remove the specified noticia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $noticia = $this->noticiaRepository->find($id);

        if (empty($noticia)) {
            Flash::error('No se encontro la noticia');

            return redirect(route('noticias.index'));
        }
        //primero elimino las fotos relacionadas a esta noticia
        $this->destroyAllImgs($id);

        //elimino la noticia
        $this->noticiaRepository->delete($id);

        Flash::success('Noticia eliminada.');
        return redirect(route('noticias.index'));
    }


    public function destroyAllImgs($noticia_id){
        //busco todas la simg relacionadas a la noticia que quiero eliminar
        $imagenes = NoticiaImg::whereIn('noticia_id', [$noticia_id])->get();

        //elimino una x una
        if(!empty($imagenes)){
            foreach($imagenes as $img){

                 //borro el archivo
                $dir="noticia_img/".$noticia_id."/";
                $res=FileManagement::deleteImg($img->img,$dir);
                $img->delete();
            }
        }
    }




    public function destroyImg($id){
        $imagen = NoticiaImg::find($id);
        $id_noticia=$imagen->noticia_id;
        if (empty($imagen)) {
            Flash::error('No se encontro la imagen');

            return redirect(route('noticias.index'));
        }

        //borro el archivo
        $dir="noticia_img/".$imagen->noticia_id."/";
        $res=FileManagement::deleteImg($imagen->img,$dir);
        $imagen->delete();

        Flash::success('imagen eliminada.');

        return redirect(route('noticias.edit',$id_noticia));

    }


    public function all(){
        return NoticiaResource::collection(Noticia::latest()->paginate());
       // return $campana = 'hola';
    }

    public function getByCategory($id){
       // var_dump($categoria);die;
        return NoticiaResource::collection(Noticia::where('categoria_id', $id)->latest()->take(2)->get());
       // $noticias = Noticia::where('seccion_id', SeccionPagina::where('link', $pathSeccion)->pluck('id'))->get();
    }
}
