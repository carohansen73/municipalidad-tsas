<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\TramiteGuia;
use App\Models\Area;
use App\Models\Organigrama;
use App\Models\TramiteTipo;
use App\Models\MenuSeccion;
use App\Models\Evento;
use App\Models\Seccion;
use App\Models\SeccionInformacion;
use App\Models\SeccionContacto;
use App\Models\Galeria;
use App\Models\GaleriaPortada;
use App\Models\Archivos;
use App\Models\Encuesta;
use App\Models\Museo;
use App\Models\Categoria;
use App\Models\Noticia;
use App\Models\NoticiaImg;
use App\Models\NoticiaCategoria;
use App\Models\InstitucionEducativaNivel;
use App\Models\InstitucionEducativa;
use App\Models\PropuestaAcademica;
use App\Models\SituacionFinanciera;
use App\Models\ReporteEconomico;
use App\Models\AvisoOficial;
use App\Models\BoletinOficial;
use App\Models\ResidenciaAdultos;
use App\Models\CuidadorDomiciliario;
use App\Models\CiudadUniversitaria;
use App\Models\CiudadUniversitariaDetalles;
use App\Models\CiudadUniversitariaFotos;

use App\Models\Delegacion;
use App\Http\Resources\OrganigramaResource;


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
        $hoy = Carbon::today();
        $hoy = $hoy->format('Y-m-d');

        // $noticiaPpal = Noticia::where('destacada', 1)->latest('fecha')->latest('id')->take(1)->with('imgs')->get();
        // $noticias = Noticia::where('destacada', 1)->latest('fecha')->latest('id')->skip(1)->take(2)->with('imgs')->get();
        $noticias = Noticia::where('destacada', 1)->latest('fecha')->latest('id')->take(6)->with('imgs')->get();
        $eventos = Evento::where('fecha_fin', ">=", $hoy)->orderBy('fecha_fin')->take(4)->with('seccion')->get();

        $nombreSeccion = 'home';
        return view('home.home', compact('noticias', 'eventos', 'nombreSeccion'));
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
    public function showMenuSection()
    {
        //busco la A LA Q INGRESÓ seccion con el path
       $pathSeccion = \Request::path();
       $nombreSeccion = str_replace("-"," ",$pathSeccion);

       //tomo los datos y las entidades que pertenecen a esa seccion
       $secciones = Seccion::whereIn('pertenece_a', MenuSeccion::where('path', $pathSeccion)->pluck('id')->toArray())->where('orden', '>=', 1)->orderBy('orden')->get();
       //tomo el dia de hoy para buscar eventos q no hayan terminado
       $hoy = Carbon::today();
       $hoy = $hoy->format('Y-m-d');
       $eventos = Evento::whereIn('seccion_id', MenuSeccion::where('path', $pathSeccion)->pluck('id')->toArray())->where('fecha_fin', ">=", $hoy)->orderBy('fecha_fin')->get();

        // hacer tabla con secciones y a cual seccion general pertenecen y con foto portada. EJ:
        // seccion organigrama pertenece a municipio
        //seccion educacion pertenece a municipio
        //seccion interes ciudadano pertenece a tramites y servicios
        //asi los traigo y recorro con foreach y puedo agregar nuevas secciones desde el cms
        //img con las mismas dimensiones para qeu queden bien y se puede sacar el height de css

        return view('sections.generales', compact('secciones', 'nombreSeccion', 'eventos', 'pathSeccion'));
    }


    /**
     * Secciones que unicamente continenen informacion - fotos y eventos y comparten template
     *
     * @return \Illuminate\Http\Response
     */
    public function showSectionPlana(){
        //busco la A LA Q INGRESÓ seccion con el path
        $pathSeccion = \Request::path();

        // $nombreSeccion = str_replace("-"," ",$pathSeccion);

        //tomo los datos y las entidades que pertenecen a esa seccion
        $textos = SeccionInformacion::where('seccion_id', Seccion::where('link', $pathSeccion)->pluck('id'))->with('galeria')->get();

        // $noticias = Noticia::where('seccion_id', Seccion::where('link', $pathSeccion)->pluck('id'))->get();

        $archivos = Archivos::where('seccion_id', Seccion::where('link', $pathSeccion)->pluck('id'))->get();
        $portada = GaleriaPortada::where('seccion_id', Seccion::where('link', $pathSeccion)->pluck('id'))->get();
        $contacto = SeccionContacto::where('seccion_id', Seccion::where('link', $pathSeccion)->pluck('id'))->get();

        //al guardar nombre_agradable:  str_replace("_", " ", $archivo->nombre) y  str_replace("-", " ", $archivo->nombre)

        //despejo el nombre de la seccion
        $seccionArray = explode("/", $pathSeccion);
        $seccion = array_pop($seccionArray);

        return view('sections.secciones', compact('textos', 'archivos', 'seccion', 'portada', 'contacto'));
    }





    /**
     * Informacion de boleta digital y registro al portal de autogestion para despapelizacion
     *
     * @return \Illuminate\Http\Response
     */
    public function showInfoBoletaDigital(){

        return view('sections.info-boleta-digital');
    }


    /*****************------------------------------  MUNICIPIO / TSAS  --------------------------*****************/


    /**
     * Info de La Ciudad
     *
     * @return \Illuminate\Http\Response
    */
    public function showLaCiudad()
    {
        $portada = GaleriaPortada::where('seccion_id', Seccion::where('link', 'la-ciudad')->pluck('id'))->get();
        //tomo los datos y las entidades que pertenecen a esa seccion
        $textos = SeccionInformacion::where('seccion_id', Seccion::where('link', 'la-ciudad')->pluck('id'))->with('galeria')->get();
        return view('sections.la-ciudad', compact('portada', 'textos'));
    }

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
    public function showSectionEducation()
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

        /**
     * Muestra la seccion educacion, con los diferenets niveles educativos
     *
     * @return \Illuminate\Http\Response
     */
    public function showSalud()
    {

        return view('sections.salud');
    }




    /**
     * Muestra la seccion educacion, con los diferenets niveles educativos
     *
     * @return \Illuminate\Http\Response
     */
    public function showOrganigrama()
    {
        $areas = Area::where('nivel', 1)->orderBy('orden')->with('organigrama')->with('hijos')->get();

        // $empleados  = Organigrama::
        // $niveles = InstitucionEducativaNivel::all();
        return view('sections.organigrama', compact('areas'));
    }


    public function getOrganigramaByArea($id)
    {
        return OrganigramaResource::collection(Organigrama::where('area_id', $id)->get());
    }

    /**
     * Info del Ente Vial
     *
     * @return \Illuminate\Http\Response
    */
    public function showEnteVial()
    {
        $portada = GaleriaPortada::where('seccion_id', Seccion::where('link', 'ente-vial')->pluck('id'))->get();
        //tomo los datos y las entidades que pertenecen a esa seccion
        $textos = SeccionInformacion::where('seccion_id', Seccion::where('link', 'ente-vial')->pluck('id'))->with('galeria')->get();
        return view('sections.ente-vial', compact('portada', 'textos'));
    }


        /**
     * Info de Direccion de Juventud (y punto digital)
     *
     * @return \Illuminate\Http\Response
    */
    public function   showJuventud()
    {
        $portada = GaleriaPortada::where('seccion_id', Seccion::where('link', 'ente-vial')->pluck('id'))->get();
        //tomo los datos y las entidades que pertenecen a esa seccion
        $textos = SeccionInformacion::where('seccion_id', Seccion::where('link', 'ente-vial')->pluck('id'))->with('galeria')->get();
        return view('sections.juventud', compact('portada', 'textos'));
    }

    /**
     * Info de ciudades con universidades de la zona - juventud
     *
     * @return \Illuminate\Http\Response
    */
    public function showCiudadesUniversitarias()
    {
        $ciudades = CiudadUniversitaria::with('detalles')->with('fotos')->get();


        return view('sections.ciudades-universitarias', compact('ciudades'));
    }






  /*****************------------------------------  CULTURA Y EDUCACION --------------------------*****************/
    /**
     *Centro Cultural la Estacion
     * @return \Illuminate\Http\Response
     */
    public function showCCE(){

        $portada = GaleriaPortada::where('seccion_id', Seccion::where('link', 'cce')->pluck('id'))->get();
        //tomo los datos y las entidades que pertenecen a esa seccion
        $textos = SeccionInformacion::where('seccion_id', Seccion::where('link', 'cce')->pluck('id'))->with('galeria')->get();
        return view('cultura.cce', compact('portada', 'textos') );
    }

    /**
     * Muestra información sobre el trámite seleccionado
     *
     * @return \Illuminate\Http\Response
     */
    public function showMuseums()
    {
        $museos = Museo::all();
        return view('cultura.museos', compact('museos'));
    }

    /**
     * Seccion Fiesta del Trigo
     *
     * @return \Illuminate\Http\Response
     */
    public function showFiestaDelTrigo(){
        //busco la A LA Q INGRESÓ seccion con el path
        $pathSeccion = \Request::path();

        // $nombreSeccion = str_replace("-"," ",$pathSeccion);

        //tomo los datos y las entidades que pertenecen a esa seccion
        $textos = SeccionInformacion::where('seccion_id', Seccion::where('link', $pathSeccion)->pluck('id'))->with('galeria')->get();

        // $noticias = Noticia::where('seccion_id', Seccion::where('link', $pathSeccion)->pluck('id'))->get();

        $archivos = Archivos::where('seccion_id', Seccion::where('link', $pathSeccion)->pluck('id'))->get();

        $portada = GaleriaPortada::where('seccion_id', Seccion::where('link', $pathSeccion)->pluck('id'))->get();
        //al guardar nombre_agradable:  str_replace("_", " ", $archivo->nombre) y  str_replace("-", " ", $archivo->nombre)

        //despejo el nombre de la seccion
        $seccionArray = explode("/", $pathSeccion);
        $seccion = array_pop($seccionArray);

        return view('cultura.fdt', compact('textos', 'archivos', 'seccion', 'portada'));
    }


     /**
     * Seccion Fiesta del Trigo
     *
     * @return \Illuminate\Http\Response
     */
    public function show56FiestaDelTrigo(){

        $detalles = collect([
            (object) ['id' => 1, 'titulo' => 'Miercoles 5 de marzo', 'descripcion' => '<ul><li><i class="ri-check-double-line"></i> 19:00hs. Rurales de la Danza </li> <li><i class="ri-check-double-line"></i> 20:00hs Colectividades extranjeras de Ts.As. </li> <li><i class="ri-check-double-line"></i> 21:00hs La Factos</li><li><i class="ri-check-double-line"></i> 22:00hs Javier Calamaro </li><ul>'],
            (object) ['id' => 2, 'titulo' => 'Jueves 6 de marzo', 'descripcion' => '<ul><li> 19:00hs. Rurales de la Danza </li> <li>20:00hs Colectividades extranjeras de Ts.As. </li> <li> 21:00hs La Factos</li><li> 22:00hs Javier Calamaro </li><ul>'],
            (object) ['id' => 3, 'titulo' => 'Viernes 7 de marzo', 'descripcion' => 'A partir del miércoles 6 a las 20:45hs, el escenario Juan Pesalaccia nos espera para poder disfrutar de los cuerpos de baile y bandas locales que, junto a la actuación de artistas nacionales harán de esta 55º Fiesta Provincial del Trigo una verdadera fiesta. Deslizá y mirá la grilla oficial de artistas que se harán presentes. <br><br> Recordamos que el acceso para el día miércoles 6 y jueves 7 es totalmente 𝗴𝗿𝗮𝘁𝘂𝗶𝘁𝗼. Y para el viernes 8, sábado 9 y domingo 10, siguen a la venta las entradas en sus distintos puntos. De manera virtual (tresarroyos.boleteriadigital.com.ar) y de manera presencial en Av. Ituzaingó 320 de lunes a viernes de 9 a 13hs.
<br>'],
            (object) ['id' => 4, 'titulo' => 'Sabado 8 de marzo', 'descripcion' => '<strong> Descripción  </strong> 4'],
            (object) ['id' => 5, 'titulo' => 'Domingo 9 de marzo', 'descripcion' => 'Descripción 1'],

        ]);

        $licitaciones = collect([

            (object) ['id' => 4, 'titulo' => 'licitaciones', 'descripcion' => 'El coordinador de la Fiesta Provincial del Trigo, Miguel Lopez de Ipiña, ratificó las licitaciones correspondientes al Patio Cervecero y Patio de Tierra, carros gastronómicos, fogones y kioscos. <br><br>


                <ul>
                    <li>
                       <i class="ri-check-double-line"></i> <strong> Cervecros locales </strong> <br>
                        En patio cervecero y Patio de Tierra. Miercoles 21 de febrero - 19hs. <br>
                        Pliego:  $47.000 <br>
                        Canon: $330.000
                    </li>
                    <li>
                      <i class="ri-check-double-line"></i>  <strong> Carros gastronómicos </strong> <br>
                        En patio cervecero y Patio de Tierra. Miercoles 21 de febrero - 19hs. <br>
                        Pliego:  $47.000 <br>
                        Canon: $425.000
                    </li>
                    <li>
                      <i class="ri-check-double-line"></i>  <strong> Carros cerveceros </strong> <br>
                        En patio cervecero y Patio de Tierra. Miercoles 21 de febrero - 19hs. <br>
                        Pliego:  $47.000 <br>
                        Canon: $425.000
                    </li>
                    <li>
                       <i class="ri-check-double-line"></i> <strong> Kioscos </strong> <br>
                        En patio cervecero y Patio de Tierra. Jueves 22 de febrero - 20hs. <br>
                        Pliego:  $36.000 <br>
                        Canon: $330.000
                    </li>
                <ul>
                  Los pliegos se encuentran en  Ituzaingó 210 de 9 a 13 horas y de 17 a 20 horas. Consultas por Whatsapp al 2983 387153, al 2983-431472 y a ftrigo@tresarroyos.gov.ar <br><br>']

        ]);

        $inscripciones = collect([
            (object) ['id' => 1, 'titulo' => 'ABIERTA LA INSCRIPCIÓN PARA EL SALÓN "MARIQUITA SAND" ', 'descripcion' => 'La Dirección Municipal de Cultura y Educación de la Municipalidad de Tres Arroyos informa que se encuentran abiertas las inscripciones para participar del Salón Provincial de Artes Visuales en Pequeño Formato “Mariquita Sand”.<br><br>

                    🖼️El tema es: “Campo Nuestro” y la categoría participante es Pintura. <br>

                    Las obras se expondrán en el Centro Cultural La Estación en el marco de la 53º Fiesta Provincial del Trigo🌾<br><br>

                    🔹Para participar deberán acercar su material a la Dir. de Cultura (Ituzaingó 320) de lunes a viernes de 7 a 14 horas. Informes al ☎️ 02983-425513.<br><br>

                    ⚠️Fecha límite de inscripción: 28 de Febrero.'],
            (object) ['id' => 2, 'titulo' => 'CONVOCATORIA ABIERTA PARA LOS ARTESANOS', 'descripcion' => 'Se encuentra abierta la convocatoria a todos aquellos artesanos locales, regionales y nacionales que deseen participar de la 53° Fiesta Provincial del Trigo a desarrollarse del 9 al 13 de marzo.

                    ‼️Los/as interesados/as, deberán tener en cuenta los siguientes requisitos: <br>
                    🔹En caso de vender alimentos, presentar fotocopia del Carnet de Manipulación de Alimentos y un producto para su fiscalización. Si no posee dicho carnet, comunicarse con las instituciones educativas correspondientes que dictan la capacitación. En el caso del Distrito de Tres Arroyos, ingresar al sitio web de CRESTA (http://www.cresta.edu.ar/extension/manipuladores/inscripcion-manipuladores/) <br>
                    🔹No se permite la reventa. <br>
                    🔹Al momento de inscribirse, deberán acercar un producto para fiscalizar; en el caso de los artesanos regionales o nacionales, deberán enviar fotos y videos del mismo al correo electrónico: cultura@tresarroyos.gov.ar o a través de WhatsApp: 2983 – 445968.<br>
                    <br>
                    ⚠️Inscripciones: personalmente, en la sede de la Dirección de Cultura y Educación, Av. Ituzaingó 320 de lunes a viernes de 07 a 14 horas o enviar un mail al correo electrónico: cultura@tresarroyos.gov.ar. <br> <br>

                    ➡️Para consultas e información, comunicarse telefónicamente al tel. (02983) 42-5513; enviar un WhatsApp al tel. 2983 – 445968 o a través de mensaje directo en nuestras redes. <br>'],
            (object) ['id' => 3, 'titulo' => 'CONVOCATORIA ABIERTA PARA ARTISTAS SOLISTAS/BANDAS', 'descripcion' => 'Hasta el día viernes 25/2, tenes tiempo de anotarte para formar parte de los shows de la 53° edición de la Fiesta Provincial del Trigo.

                    ⏩Si sos un artista solista/banda, o formas parte de un cuerpo de danza, podés acercar tu información a la Dirección de Cultura y Educación (Av. Ituzaingó 320), o comunícate a través de sus redes sociales para obtener más información. @cultura.tresarroyos'],
            (object) ['id' => 5, 'titulo' => 'CONVOCATORIA PARA FORMAR PARTE DEL DESFILE', 'descripcion' => 'Para formar parte del histórico desfile, comunícate con la secretaría de la Fiesta del Trigo (Av. Ituzaingó 210), de lunes a viernes en los horarios de 8 a 13hs, o de 17 a 20hs. O comunicandote al 432615.'],

        ]);

        return view('fdt.fdt', compact('detalles', 'licitaciones', 'inscripciones'));
    }




   /**
     * Muestra la seccion de colectividades
     *
     * @return \Illuminate\Http\Response
     */
    public function showColectividades()
    {
        $portada = GaleriaPortada::where('seccion_id', Seccion::where('link', 'colectividades')->pluck('id'))->get();
          //tomo los datos y las entidades que pertenecen a esa seccion
        $textos = SeccionInformacion::where('seccion_id', Seccion::where('link', 'colectividades')->pluck('id'))->with('galeria')->get();
        return view('cultura.colectividades', compact('portada', 'textos') );
    }

      /**
     * Muestra la seccion de colectividades
     *
     * @return \Illuminate\Http\Response
     */
    public function showBibliotecas()
    {
        $portada = GaleriaPortada::where('seccion_id', Seccion::where('link', 'bibliotecas')->pluck('id'))->get();
          //tomo los datos y las entidades que pertenecen a esa seccion
        $textos = SeccionInformacion::where('seccion_id', Seccion::where('link', 'bibliotecas')->pluck('id'))->with('galeria')->get();
        return view('cultura.bibliotecas', compact('portada', 'textos') );
    }

     /**
     * Muestra la seccion de colectividades
     *
     * @return \Illuminate\Http\Response
     */
    public function showAdultosMayores()
    {
        $portada = GaleriaPortada::where('seccion_id', Seccion::where('link', 'adultos-mayores')->pluck('id'))->get();
          //tomo los datos y las entidades que pertenecen a esa seccion
        $textos = SeccionInformacion::where('seccion_id', Seccion::where('link', 'adultos-mayores')->pluck('id'))->with('galeria')->get();
        $contacto = SeccionContacto::where('seccion_id', Seccion::where('link', 'adultos-mayores')->pluck('id'))->get();
        // tomo los datos de trabajadores domiciliarios y residencias de mayores para mostrar
        $trabajadores = CuidadorDomiciliario::where('habilitado', 0)->orderBy('apellido_y_nombre')->get();
        $residencias = ResidenciaAdultos::where('habilitada', 0)->orderBy('nombre')->get();
        //$residencias = ResidenciaAdultos::all();
        return view('sections.adultos', compact('portada', 'textos','trabajadores', 'residencias', 'contacto'));
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
     * Muestra información sobre el trámite seleccionado
     *
     * @return \Illuminate\Http\Response
     */
    public function showEncuestas($tipo){

        $formularios = Encuesta::whereIn('tipo', [$tipo])->get();


        return view('sections.formularios', compact('formularios', 'tipo'));
    }


    /**
     * Muestra el listado de servicios
     *
     * @return \Illuminate\Http\Response
    */
    // public function showListServices($tipo){

    //     $formularios = Encuestas::whereIn('tipo', [$tipo]);
    //     foreach($formularios as $form){
    //         var_dump($form->nombre);

    //     }
    //     die;
    //     var_dump($formularios);die;
    //     $SERVICIOS = 'SERVICIOS';
    //     return view('sections.formularios', compact('SERVICIOS', 'formularios'));
    // }


    /*****************   ------------------------------  HOME -------------------------- *****************/

    /*****************   ------------------------------  NOTICIAS -------------------------- *****************/

    /**
     * Muestra todas las noticias
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllNews(Request $request)
    {
        if(isset($request) && !empty($request->search)){
            $busqueda = $request->search;
            $noticias = Noticia::where('titulo', 'LIKE', '%'.$busqueda.'%')->latest('fecha')->latest('id')->with('imgs')->with('categorias')->paginate(10);
        }else{
            $noticias = Noticia::latest('fecha')->latest('id')->with('imgs')->with('categorias')->paginate(10);
        }


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
            $noticiaId = $noti->id;
        }

        $imagenesPrimera = NoticiaImg::where('noticia_id', $noticiaId)->latest('id')->take(1)->get();
        $imagenes = NoticiaImg::where('noticia_id', $noticiaId)->latest('id')->skip(1)->take(4)->get();

        $categorias = Categoria::all();
        $ultimasNoticias = Noticia::latest()->take(3)->get();
        $noticiasRelacionadas = Noticia::whereIn('id', NoticiaCategoria::whereIn('categoria_id', [$categoriaId])->pluck('noticia_id'))->latest()->take(3)->get();

        return view('sections.noticia', compact('noticias', 'noticia', 'categoriaId', 'ultimasNoticias', 'noticiasRelacionadas', 'categorias', 'imagenesPrimera', 'imagenes'));
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
            ->latest('fecha')->latest('id')
            ->with('imgs')
            ->paginate(10);

        $categorias = Categoria::all();

        // $ultimasNoticias = Noticia::latest()->take(3)->get();
        $ultimasNoticias = Noticia::orderBy('fecha', 'desc')->take(3)->get();


        return view('sections.noticias', compact('noticias',  'categorias', 'categoriaNombre', 'ultimasNoticias'));
    }

    /**
     * mUESTRA TODOS LOS PRÓXIMOS EVENTOS
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllEvents()
    {
        $hoy = Carbon::today();
        $hoy = $hoy->format('Y-m-d');
        $eventos = Evento::where('fecha_fin', ">=", $hoy)->orderBy('fecha_fin')->with('seccion')->with('categoria')->get(); //ver que me traiga prox eventos y si ya paso la fecha que no lo traiga
        $categorias = Categoria::orderBy('nombre')->get();

        return view('sections.eventos', compact('eventos', 'categorias'));
    }


    /*****************   ------------------------------  TRANSPARENCIA FISCAL  -------------------------- *****************/

    /**
     * Muestra la Situación Económico Financiera y los Reportes Economico Financiero
     *
     * @return \Illuminate\Http\Response
     */
    public function showTransparenciaFiscal()
    {

        /*SITUACION ECONOMICO FINANCIERA*/

        //obtengo los anios para el filtro
        $datosSituacion['anios'] = SituacionFinanciera::distinct()->orderBy('anio', 'desc')->pluck('anio')->all();

        //anio a buscar segun si fue seleccionado un anio o el ultimo
        if (isset($_POST['anio']) && (!empty($_POST['anio']))){
			$anio=$_POST['anio']; // si definio anio a buscar
		}else{
			$anio=$datosSituacion['anios'][0]; // seria el anio actual
		}


        // aca obtengo las situacionesEconomicas separadas por cada ente descentralizado
		$datosSituacion['anio']=$anio;
		$datosSituacion['muni']= SituacionFinanciera::whereIn('anio', [$anio])->whereIn('area', ['muni'])->orderBy('periodo', 'desc')->get();
        $datosSituacion['salud']= SituacionFinanciera::whereIn('anio', [$anio])->whereIn('area', ['salud'])->orderBy('periodo', 'desc')->get();
        $datosSituacion['claro']= SituacionFinanciera::whereIn('anio', [$anio])->whereIn('area', ['claro'])->orderBy('periodo', 'desc')->get();
        $datosSituacion['vial']= SituacionFinanciera::whereIn('anio', [$anio])->whereIn('area', ['vial'])->orderBy('periodo', 'desc')->get();

        /*REPORTES ECONOMICOS*/

        //anio a buscar segun si fue seleccionado un anio o el ultimo
        if (isset($_POST['anio']) && (!empty($_POST['anio']))){
			$anioReportes=$_POST['anio']; // si definio anio a buscar
		}else{
            $maxAnioReportes['anios'] = ReporteEconomico::distinct()->orderBy('anio', 'desc')->pluck('anio')->all();
			$anioReportes=$maxAnioReportes['anios'][0]; // seria el anio actual
		}

        $reportes['generales']= ReporteEconomico::whereIn('anio', [$anioReportes])->where('periodo', 0)->orderBy('periodo', 'desc')->get();
        $reportes['trimestre1']= ReporteEconomico::whereIn('anio', [$anioReportes])->where('periodo', [1])->orderBy('periodo', 'desc')->get();
        $reportes['trimestre2']= ReporteEconomico::whereIn('anio', [$anioReportes])->where('periodo', [2])->orderBy('periodo', 'desc')->get();
        $reportes['trimestre3']= ReporteEconomico::whereIn('anio', [$anioReportes])->where('periodo', [3])->orderBy('periodo', 'desc')->get();
        $reportes['trimestre4']= ReporteEconomico::whereIn('anio', [$anioReportes])->where('periodo', [4])->orderBy('periodo', 'desc')->get();


        return view('transparenciaFiscal.transparencia_fiscal', compact('datosSituacion', 'reportes', 'anioReportes'));
    }


    /*****************   ------------------------------  BOLETIN OFICIAL  -------------------------- *****************/

    /**
     * Muestra los 4 ítems del boleín oficial: Avisos oficiales, Decretos, Ordenanzas, Resoluciones
     *
     * @return \Illuminate\Http\Response
     */
    public function showBoletinOficial(){
        $items= $this->getItemsBoletinOficial();
        return view('transparenciaFiscal.boletin_oficial', compact('items'));
    }

    /**
     * Tipos de archivos de boletin oficial
     *
     * @return \Illuminate\Http\Response
     */
    public function getItemsBoletinOficial(){
        $items['avisos']= [
            "nombre"=>"Avisos Oficiales",
            "slug" =>  "/avisos-oficiales",
            "icono" => "fas fa-info-circle"
        ];
        $items['decretos']= [
            "nombre" => "Decretos",
            "slug" => "/boletin-oficial/decretos",
            "icono" => "bi bi-file-earmark-ruled-fill"
        ];
        $items['ordenanzas']= [
            "nombre" => "Ordenanzas",
            "slug" => "https://hcd.tresarroyos.gov.ar/digesto/ordenanzas",
            "icono" => "fas fa-gavel"
        ];
        $items['resoluciones']= [

            "nombre" => "Resoluciones",
            "slug" => "/boletin-oficial/resoluciones",
            "icono" =>  "fas fa-file-alt"
        ];

        return $items;
    }

    /**
     * Muestra Boletin Oficial - Avisos/Decretos o Resoluciones
     *
     * @return \Illuminate\Http\Response
     */
    public function showBusquedaBoletinOficial($tipo)
    {
        if($tipo == 'avisos'){
            $this->showAvisosOficiales($tipo);


        }else{
            //obtengo los anios y meses para el filtro
            $filtroDeBusqueda['anios'] = BoletinOficial::distinct()->orderBy('anio', 'desc')->pluck('anio')->all();

            $filtroDeBusqueda['meses'] = BoletinOficial::distinct()->orderBy('mes', 'desc')->pluck('mes')->all();

            $anio=$filtroDeBusqueda['anios'][0]; // seria el anio actual
            $mes=3;// ultimo mes

            $filtroDeBusqueda['mes'] = $mes;
            $filtroDeBusqueda['anio'] = $anio;

            return view('transparenciaFiscal.boletin_oficial', compact( 'filtroDeBusqueda',  'tipo'));
        }

    }


    /**
     * Muestra Boletin Oficial - Avisos/Decretos o Resoluciones
     *
     * @return \Illuminate\Http\Response
     */
    public function showBoletinOficialItem($tipo)
    {
        $items= $this->getItemsBoletinOficial();

        //obtengo los anios y meses para el filtro
        $filtroDeBusqueda['anios'] = BoletinOficial::distinct()->orderBy('anio', 'desc')->pluck('anio')->all();
        $filtroDeBusqueda['meses'] = BoletinOficial::distinct()->orderBy('mes', 'asc')->pluck('mes')->all();

        //anio a buscar segun si fue seleccionado un anio o el ultimo
        if (isset($_POST['anio']) && (!empty($_POST['anio']))){
			$anio=$_POST['anio']; // si definio anio a buscar

		}else{
			$anio=$filtroDeBusqueda['anios'][0]; // seria el anio actual

		}

        //mes a buscar segun si fue seleccionado un mes o todos (si selecciona 0 o no selecciona mes)
        if (isset($_POST['mes']) && (!empty($_POST['mes']) && $_POST['mes']>0) ){
			$mes=$_POST['mes']; // si definio mes a buscar

            // var_dump($anio, $mes);die;
            $filtroDeBusqueda['mes'] = $mes;
            $filtroDeBusqueda['anio'] = $anio;


            $boletinOficial = BoletinOficial::whereIn('anio', [$anio])->whereIn('mes', [$mes])->where('tipo', $tipo)->orderBy('orden', 'ASC')->get();
		}else{ //busca todos los meses del año
            $filtroDeBusqueda['mes'] = 0;
            $filtroDeBusqueda['anio'] = $anio;


            $boletinOficial = BoletinOficial::whereIn('anio', [$anio])->where('tipo', $tipo)->orderBy('orden', 'ASC')->get();
		}


        // $reportes['generales']= ReporteEconomico::whereIn('anio', [$anio])->where('periodo', 0)->orderBy('periodo', 'desc')->get();


        return view('transparenciaFiscal.boletin_oficial', compact('items', 'filtroDeBusqueda', 'boletinOficial', 'tipo'));
    }


        /**
     * Muestra Avisos Oficiales
     *
     * @return \Illuminate\Http\Response
     */
    public function showAvisosOficiales()
    {
        $tipo = 'avisos';
        $items= $this->getItemsBoletinOficial();
        $boletinOficial = AvisoOficial::whereIn('area', ['aviso'])->orderBy('fecha', 'desc')->get();

        return view('transparenciaFiscal.boletin_oficial', compact('items', 'boletinOficial', 'tipo'));
    }

}
