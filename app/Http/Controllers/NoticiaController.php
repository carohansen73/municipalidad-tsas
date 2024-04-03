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

        $this->noticiaRepository->delete($id);

        Flash::success('Noticia eliminada.');

        return redirect(route('noticias.index'));
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

    // public function show(Noticia $noticia){
    //     return new NoticiaResource($noticia);
    // }
}
