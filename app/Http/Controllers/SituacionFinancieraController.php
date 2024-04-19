<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSituacionFinancieraRequest;
use App\Http\Requests\UpdateSituacionFinancieraRequest;
use App\Repositories\SituacionFinancieraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Municipalidad\FileManagement;

class SituacionFinancieraController extends AppBaseController
{
    /** @var SituacionFinancieraRepository $situacionFinancieraRepository*/
    private $situacionFinancieraRepository;
    private $periodos=[
        "anual"=>"Anual",
        "sem1"=>"Primer Semestre",
        "sem2"=>"Segundo Semestre",
    ];
    private $areas=[
        "claro"=>"Claromeco",
        "salud"=>"Salud",
        "muni"=>"Municipalidad",
        "vial"=>"Ente Vial"
    ];
    private $anios=[ ];

    public function __construct(SituacionFinancieraRepository $situacionFinancieraRepo)
    {
        $this->situacionFinancieraRepository = $situacionFinancieraRepo;
        for ($i=date('Y'); $i >2010 ; $i--) {
            $this->anios[$i]=$i;
        }
    }

    /**
     * Display a listing of the SituacionFinanciera.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $situacionFinancieras = $this->situacionFinancieraRepository->all();

        return view('cms.situacion_financiera.index')
            ->with('situacionFinancieras', $situacionFinancieras);
    }

    /**
     * Show the form for creating a new SituacionFinanciera.
     *
     * @return Response
     */
    public function create()
    {
        return view('cms.situacion_financiera.create')
        ->with('periodos',$this->periodos)
        ->with('areas',$this->areas)
        ->with('anios',$this->anios);
    }

    /**
     * Store a newly created SituacionFinanciera in storage.
     *
     * @param CreateSituacionFinancieraRequest $request
     *
     * @return Response
     */
    public function store(CreateSituacionFinancieraRequest $request)
    {
        $input = $request->all();
        //subo el archivo
        $file=$input["nombre"];
        $name=$input["anio"]."-".$input["area"]."-".$input["periodo"]."-";
        $input["nombre"]=FileManagement::uploadFile($file,$name,"archivos/situacion/");
        //guardo los datos en la tabla
        $situacionFinanciera = $this->situacionFinancieraRepository->create($input);

        Flash::success('El archivo se guardo correctamente.');

        return redirect(route('situacionFinanciera.index'));
    }

    /**
     * Display the specified SituacionFinanciera.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $situacionFinanciera = $this->situacionFinancieraRepository->find($id);

        if (empty($situacionFinanciera)) {
            Flash::error('Situacion Financiera not found');

            return redirect(route('situacionFinanciera.index'));
        }

        return view('cms.situacion_financiera.show')->with('situacionFinanciera', $situacionFinanciera);
    }

    /**
     * Show the form for editing the specified SituacionFinanciera.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $situacionFinanciera = $this->situacionFinancieraRepository->find($id);

        if (empty($situacionFinanciera)) {
            Flash::error('Situacion Financiera not found');

            return redirect(route('situacionFinanciera.index'));
        }

        return view('cms.situacion_financiera.edit')
        ->with('periodos',$this->periodos)
        ->with('areas',$this->areas)
        ->with('situacionFinanciera', $situacionFinanciera)
        ->with('anios',$this->anios);
    }

    /**
     * Update the specified SituacionFinanciera in storage.
     *
     * @param int $id
     * @param UpdateSituacionFinancieraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSituacionFinancieraRequest $request)
    {
        $situacionFinanciera = $this->situacionFinancieraRepository->find($id);

        if (empty($situacionFinanciera)) {
            Flash::error('No se encontraron datos');

            return redirect(route('situacionFinanciera.index'));
        }
        $input=$request->all();
        //si se carga modifico el archivo
        if (isset($request->nombre)) {
            //borro el original
            FileManagement::deleteFile($situacionFinanciera->nombre,"archivos/situacion/");
            //subo el que cargo ahora
            $file=$request->nombre;
            $name=$request->anio."-".$request->area."-".$request->periodo."-";
            //guardo el nombre que devuelve en el input para actualizar la tabla
            $input['nombre']=FileManagement::uploadFile($file,$name,"archivos/situacion/");
        }

        //actualizo los datos en la tabla
        $situacionFinanciera = $this->situacionFinancieraRepository->update($input, $id);

        Flash::success('El registro se modifico correctamente.');

        return redirect(route('situacionFinanciera.index'));
    }

    /**
     * Remove the specified SituacionFinanciera from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $situacionFinanciera = $this->situacionFinancieraRepository->find($id);

        if (empty($situacionFinanciera)) {
            Flash::error('No se encontraron datos para borrar');

            return redirect(route('situacionFinanciera.index'));
        }
        //borro el archivo
        FileManagement::deleteFile($situacionFinanciera->nombre,"archivos/situacion/");
        //borro de la tabla
        $this->situacionFinancieraRepository->delete($id);

        Flash::success('El archivo se borro correctamente.');

        return redirect(route('situacionFinanciera.index'));
    }
}
