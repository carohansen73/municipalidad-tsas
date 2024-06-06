<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBoletinOficialRequest;
use App\Http\Requests\UpdateBoletinOficialRequest;
use App\Repositories\BoletinOficialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\BoletinOficial;

class BoletinOficialController extends AppBaseController
{
    /** @var BoletinOficialRepository $boletinOficialRepository*/
    private $boletinOficialRepository;

    private $tipos=[
        "Avisos",
        "Decretos",
        "Resoluciones"
    ];
    private $anios=[];

    private $meses=[];

    public function __construct(BoletinOficialRepository $boletinOficialRepo)
    {
        $this->boletinOficialRepository = $boletinOficialRepo;
        for ($i=date('Y'); $i >1980 ; $i--) {
            $this->anios[$i]=$i;
        }
        for ($i=1; $i<=12; $i++) {
            $this->meses[$i]=$i;
        }
    }

    /**
     * Display a listing of the BoletinOficial.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $boletinOficials = $this->boletinOficialRepository->all();
        // $boletinOficials = BoletinOficial::where('anio', '>=', '2020')->orderBy('anio', 'desc')->orderBy( 'mes', 'desc')->get();

        $template = 'filtro';

        // var_dump( $boletinOficials);die;

        return view('cms.boletin_oficial.index')
            ->with('tipos', $this->tipos)
            ->with('anios', $this->anios)
            ->with('meses', $this->meses)
            ->with('template', $template);
    }

        /**
     * Display a listing of the BoletinOficial.
     *
     * */
    public function indexFiltered( )
    {
        var_dump('llega');die;
        var_dump($_POST['mes']);die;
        if (isset($_POST['tipo']) && (!empty($_POST['tipo'])) && isset($_POST['mes']) && (!empty($_POST['mes'])) && isset($_POST['anio']) && (!empty($_POST['anio'])) ){
			$tipo=$_POST['tipo'];
            $mes=$_POST['mes'];
            $anio=$_POST['anio'];

            $boletinOficials = BoletinOficial::whereIn('tipo', [$tipo])->whereIn('mes', [$mes])->whereIn('anio', [$anio])->get();
        }

        // $boletinOficials = BoletinOficial::whereIn('tipo', [$tipo])->where('anio', '>=', '2020')->orderBy('anio', 'desc')->orderBy( 'mes', 'desc')->get();
        $boletinOficials = [];
        $template = 'table';

        // var_dump( $boletinOficials);die;

        return view('cms.boletin_oficial.index')
            ->with('boletinOficials', $boletinOficials)
            ->with('template', $template);
    }

    /**
     * Show the form for creating a new BoletinOficial.
     *
     * @return Response
     */
    public function create()
    {
        return view('cms.boletin_oficial.create');
    }

    /**
     * Store a newly created BoletinOficial in storage.
     *
     * @param CreateBoletinOficialRequest $request
     *
     * @return Response
     */
    public function store(CreateBoletinOficialRequest $request)
    {
        $input = $request->all();

        $boletinOficial = $this->boletinOficialRepository->create($input);

        Flash::success('Boletin Oficial saved successfully.');

        return redirect(route('boletinOficial.index'));
    }

    /**
     * Display the specified BoletinOficial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $boletinOficial = $this->boletinOficialRepository->find($id);

        if (empty($boletinOficial)) {
            Flash::error('Boletin Oficial not found');

            return redirect(route('boletinOficial.index'));
        }

        return view('cms.boletin_oficial.show')->with('boletinOficials', $boletinOficial);
    }

    /**
     * Show the form for editing the specified BoletinOficial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $boletinOficial = $this->boletinOficialRepository->find($id);

        if (empty($boletinOficial)) {
            Flash::error('Boletin Oficial not found');

            return redirect(route('boletinOficial.index'));
        }

        return view('cms.boletin_oficial.edit')->with('boletinOficials', $boletinOficial);
    }

    /**
     * Update the specified BoletinOficial in storage.
     *
     * @param int $id
     * @param UpdateBoletinOficialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBoletinOficialRequest $request)
    {
        $boletinOficial = $this->boletinOficialRepository->find($id);

        if (empty($boletinOficial)) {
            Flash::error('Boletin Oficial not found');

            return redirect(route('boletinOficial.index'));
        }

        $boletinOficial = $this->boletinOficialRepository->update($request->all(), $id);

        Flash::success('Boletin Oficial updated successfully.');

        return redirect(route('boletinOficial.index'));
    }

    /**
     * Remove the specified BoletinOficial from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $boletinOficial = $this->boletinOficialRepository->find($id);

        if (empty($boletinOficial)) {
            Flash::error('Boletin Oficial not found');

            return redirect(route('boletinOficial.index'));
        }

        $this->boletinOficialRepository->delete($id);

        Flash::success('Boletin Oficial deleted successfully.');

        return redirect(route('boletinOficial.index'));
    }
}
