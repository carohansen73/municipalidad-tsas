<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLineUpRequest;
use App\Http\Requests\UpdateLineUpRequest;
use App\Repositories\LineUpRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Municipalidad\FileManagement;
use App\Models\LineUp;
use Flash;
use Response;

class LineUpController extends AppBaseController
{
    /** @var LineUpRepository $lineUpRepository*/
    private $lineUpRepository;

    public function __construct(LineUpRepository $lineUpRepo)
    {
        $this->lineUpRepository = $lineUpRepo;
    }

    /**
     * Display a listing of the LineUp.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $lineUps = $this->lineUpRepository->all();

        return view('cms.line_ups.index')
            ->with('lineUps', $lineUps);
    }

    /**
     * Show the form for creating a new LineUp.
     *
     * @return Response
     */
    public function create()
    {
        return view('cms.line_ups.create');
    }

    /**
     * Store a newly created LineUp in storage.
     *
     * @param CreateLineUpRequest $request
     *
     * @return Response
     */
    public function store(CreateLineUpRequest $request)
    {

        $path='/fdt/';

        if (!empty($request->img)){
            // foreach ($input['imagenes'] as $file) {
                // dd($request->img);
            $imgName = FileManagement::uploadImage($request->img ,$path, 600, 600);

            $LineUp = new LineUp($request->all());

            $LineUp->img = $imgName;
            $LineUp->save();
            Flash::success('LineUp creado con éxito.');

            return redirect(route('lineUps.index'));
        }else{
            Flash::error('No se pudo crear el evento.');

            return redirect(route('eventos.index'));
        }
    }

    /**
     * Display the specified LineUp.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lineUp = $this->lineUpRepository->find($id);

        if (empty($lineUp)) {
            Flash::error('Line Up not found');

            return redirect(route('lineUps.index'));
        }

        return view('cms.line_ups.show')->with('lineUp', $lineUp);
    }

    /**
     * Show the form for editing the specified LineUp.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lineUp = $this->lineUpRepository->find($id);

        if (empty($lineUp)) {
            Flash::error('Line Up not found');

            return redirect(route('lineUps.index'));
        }

        return view('cms.line_ups.edit')->with('lineUp', $lineUp);
    }

    /**
     * Update the specified LineUp in storage.
     *
     * @param int $id
     * @param UpdateLineUpRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLineUpRequest $request)
    {
        $lineUp = $this->lineUpRepository->find($id);

        if (empty($lineUp)) {
            Flash::error('Line Up not found');

            return redirect(route('lineUps.index'));
        }

        $lineUp = $this->lineUpRepository->update($request->all(), $id);

        Flash::success('Line Up updated successfully.');

        return redirect(route('lineUps.index'));
    }

    /**
     * Remove the specified LineUp from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lineUp = $this->lineUpRepository->find($id);

        if (empty($lineUp)) {
            Flash::error('Line Up not found');

            return redirect(route('lineUps.index'));
        }

        $this->lineUpRepository->delete($id);

        Flash::success('Line Up deleted successfully.');

        return redirect(route('lineUps.index'));
    }
}
