<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventoRequest;
use App\Http\Requests\UpdateEventoRequest;
use App\Repositories\EventoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\MenuSeccion;
use App\Models\Evento;
use Flash;
use Response;
use App\Municipalidad\FileManagement;

class EventoController extends AppBaseController
{
    /** @var EventoRepository $eventoRepository*/
    private $eventoRepository;

    public function __construct(EventoRepository $eventoRepo)
    {
        $this->eventoRepository = $eventoRepo;
    }

    /**
     * Display a listing of the Evento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $eventos = $this->eventoRepository->all();
        $secciones=MenuSeccion::where('visible', 1)->orderBy('nombre')->pluck('nombre','id')->all();

        return view('cms.eventos.index')
            ->with('eventos', $eventos)->with('secciones', $secciones);

    }

    /**
     * Show the form for creating a new Evento.
     *
     * @return Response
     */
    public function create()
    {
        $secciones=MenuSeccion::where('visible', 1)->orderBy('nombre')->pluck('nombre','id')->all();
        return view('cms.eventos.create')->with('secciones', $secciones);
    }

    /**
     * Store a newly created Evento in storage.
     *
     * @param CreateEventoRequest $request
     *
     * @return Response
     */
    public function store(CreateEventoRequest $request)
    {
        //subo las imagenes y las guardo en la bd
        $path='/eventos/';

        if (!empty($request->img)){
            // foreach ($input['imagenes'] as $file) {
                // dd($request->img);
            $name=FileManagement::uploadImage($request->img ,$path, 480, 720);

            $evento = new Evento($request->all());

            $evento->img = $name;
            $evento->save();
            Flash::success('Evento creado con éxito.');

             return redirect(route('eventos.index'));
        }else{
            Flash::success('No se pudo cargar el Evento.');

            return redirect(route('eventos.index'));
        }

    }

    /**
     * Display the specified Evento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {

        $evento = $this->eventoRepository->find($id);

        if (empty($evento)) {
            Flash::error('Evento not found');

            return redirect(route('eventos.index'));
        }

        return view('cms.eventos.show')->with('evento', $evento);
    }

    /**
     * Show the form for editing the specified Evento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evento = $this->eventoRepository->find($id);
        $secciones=MenuSeccion::where('visible', 1)->orderBy('nombre')->pluck('nombre','id')->all();

        if (empty($evento)) {
            Flash::error('Evento not found');

            return redirect(route('eventos.index'));
        }

        return view('cms.eventos.edit')->with('evento', $evento)->with('secciones', $secciones);
    }

    /**
     * Update the specified Evento in storage.
     *
     * @param int $id
     * @param UpdateEventoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventoRequest $request)
    {
        $evento = $this->eventoRepository->find($id);

        $imgAnterior = $evento->img;

        if (empty($evento)) {
            Flash::error('Evento not found');

            return redirect(route('eventos.index'));
        }

        $evento->fill($request->all());

        //subo las imagenes y las guardo en la bd

        if (!empty($request->img)){
            $path='/eventos/';

            //borro la img anterior
            FileManagement::deleteImg( $imgAnterior, $path);
            //guardo nueva img
            $name=FileManagement::uploadImage($request->img ,$path, 480, 720);

            // $evento = new Evento($request->all());

            $evento->img = $name;
            $evento->save();
            Flash::success('Evento creado con éxito.');

             return redirect(route('eventos.index'));
        }else{
            $evento->save();
        }

        Flash::success('Evento updated successfully.');

        return redirect(route('eventos.index'));

    }

    /**
     * Remove the specified Evento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evento = $this->eventoRepository->find($id);

        if (empty($evento)) {
            Flash::error('Evento not found');

            return redirect(route('eventos.index'));
        }

        $path='/eventos/';
        //borro la img anterior
        FileManagement::deleteImg( $evento->img, $path);

        $this->eventoRepository->delete($id);

        Flash::success('Evento deleted successfully.');

        return redirect(route('eventos.index'));
    }
}
