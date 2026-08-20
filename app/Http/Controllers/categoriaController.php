<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use App\Models\Categoria;
use App\Repositories\CategoriaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CategoriaController extends AppBaseController
{
    /** @var CategoriaRepository $categoriaRepository*/
    private $categoriaRepository;

    public function __construct(CategoriaRepository $categoriaRepo)
    {
        $this->categoriaRepository = $categoriaRepo;
    }

    /**
     * Display a listing of the Categoria.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Categoria::class);

        $categorias = $this->categoriaRepository->all();

        return view('cms.categorias.index')
            ->with('categorias', $categorias);
    }

    /**
     * Show the form for creating a new Categoria.
     *
     * @return Response
     */
    public function create()
    {
        $this->authorize('create', Categoria::class);

        return view('cms.categorias.create');
    }

    /**
     * Store a newly created Categoria in storage.
     *
     * @param CreateCategoriaRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoriaRequest $request)
    {
        $this->authorize('create', Categoria::class);

        $input = $request->all();

        $categoria = $this->categoriaRepository->create($input);

        Flash::success('Categoria saved successfully.');

        return redirect(route('categorias.index'));
    }

    /**
     * Display the specified Categoria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoria = $this->categoriaRepository->find($id);

        if (empty($categoria)) {
            Flash::error('Categoria not found');

            return redirect(route('categorias.index'));
        }

        $this->authorize('view', $categoria);

        return view('cms.categorias.show')->with('categoria', $categoria);
    }

    /**
     * Show the form for editing the specified Categoria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoria = $this->categoriaRepository->find($id);

        if (empty($categoria)) {
            Flash::error('Categoria not found');

            return redirect(route('categorias.index'));
        }

        $this->authorize('update', $categoria);

        return view('cms.categorias.edit')->with('categoria', $categoria);
    }

    /**
     * Update the specified Categoria in storage.
     *
     * @param int $id
     * @param UpdateCategoriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoriaRequest $request)
    {
        $categoria = $this->categoriaRepository->find($id);

        if (empty($categoria)) {
            Flash::error('Categoria not found');

            return redirect(route('categorias.index'));
        }

        $this->authorize('update', $categoria);

        $categoria = $this->categoriaRepository->update($request->all(), $id);

        Flash::success('Categoria updated successfully.');

        return redirect(route('categorias.index'));
    }

    /**
     * Remove the specified Categoria from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoria = $this->categoriaRepository->find($id);

        if (empty($categoria)) {
            Flash::error('Categoria not found');

            return redirect(route('categorias.index'));
        }

        $this->authorize('delete', $categoria);

        $this->categoriaRepository->delete($id);

        Flash::success('Categoria deleted successfully.');

        return redirect(route('categorias.index'));
    }
}
