<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReporteEconomicoRequest;
use App\Http\Requests\UpdateReporteEconomicoRequest;
use App\Repositories\ReporteEconomicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Municipalidad\FileManagement;

class ReporteEconomicoController extends AppBaseController
{
    /** @var ReporteEconomicoRepository $reporteEconomicoRepository*/
    private $reporteEconomicoRepository;

    private $periodos=[
        "General",
        "Primer Trimestre",
        "Segundo Trimestre",
        "Tercer Trimestre",
        "cuarto Trimestre"
    ];
    private $areas=[
        "palacio"=>"Municipalidad ",
    ];
    private $anios=[];

    public function __construct(ReporteEconomicoRepository $reporteEconomicoRepo)
    {
        $this->reporteEconomicoRepository = $reporteEconomicoRepo;
        for ($i=date('Y'); $i >2010 ; $i--) {
            $this->anios[$i]=$i;
        }
    }

    /**
     * Display a listing of the ReporteEconomico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reporteEconomicos = $this->reporteEconomicoRepository->all();

        return view('cms.reporte_economico.index')
            ->with('reporteEconomicos', $reporteEconomicos);
    }

    /**
     * Show the form for creating a new ReporteEconomico.
     *
     * @return Response
     */
    public function create()
    {
        return view('cms.reporte_economico.create')
            ->with('periodos',$this->periodos)
            ->with('anios',$this->anios)
            ->with('areas',$this->areas);
    }

    /**
     * Store a newly created ReporteEconomico in storage.
     *
     * @param CreateReporteEconomicoRequest $request
     *
     * @return Response
     */
    public function store(CreateReporteEconomicoRequest $request)
    {
        $input = $request->all();

        //subo el archivo
        $file=$input["nombre_arch"];
        $name=$input["anio"]."-".$input["sector"]."-".$input["periodo"]."-";
        $input["nombre_arch"]=FileManagement::uploadFile($file,$name,"archivos/reportes_eco_fin/");

        $reporteEconomico = $this->reporteEconomicoRepository->create($input);

        Flash::success('El archivo se cargo correctamente.');

        return redirect(route('reporteEconomico.index'));
    }

    /**
     * Display the specified ReporteEconomico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reporteEconomico = $this->reporteEconomicoRepository->find($id);

        if (empty($reporteEconomico)) {
            Flash::error('Reporte Economico not found');

            return redirect(route('reporteEconomico.index'));
        }

        return view('cms.reporte_economico.show')->with('reporteEconomico', $reporteEconomico);
    }

    /**
     * Show the form for editing the specified ReporteEconomico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reporteEconomico = $this->reporteEconomicoRepository->find($id);

        if (empty($reporteEconomico)) {
            Flash::error('No se encontraron datos');

            return redirect(route('reporteEconomico.index'));
        }

        return view('cms.reporte_economico.edit')
            ->with('reporteEconomico', $reporteEconomico)
            ->with('periodos',$this->periodos)
            ->with('anios',$this->anios)
            ->with('areas',$this->areas);
    }

    /**
     * Update the specified ReporteEconomico in storage.
     *
     * @param int $id
     * @param UpdateReporteEconomicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReporteEconomicoRequest $request)
    {
        $reporteEconomico = $this->reporteEconomicoRepository->find($id);

        if (empty($reporteEconomico)) {
            Flash::error('Reporte Economico not found');

            return redirect(route('reporteEconomico.index'));
        }

        $input=$request->all();
        //si se carga modifico el archivo
        if (isset($request->nombre_arch)) {
            //borro el original
            FileManagement::deleteFile($reporteEconomico->nombre_arch,"archivos/reportes_eco_fin/");
            //subo el que cargo ahora
            $file=$request->nombre_arch;
            $name=$request->anio."-".$request->sector."-".$request->periodo."-";
            //guardo el nombre que devuelve en el input para actualizar la tabla
            $input['nombre_arch']=FileManagement::uploadFile($file,$name,"archivos/reportes_eco_fin/");
        }

        //actualizo los datos en la tabla

        $reporteEconomico = $this->reporteEconomicoRepository->update($input, $id);

        Flash::success('Reporte modificado correctamente.');

        return redirect(route('reporteEconomico.index'));
    }

    /**
     * Remove the specified ReporteEconomico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reporteEconomico = $this->reporteEconomicoRepository->find($id);

        if (empty($reporteEconomico)) {
            Flash::error('No se encontraron resultados');

            return redirect(route('reporteEconomico.index'));
        }
        //borro el archivo
        FileManagement::deleteFile($reporteEconomico->nombre_arch,"archivos/reportes_eco_fin/");
        //borro de la tabla
        $this->reporteEconomicoRepository->delete($id);

        Flash::success('Reporte eliminado.');

        return redirect(route('reporteEconomico.index'));
    }
}
