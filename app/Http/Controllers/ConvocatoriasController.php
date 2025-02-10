<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConvocatoriasRequest;
use App\Http\Requests\UpdateConvocatoriasRequest;
use App\Repositories\ConvocatoriasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Municipalidad\FileManagement;
use App\Models\Convocatorias;
use Flash;
use Response;

class ConvocatoriasController extends AppBaseController
{
    /** @var ConvocatoriasRepository $convocatoriasRepository*/
    private $convocatoriasRepository;

    public function __construct(ConvocatoriasRepository $convocatoriasRepo)
    {
        $this->convocatoriasRepository = $convocatoriasRepo;
    }

    /**
     * Display a listing of the Convocatorias.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $convocatorias = $this->convocatoriasRepository->all();

        return view('cms.convocatorias.index')
            ->with('convocatorias', $convocatorias);
    }

    /**
     * Show the form for creating a new Convocatorias.
     *
     * @return Response
     */
    public function create()
    {
        return view('cms.convocatorias.create');
    }

    /**
     * Store a newly created Convocatorias in storage.
     *
     * @param CreateConvocatoriasRequest $request
     *
     * @return Response
     */
    public function store(CreateConvocatoriasRequest $request)
    {
        $convocatoria = new Convocatorias($request->all());
        $path='/fdt/';

        //si tiene img la guardo
        if (!empty($request->img)){
            $imgName = FileManagement::uploadImage($request->img ,$path, 800, 800);
            $convocatoria->img = $imgName;
        }
        if (!empty($request->archivo)){
            $file=$request["archivo"];
            $name = "convocatoria-";
            $archivoName = FileManagement::uploadFile($file,$name,$path);
            $convocatoria->archivo = $archivoName;
        }

        $convocatoria->save();
        Flash::success('Convocatoria creada con éxito.');

        return redirect(route('convocatorias.index'));
    }

    /**
     * Display the specified Convocatorias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $convocatorias = $this->convocatoriasRepository->find($id);

        if (empty($convocatorias)) {
            Flash::error('Convocatorias not found');

            return redirect(route('convocatorias.index'));
        }

        return view('cms.convocatorias.show')->with('convocatorias', $convocatorias);
    }

    /**
     * Show the form for editing the specified Convocatorias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $convocatorias = $this->convocatoriasRepository->find($id);

        if (empty($convocatorias)) {
            Flash::error('Convocatorias not found');

            return redirect(route('convocatorias.index'));
        }

        return view('cms.convocatorias.edit')->with('convocatorias', $convocatorias);
    }

    /**
     * Update the specified Convocatorias in storage.
     *
     * @param int $id
     * @param UpdateConvocatoriasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConvocatoriasRequest $request)
    {
        $convocatoria = $this->convocatoriasRepository->find($id);
        $imgAnterior = $convocatoria->img;
        $archivoAnterior = $convocatoria->archivo;



        if (empty($convocatoria)) {
            Flash::error('Convocatorias not found');

            return redirect(route('convocatorias.index'));
        }

        $input=$request->all();
        $path='/fdt/';

        if (!empty($request->img)){
            //borro la img anterior
            FileManagement::deleteImg($convocatoria->img, $path);
            //guardo nueva img
            $imgName=FileManagement::uploadImage($request->img ,$path, 800, 800);

            $input['img'] = $imgName;
        }

        if (!empty($request->archivo)){
            //borro el archivo anterior
            FileManagement::deleteFile($convocatoria->archivo, $path);
            //subo el que cargo ahora
            $file=$request->archivo;
            $name = "convocatoria-";
            //guardo el nombre que devuelve en el input para actualizar la tabla
            $input['archivo']=FileManagement::uploadFile($file,$name,$path);
        }

        $situacionFinanciera = $this->convocatoriasRepository->update($input, $id);


        Flash::success('Convocatorias updated successfully.');

        return redirect(route('convocatorias.index'));
    }



    /**
     * Remove the specified Convocatorias from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $convocatorias = $this->convocatoriasRepository->find($id);

        if (empty($convocatorias)) {
            Flash::error('Convocatorias not found');

            return redirect(route('convocatorias.index'));
        }

        $this->convocatoriasRepository->delete($id);

        Flash::success('Convocatorias deleted successfully.');

        return redirect(route('convocatorias.index'));
    }
}
