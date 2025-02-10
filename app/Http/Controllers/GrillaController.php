<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGrillaRequest;
use App\Http\Requests\UpdateGrillaRequest;
use App\Repositories\GrillaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GrillaController extends AppBaseController
{
    /** @var GrillaRepository $grillaRepository*/
    private $grillaRepository;

    public function __construct(GrillaRepository $grillaRepo)
    {
        $this->grillaRepository = $grillaRepo;
    }

    /**
     * Display a listing of the Grilla.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $grillas = $this->grillaRepository->all();

        return view('cms.grillas.index')
            ->with('grillas', $grillas);
    }

    /**
     * Show the form for creating a new Grilla.
     *
     * @return Response
     */
    public function create()
    {
        return view('cms.grillas.create');
    }

    /**
     * Store a newly created Grilla in storage.
     *
     * @param CreateGrillaRequest $request
     *
     * @return Response
     */
    public function store(CreateGrillaRequest $request)
    {
        $input = $request->all();

        $grilla = $this->grillaRepository->create($input);

        Flash::success('Grilla saved successfully.');

        return redirect(route('grillas.index'));
    }

    /**
     * Display the specified Grilla.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grilla = $this->grillaRepository->find($id);

        if (empty($grilla)) {
            Flash::error('Grilla not found');

            return redirect(route('grillas.index'));
        }

        return view('cms.grillas.show')->with('grilla', $grilla);
    }

    /**
     * Show the form for editing the specified Grilla.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grilla = $this->grillaRepository->find($id);

        if (empty($grilla)) {
            Flash::error('Grilla not found');

            return redirect(route('grillas.index'));
        }

        return view('cms.grillas.edit')->with('grilla', $grilla);
    }

    /**
     * Update the specified Grilla in storage.
     *
     * @param int $id
     * @param UpdateGrillaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGrillaRequest $request)
    {
        $grilla = $this->grillaRepository->find($id);

        if (empty($grilla)) {
            Flash::error('Grilla not found');

            return redirect(route('grillas.index'));
        }

        $grilla = $this->grillaRepository->update($request->all(), $id);

        Flash::success('Grilla updated successfully.');

        return redirect(route('grillas.index'));
    }

    /**
     * Remove the specified Grilla from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grilla = $this->grillaRepository->find($id);

        if (empty($grilla)) {
            Flash::error('Grilla not found');

            return redirect(route('grillas.index'));
        }

        $this->grillaRepository->delete($id);

        Flash::success('Grilla deleted successfully.');

        return redirect(route('grillas.index'));
    }
}
