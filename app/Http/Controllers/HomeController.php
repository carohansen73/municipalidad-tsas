<?php

namespace App\Http\Controllers;
use App\Models\TramiteGuia;
use App\Models\Area;
use App\Models\TramiteTipo;
use App\Models\SeccionPagina;
use App\Models\SeccionMenu;
use App\Models\SeccionTexto;
use App\Models\Museo;
use App\Models\Noticia;
use App\Models\NoticiaImg;


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

    public function portal()
    {
        // ...
        return redirect()->away('https://autogestion.tresarroyos.gov.ar/inicio');
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

        //  $idSecciones = SeccionMenu::where('abreviatura', $pathSeccion)->pluck('id')->toArray();
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
     * Secciones que unicamente continenen informacion - fotos y eventos
     *
     * @return \Illuminate\Http\Response
     */
    public function showSectionPlana(){
        //busco la A LA Q INGRESÓ seccion con el path
        $pathSeccion = \Request::path();

        // $nombreSeccion = str_replace("-"," ",$pathSeccion);

        //tomo los datos y las entidades que pertenecen a esa seccion
        $textos = SeccionTexto::where('seccion_id', SeccionPagina::where('link', $pathSeccion)->pluck('id'))->get();

        $noticias = Noticia::where('seccion_id', SeccionPagina::where('link', $pathSeccion)->pluck('id'))->get();

        return view('sections.secciones', compact('textos', 'noticias'));
    }


  /*****************------------------------------  CULTURA Y EDUCACION --------------------------*****************/

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

    /***************** ------------------------------  ATENCION AL VECINO -------------------------- *****************/

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
     * Muestra el listado de servicios
     *
     * @return \Illuminate\Http\Response
    */
    public function showListServicios(){
        $SERVICIOS = 'SERVICIOS';
        return view('sections.servicios', compact('SERVICIOS'));
    }


    /*****************   ------------------------------  HOME -------------------------- *****************/

    /**
     * Muestra todas las noticias
     *
     * @return \Illuminate\Http\Response
     */
    public function showNoticias() /*paginar? o x js hacer api*/
    {
        $noticias = Noticia::with('imgs')->get();
        // foreach($noticias as $noti){
        //     foreach($noti->imgs as $imag){
        //         var_dump($imag->img);die;
        //     }

        // }
        return view('sections.noticias', compact('noticias'));
    }


    /**
     * Muestra la noticia seleccionada
     *
     * @return \Illuminate\Http\Response
     */
    public function showNoticia($titulo)
    {
        /*IMPORTANTE!! Al almacenar noticias guardar en path el titulo sin acentos, Ñ, caracteres y reemplazando espacios x -!!!!!!*/

        // var_dump($titulo);die;
        $noticias = Noticia::with('imgs')->get();
        $noticia = Noticia::where('pathname', $titulo)->with('imgs')->get();

        foreach($noticias as $noti){
            $categoria = $noti->categoria;
        }

        //  foreach($noticias as $noti){
        //     //modifico el titulo para usarlo de path url
        //     //pongo guiones en lugar de espacios
        //     $cadena = strtolower($noti->titulo);
        //     $cadenaConvert = strtr($cadena, " ", "-");
        //     //SACO LOS CARACTERES ESPECIALES (PERO ME BORRA LETRAS CON ACENTOS Y Ñ, no saca . " :)->VER SI OTRO ME FUNCIONA MEJOR
        //     $pathName = filter_var($cadenaConvert, FILTER_SANITIZE_URL);
        //     var_dump($pathName);
        //     foreach($noti->imgs as $imag){
        //             var_dump($imag->img);die;
        //     }
        //  }

        return view('sections.noticia', compact('noticias', 'noticia', 'categoria'));
    }


}
