<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArchivosRequest;
use App\Http\Requests\UpdateArchivosRequest;
use App\Repositories\ArchivosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ArchivosController extends AppBaseController
{
    /** @var ArchivosRepository $archivosRepository*/
    private $archivosRepository;

    public function __construct(ArchivosRepository $archivosRepo)
    {
        $this->archivosRepository = $archivosRepo;
    }

    /**
     * Display a listing of the Archivos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $archivos = $this->archivosRepository->all();

        return view('cms.archivos.index')
            ->with('archivos', $archivos);
    }

    /**
     * Show the form for creating a new Archivos.
     *
     * @return Response
     */
    public function create()
    {
        return view('cms.archivos.create');
    }

    /**
     * Store a newly created Archivos in storage.
     *
     * @param CreateArchivosRequest $request
     *
     * @return Response
     */
    public function store(CreateArchivosRequest $request)
    {
        $input = $request->all();

        $archivos = $this->archivosRepository->create($input);

        Flash::success('Archivos saved successfully.');

        return redirect(route('archivos.index'));
    }

    /**
     * Display the specified Archivos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $archivos = $this->archivosRepository->find($id);

        if (empty($archivos)) {
            Flash::error('Archivos not found');

            return redirect(route('archivos.index'));
        }

        return view('cms.archivos.show')->with('archivos', $archivos);
    }

    /**
     * Show the form for editing the specified Archivos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $archivos = $this->archivosRepository->find($id);

        if (empty($archivos)) {
            Flash::error('Archivos not found');

            return redirect(route('archivos.index'));
        }

        return view('cms.archivos.edit')->with('archivos', $archivos);
    }

    /**
     * Update the specified Archivos in storage.
     *
     * @param int $id
     * @param UpdateArchivosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArchivosRequest $request)
    {
        $archivos = $this->archivosRepository->find($id);

        if (empty($archivos)) {
            Flash::error('Archivos not found');

            return redirect(route('archivos.index'));
        }

        $archivos = $this->archivosRepository->update($request->all(), $id);

        Flash::success('Archivos updated successfully.');

        return redirect(route('archivos.index'));
    }

    /**
     * Remove the specified Archivos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $archivos = $this->archivosRepository->find($id);

        if (empty($archivos)) {
            Flash::error('Archivos not found');

            return redirect(route('archivos.index'));
        }

        $this->archivosRepository->delete($id);

        Flash::success('Archivos deleted successfully.');

        return redirect(route('archivos.index'));
    }
}
