<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSeccionInformacionRequest;
use App\Http\Requests\UpdateSeccionInformacionRequest;
use App\Repositories\SeccionInformacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Seccion;

class SeccionInformacionController extends AppBaseController
{
    /** @var SeccionInformacionRepository $seccionInformacionRepository*/
    private $seccionInformacionRepository;

    public function __construct(SeccionInformacionRepository $seccionInformacionRepo)
    {
        $this->seccionInformacionRepository = $seccionInformacionRepo;
    }

    /**
     * Display a listing of the SeccionInformacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $seccionInformacions = $this->seccionInformacionRepository->all();

        return view('cms.seccion_informacion.index')
            ->with('seccionInformacions', $seccionInformacions);
    }

    /**
     * Show the form for creating a new SeccionInformacion.
     *
     * @return Response
     */
    public function create()
    {
        $secciones=Seccion::orderBy('nombre')->pluck('nombre','id')->all();
        return view('cms.seccion_informacion.create',compact('secciones'));
    }

    /**
     * Store a newly created SeccionInformacion in storage.
     *
     * @param CreateSeccionInformacionRequest $request
     *
     * @return Response
     */
    public function store(CreateSeccionInformacionRequest $request)
    {

        $input = $request->all();

        $seccionInformacion = $this->seccionInformacionRepository->create($input);
        // $seccionInformacion->id

        // $request->avatar->storeAs('', 'imagen.jpg', 'avatars');

        var_dump( $seccionInformacion, $request->img);die;

        Flash::success('Seccion Informacion saved successfully.');

        return redirect(route('seccionInformacions.index'));
    }

    /**
     * Display the specified SeccionInformacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $seccionInformacion = $this->seccionInformacionRepository->find($id);

        if (empty($seccionInformacion)) {
            Flash::error('Seccion Informacion not found');

            return redirect(route('seccionInformacions.index'));
        }

        return view('cms.seccion_informacion.show')->with('seccionInformacion', $seccionInformacion);
    }

    /**
     * Show the form for editing the specified SeccionInformacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $secciones=Seccion::orderBy('nombre')->pluck('nombre','id')->all();
        $seccionInformacion = $this->seccionInformacionRepository->find($id);

        if (empty($seccionInformacion)) {
            Flash::error('Seccion Informacion not found');

            return redirect(route('seccionInformacions.index'));
        }

        return view('cms.seccion_informacion.edit',compact('secciones', 'seccionInformacion'));
    }

    /**
     * Update the specified SeccionInformacion in storage.
     *
     * @param int $id
     * @param UpdateSeccionInformacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSeccionInformacionRequest $request)
    {
        // var_dump($request->updated_at);die;
        $seccionInformacion = $this->seccionInformacionRepository->find($id);

        if (empty($seccionInformacion)) {
            Flash::error('Seccion Informacion not found');

            return redirect(route('seccionInformacions.index'));
        }

        $seccionInformacion = $this->seccionInformacionRepository->update($request->all(), $id);

        Flash::success('Seccion Informacion updated successfully.');

        return redirect(route('seccionInformacions.index'));
    }

    /**
     * Remove the specified SeccionInformacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $seccionInformacion = $this->seccionInformacionRepository->find($id);

        if (empty($seccionInformacion)) {
            Flash::error('Seccion Informacion not found');

            return redirect(route('seccionInformacions.index'));
        }

        $this->seccionInformacionRepository->delete($id);

        Flash::success('Seccion Informacion deleted successfully.');

        return redirect(route('seccionInformacions.index'));
    }
}
