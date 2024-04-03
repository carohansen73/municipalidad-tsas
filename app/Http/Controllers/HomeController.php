<?php

namespace App\Http\Controllers;
use App\Models\TramiteGuia;
use App\Models\Area;
use App\Models\TramiteTipo;
use App\Models\SeccionMenu;
use App\Models\Evento;
use App\Models\SeccionPagina;
use App\Models\SeccionTexto;
use App\Models\Galeria;
use App\Models\GaleriaPortada;
use App\Models\Archivos;
use App\Models\Museo;
use App\Models\Categoria;
use App\Models\Noticia;
use App\Models\NoticiaImg;
use App\Models\NoticiaCategoria;
use App\Models\InstitucionEducativaNivel;
use App\Models\InstitucionEducativa;
use App\Models\PropuestaAcademica;

use App\Models\Delegacion;


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
        $noticiaPpal = Noticia::where('destacada', 1)->latest('fecha')->take(1)->with('imgs')->get();
        $noticias = Noticia::where('destacada', 1)->latest('fecha')->skip(1)->take(2)->with('imgs')->get();

        return view('home.home', compact('noticias', 'noticiaPpal'));
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

       $eventos = Evento::whereIn('seccion_id', SeccionMenu::where('path', $pathSeccion)->pluck('id')->toArray())->get();



        // hacer tabla con secciones y a cual seccion general pertenecen y con foto portada. EJ:
        // seccion organigrama pertenece a municipio
        //seccion educacion pertenece a municipio
        //seccion interes ciudadano pertenece a tramites y servicios
        //asi los traigo y recorro con foreach y puedo agregar nuevas secciones desde el cms
        //img con las mismas dimensiones para qeu queden bien y se puede sacar el height de css

        return view('sections.generales', compact('secciones', 'nombreSeccion', 'eventos', 'pathSeccion'));
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
        $textos = SeccionTexto::where('seccion_id', SeccionPagina::where('link', $pathSeccion)->pluck('id'))->with('imgs')->get();

        // $noticias = Noticia::where('seccion_id', SeccionPagina::where('link', $pathSeccion)->pluck('id'))->get();

        $archivos = Archivos::where('seccion_id', SeccionPagina::where('link', $pathSeccion)->pluck('id'))->get();

        $portada = GaleriaPortada::where('seccion_id', SeccionPagina::where('link', $pathSeccion)->pluck('id'))->get();
        //al guardar nombre_agradable:  str_replace("_", " ", $archivo->nombre) y  str_replace("-", " ", $archivo->nombre)

        //despejo el nombre de la seccion
        $seccionArray = explode("/", $pathSeccion);
        $seccion = array_pop($seccionArray);

        return view('sections.secciones', compact('textos', 'archivos', 'seccion', 'portada'));
    }

     /*****************------------------------------  MUNICIPIO / TSAS  --------------------------*****************/

     /**
     * Muestra LAS DISTINTAS DELEGACIONES QUE FORMAN PARTE DEL PARTIDO DE TSAS
     *
     * @return \Illuminate\Http\Response
     */
    public function showDelegaciones()
    {
        $delegaciones = Delegacion::all();
        return view('sections.delegaciones', compact('delegaciones'));
    }


    /**
     * Muestra la seccion educacion, con los diferenets niveles educativos
     *
     * @return \Illuminate\Http\Response
     */
    public function showSeccionEducation()
    {
        $niveles = InstitucionEducativaNivel::all();
        return view('sections.educacion', compact('niveles'));
    }


    /**
     * Muestra la seccion educacion inicial / primaria y secundaria / superior
     *
     * @return \Illuminate\Http\Response
     */
    public function showEducationByLevel($id)
    {
        $niveles = InstitucionEducativaNivel::all();
        $establecimientos = InstitucionEducativa::where('nivel_id', $id)->with('carreras')->get();

        return view('sections.establecimientos-educativos', compact('niveles', 'establecimientos'));
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
    public function showAllNews() /*paginar? */
    {
        $noticias = Noticia::with('imgs')->with('categorias')->get();
        $categorias = Categoria::all();

        return view('sections.noticias', compact('noticias', 'categorias'));
    }


    /**
     * Muestra una noticia
     *
     * @return \Illuminate\Http\Response
     */
    public function showNews($titulo)
    {
        $noticias = Noticia::with('imgs')->get();
        $noticia = Noticia::where('slug', $titulo)->with('imgs')->with('categorias')->get();

        foreach($noticia as $noti){
            foreach($noti->categorias as $cat){
                $categoriaId = $cat->id;
            }
        }

        $categorias = Categoria::all();
        $ultimasNoticias = Noticia::latest()->take(3)->get();
        $noticiasRelacionadas = Noticia::whereIn('id', NoticiaCategoria::whereIn('categoria_id', [$categoriaId])->pluck('noticia_id'))->latest()->take(3)->get();

        return view('sections.noticia', compact('noticias', 'noticia', 'categoriaId', 'ultimasNoticias', 'noticiasRelacionadas', 'categorias'));
    }


    /**
     * Muestra las noticias pertenecientes a la categoria seleccionada
     *
     * @return \Illuminate\Http\Response
     */
    public function showNoticiasPorCategoria($categoriaNombre)
    {
        // var_dump($titulo);die;
        $noticias = Noticia::whereIn('id',
            NoticiaCategoria::whereIn('categoria_id',
            Categoria::whereIn('nombre', [$categoriaNombre])
            ->pluck('id'))
            ->pluck('noticia_id'))
            ->with('imgs')
            ->get();

        $categorias = Categoria::all();

        // $ultimasNoticias = Noticia::latest()->take(3)->get();
        $ultimasNoticias = Noticia::orderBy('fecha', 'desc')->take(3)->get();


        return view('sections.noticias', compact('noticias',  'categorias', 'categoriaNombre', 'ultimasNoticias'));
    }

}
