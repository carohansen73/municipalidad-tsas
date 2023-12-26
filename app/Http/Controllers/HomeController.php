<?php

namespace App\Http\Controllers;
use App\Models\TramiteGuia;
use App\Models\Area;
use App\Models\TramiteTipo;
use App\Models\SeccionPagina;
use App\Models\SeccionMenu;
use App\Models\Museo;
use Symfony\Component\Routing\Route;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.home');
    }

    /**
     * Muestra un listado de tramites ordenado por tema
     *
     * @return \Illuminate\Http\Response
     */
    public function showGuiaTramites()
    {
        $areas = Area::all();
        // $tipos = TramiteTipo::orderBy('id_area', 'DESC')->get();
        $tipos = TramiteTipo::orderBy('tipo')->get();
        $tramites = TramiteGuia::all();
        return view('guiaDeTramites.index', compact('areas', 'tipos', 'tramites'));
    }

    /**
     * Muestra información sobre el trámite seleccionado
     *
     * @return \Illuminate\Http\Response
     */
    public function showTramite($id)
    {

        $areas = Area::all();

        // $tipos = TramiteTipo::orderBy('id_area', 'DESC')->get();
        // $tipos = TramiteTipo::orderBy('tipo')->get();

        // $tramites = TramiteGuia::all();
        $tipo = TramiteTipo::where('id', $id)->get();

        $tramite = TramiteGuia::where('tipo_id', $id)->get();


        return view('guiaDeTramites.show', compact('areas', 'tipo', 'tramite'));
    }


    /**
     * Muestra información sobre el trámite seleccionado
     *
     * @return \Illuminate\Http\Response
     */
    public function showSections()
    {
        //busco la A LA Q INGRESÓ seccion con el path
       $pathSeccion = \Request::path();
       $nombreSeccion = str_replace("-"," ",$pathSeccion);

       //tomo los datos y las entidades que pertenecen a esa seccion
       $secciones = SeccionPagina::whereIn('pertenece_a', SeccionMenu::where('path', $pathSeccion)->pluck('id')->toArray())->get();




    //    $idSecciones = SeccionMenu::where('abreviatura', $pathSeccion)->pluck('id')->toArray();
        // $secciones = SeccionPagina::whereIn('pertenece_a', $idSecciones)->get();

        // hacer tabla con cecciones y a cual secciopn general pertenecen y con foto portada. EJ:
        // seccion organigrama pertenece a municipio
        //seccion educacion pertenece a municipio
        //seccion interes ciudadano pertenece a tramites y servicios
        //asi los traigo y recorro con foreach y puedo agregar nuevas secciones desde el cms
        //img con las mismas dimensiones para qeu queden bien y se puede sacar el height de css



        return view('sections.generales', compact('secciones', 'nombreSeccion'));
    }

      /**
     * Muestra información sobre el trámite seleccionado
     *
     * @return \Illuminate\Http\Response
     */
    public function showMuseos()
    {
        $museos = Museo::all();
        return view('sections.museos', compact('museos'));
    }

}
