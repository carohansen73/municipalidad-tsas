<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAvisoOficialRequest;
use App\Http\Requests\UpdateAvisoOficialRequest;
use App\Repositories\AvisoOficialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\AvisoOficial;
use App\Municipalidad\FileManagement;

class AvisoOficialController extends AppBaseController
{
    /** @var AvisoOficialRepository $avisoOficialRepository*/
    private $avisoOficialRepository;

    private $areas=[
        "aviso"=> "aviso",
        "bromatologia" => "bromatologia",
        "gestion" => "gestion",
        "protocolo"=> "protocolo"
    ];


    public function __construct(AvisoOficialRepository $avisoOficialRepo)
    {
        $this->avisoOficialRepository = $avisoOficialRepo;
    }

    /**
     * Display a listing of the AvisoOficial.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $avisoOficials = AvisoOficial::orderBy('fecha', 'desc')->get();

        return view('cms.aviso_oficial.index')
            ->with('avisoOficials', $avisoOficials);
    }

    /**
     * Show the form for creating a new AvisoOficial.
     *
     * @return Response
     */
    public function create()
    {
        return view('cms.aviso_oficial.create')
        ->with('areas', $this->areas);
    }

    /**
     * Store a newly created AvisoOficial in storage.
     *
     * @param CreateAvisoOficialRequest $request
     *
     * @return Response
     */
    public function store(CreateAvisoOficialRequest $request)
    {
        $input = $request->all();

        //subo el archivo
        $file = $input["nombre"];
        $name = $input["titulo"]."-";
        $dir = "archivos/boletin_oficial/avisos/";
        $input["nombre"]=FileManagement::uploadFile($file, $name, $dir);

        //guardo en bbdd
        $avisoOficial = $this->avisoOficialRepository->create($input);

        Flash::success('Aviso Oficial saved successfully.');

        return redirect(route('avisoOficial.index'));
    }

    /**
     * Display the specified AvisoOficial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $avisoOficial = $this->avisoOficialRepository->find($id);

        if (empty($avisoOficial)) {
            Flash::error('Aviso Oficial not found');

            return redirect(route('avisoOficials.index'));
        }

        return view('cms.aviso_oficial.show')->with('avisoOficial', $avisoOficial);
    }

    /**
     * Show the form for editing the specified AvisoOficial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $avisoOficial = $this->avisoOficialRepository->find($id);

        if (empty($avisoOficial)) {
            Flash::error('Aviso Oficial not found');

            return redirect(route('avisoOficial.index'));
        }

        return view('cms.aviso_oficial.edit')->with('avisoOficial', $avisoOficial)->with('areas', $this->areas);
    }

    /**
     * Update the specified AvisoOficial in storage.
     *
     * @param int $id
     * @param UpdateAvisoOficialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAvisoOficialRequest $request)
    {
        $avisoOficial = $this->avisoOficialRepository->find($id);
        // $input = $request->all();

        if (empty($avisoOficial)) {
            Flash::error('Aviso Oficial not found');

            return redirect(route('avisoOficial.index'));
        }


       //si entra es porque cambio el archivo
       if ($request->file('nombre')) {
                //borro archivo anterior
                if ($avisoOficial->nombre != null ) {

                    $dir = "archivos/boletin_oficial/avisos/";
                    FileManagement::deleteFile($avisoOficial->nombre,$dir);
                }
                $avisoOficial->fill($request->all());
                //guardo el nuevo
                $file = $request->file('nombre');
                $name = $request->titulo."-";
                $dir = "archivos/boletin_oficial/avisos/";
                $avisoOficial->nombre=FileManagement::uploadFile($file, $name, $dir);

       }else{
            $avisoOficial->fill($request->all());
       }
       $avisoOficial->save();



        // if($avisoOficial->nombre != $input['nombre']){
        //     var_dump('diferente, anterior:' . $avisoOficial->nombre.'   nuevo:'. $input['nombre']);die;
        // }else{
        //     var_dump('IGUALES' . $avisoOficial->nombre. $input['nombre']);die;
        // }

        // $avisoOficial = $this->avisoOficialRepository->update($request->all(), $id);

        Flash::success('Aviso Oficial updated successfully.');

        return redirect(route('avisoOficial.index'));
    }

    /**
     * Remove the specified AvisoOficial from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $avisoOficial = $this->avisoOficialRepository->find($id);

        if (empty($avisoOficial)) {
            Flash::error('Aviso Oficial not found');

            return redirect(route('avisoOficial.index'));
        }
        //borro el archivo (storage)
        $dir = "archivos/boletin_oficial/avisos/";
        FileManagement::deleteFile($avisoOficial->nombre,$dir);
        //borro de la tabla (bbdd)
        $this->avisoOficialRepository->delete($id);

        Flash::success('Aviso Oficial deleted successfully.');

        return redirect(route('avisoOficial.index'));
    }
}
