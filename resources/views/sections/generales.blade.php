
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}


<div  id="{{$pathSeccion}}">
    <div class="portada-foto text-md-left text-sm-center ">
        {{-- <img class="foto-portada" src="assets/img/sections-portadas/portadas/{{$pathSeccion}}.jpg" alt="portada-de-la-seccion"> --}}
        <div class="background-portada">   </div>
        {{-- <img class="logos-portada" src="assets/img/sections-portadas/logos/logos.png" alt=""> --}}
         @foreach($secciones as $seccion)
         {{-- <div class="container" data-aos="zoom-in"> --}}
            <h1  data-aos="zoom-in">{{$seccion->perteneceA->nombre}}</h1>
         {{-- </div> --}}
            @break
        @endforeach
     </div>

</div>




    <!-- ======= borde portada según color de sección ======= -->
    @if($nombreSeccion == "cultura")
        <div class="container-border">
            <div class="row">
                <div class="col-12 border-4">
                </div>
            </div>
        </div>
        @elseif ($nombreSeccion == "municipio")
        <div class="container-border">
            <div class="row">
                <div class="col-12 border-1">
                </div>
            </div>
        </div>
        @elseif ($nombreSeccion == "ciudad productiva")
        <div class="container-border">
            <div class="row">
                <div class="col-12 border-3">
                </div>
            </div>
        </div>
        @elseif ($nombreSeccion == "deportes")
        <div class="container-border">
            <div class="row">
                <div class="col-12 border-6">
                </div>
            </div>
        </div>
        @elseif ($nombreSeccion == "atencion al vecino")
        <div class="container-border">
            <div class="row">
                <div class="col-12 border-2">
                </div>
            </div>
        </div>
        @else
        <div class="container-border">
            <div class="row">
                <div class="col-4 border-2">
                </div>
                <div class="col-4 border-5">
                </div>
                <div class="col-4 border-4">
                </div>
            </div>
        </div>
    @endif
    <!-- ======= fin borde colorido ======= -->




{{-- <!-- ======= secciones en navbar sobre la portada  ======= -->
@if($nombreSeccion == "cultura")
    <nav class="navbar navbar-expand-lg navbar-light  cultura-nav" >
        <div class="container-fluid p-0">
            <div class="navbar-nav">
                @foreach($secciones as $seccion)
                    @if($seccion->perteneceA->path == 'cultura')
                        @if( $seccion->nombre == 'Centro Cultural La Estación')
                        <div class="navlink-item">   <a class="nav-link " href="{{$seccion->link}}"> CCE</a></div>
                        @elseif ($seccion->nombre == 'Elencos Municipales')
                        <div class="navlink-item"> <a class="nav-link " href="{{$seccion->link}}"> Elencos</a></div>
                        @elseif($seccion->nombre == 'Fiesta Provincial del Trigo')
                        <div class="navlink-item"> <a class="nav-link " href="{{$seccion->link}}"> FDT </a></div>
                        @elseif ($seccion->nombre == 'Feria Nacional de Artesanos')
                        <div class="navlink-item">  <a class="nav-link " href="{{$seccion->link}}"> Artesanos </a></div>
                        @else
                        <div class="navlink-item">  <a class="nav-link" href="{{$seccion->link}}"> {{$seccion->nombre}} </a></div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </nav>
@endif --}}

{{-- FIN PORTADA --}}

    {{-- CARDS CON DIFERENTES ENTIDADES --}}
    <section id="municipio">
        <main id="main" class="margen-top-navbar">

            {{-- CULTURA Y EDUCACION / entidades --}}
            @if($nombreSeccion == "cultura")
                <section class="team mb-5">
                    <div class="container" data-aos="fade-up">
                        <div class="row container-section-gral">
                            {{-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                            <div class="elfsight-app-93af1cd1-6a74-46e4-94e5-52761e211fea" data-elfsight-app-lazy></div> --}}
                            @foreach($secciones as $seccion)
                                @if($seccion->perteneceA->path == 'cultura')
                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4">
                                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                                            <a href="{{$seccion->link}}">
                                            <div class="seccion-gral-img">
                                                <img src="assets/img/sections-portadas/{{$seccion->portada}}" class="img-fluid" alt="">
                                            </div>
                                            </a>
                                        <div class="member-info">
                                            @if($nombreSeccion == "cultura")
                                                <h4 style="color: #9C024E">
                                            @else
                                                <h4>
                                            @endif
                                            {{$seccion->nombre}}</h4>
                                            {{-- <span>Chief Executive Officer</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>


                        {{-- educacion --}}
                        {{-- <div class="section-title">
                            <p style="color: #662483">Educación</p>
                        </div>
                        <div class="row container-section-gral mb-5">
                            @foreach($secciones as $seccion)
                                @if($seccion->perteneceA->nombre == 'Educacion')
                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4">
                                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                                            <a href="{{$seccion->link}}" target="_blank">
                                            <div class="seccion-gral-img">
                                                <img src="assets/img/sections-portadas/{{$seccion->portada}}" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                        <div class="member-info">
                                            @if($nombreSeccion == "cultura y educacion")
                                                <h4 style="color: #662483">
                                            @else
                                                <h4>
                                            @endif
                                            {{$seccion->nombre}}</h4>

                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div> --}}

                    </div>
                </section><!-- End Team Section -->
            @endif


{{-- ENTIDADES -- OTRAS SECCIONES!! -----  (VER COMO ACOMODO EL CODIGO P NO REPETIR)--}}
        @if($nombreSeccion != "cultura")
            <section id="seccion-gral" class="team"> <!-- ======= Team Section ======= -->
                <div class="container" data-aos="fade-up">

                    <div class="row container-section-gral">
                        @foreach($secciones as $seccion)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    @if($seccion->link == "proximamente")
                                        <a >
                                    @else
                                    <a href="{{$seccion->link}}">
                                        @endif
                                        <div class="seccion-gral-img">
                                            <img src="assets/img/sections-portadas/{{$seccion->portada}}" class="img-fluid" alt="">
                                            <div class="seccion-gral-titulo">
                                                <h4>{{$seccion->nombre}} </h4>
                                            </div>
                                        </div>
                                    </a>
                                    {{-- <div class="member-info">
                                        <a href="{{$seccion->link}}"><h4>{{$seccion->nombre}}</h4>  </a>
                                    </div> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section><!-- End Team Section -->
        @endif
    </main><!-- End #main -->

    @if ($nombreSeccion == "deportes")

<!-- Features (Listado de talleres-Deportes) -->
<section id="features" class="features">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Talleres - Dirección de deportes</p>
        </div>
        <p class="fst-italic mb-0"> Desde la dirección de Deportes se dictan varios talleres gratuitos, abiertos a todo publico
        </p>
        <br>
        <h3>Listado de talleres:
        </h3>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4> Polideportivo:</h4>
                    <p>Newcom de 11 a 12.30 hs lunes y miércoles  <br>
                        Caminata: de 14 a 15 hs lunes y jueves<br>
                        Mini atletismo: de 17.30 a 18.30 hs lunes y miércoles  <br>
                        Yoga: de 9 a 10 martes y jueves  <br>
                        Iniciación deportiva: de 17.30 a 18.30 hs martes y jueves<br>
                        Mini voley: de 17 a 18 hs   <br>
                        Voley juvenil: de 21 a 22 hs <br>
                        Voley adultos: de 21 a 23 hs lunes y miércoles <br>
                        Mini handball: de 18 a 19 hs/ handball juvenil: de 19 a 21 hs  <br>
                        Handball adultos: de 21 a 22 hs martes y jueves <br>
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>Club colegiales:</h4>
                    <p>Zumba kids: de 17.30 a 18.30 lunes y miércoles  <br>
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>Barrio Olimpo: </h4>
                    <p> Yoga: de 10 a 11 hs lunes y miércoles <br>
                        Gimnasia adultos: de 14 a 15 hs lunes y miércoles
                    </p>
                  </div>

                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>Barrio Benito Machado: </h4>
                    <p>yoga: de 17.30 a 18.30 lunes <br>
                        Gimnasia localizada: de 16.15 a 17.15 martes y jueves
                    </p>
                  </div>
                  <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4> Fonavi Terminal:</h4>
                    <p>Gimnasia adultos: de 10 a 11 hs miércoles y viernes
                    </p>
                  </div>
                  <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4> Envión (Sarmiento 582):</h4>
                    <p>Zumba: de 18 a 19 hs los jueves
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>Club de Pelota: </h4>
                    <p> Gimnasia y Recreación de adultos: de 9 a 11 los viernes
                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>La tranquera:</h4>
                    <p> Gimnasia Localizada: de 10.30 a 11.30 lunes y viernes
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>Centro de Jubilados 27 de Octubre:</h4>
                    <p>Yoga: de 14.30 a 15.30 hs martes y jueves
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>Barrio Villa Italia: </h4>
                    <p> Zumba: de 10 a 11 hs martes y jueves  <br>
                        Gimnasia de Adultos: de 14 a 15 hs martes y jueves <br>
                        Yoga: de 14 a 15 hs lunes y miércoles <br>
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>Barrio Boca: </h4>
                    <p> Yoga: de 10 a 11 hs martes y jueves
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>Polideportivo Municipal:</h4>
                    <p>Atletismo apartir de 8 años de 19.15 a 20.30 hs, lunes, martes, miércoles, jueves y viernes
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>Centro de Jubilados de Ts As: </h4>
                    <p> Gimnasia de Adultos: de 8.30 a 9.30 hs martes y jueves <br>
                        Yoga: de 8.30 a 9.30 miércoles y viernes  <br>
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>Barrio Municipal: </h4>
                    <p>Ritmos para niños (Puentes de la Infancia) de 17 a 18 hs jueves <br>
                        Estimulación temprana (Puentes de la Infancia) 9 a 9.30 viernes<br>
                        Gimnasia adaptada  <br>
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>Otros: </h4>
                    <p>Natación (Gebo) de 18 a 19 hs lunes y miércoles  <br>
                        Preparación Física, Natación, Atletismo y Futbol (Polideportivo) de 17 a 18 hs <br>
                        Actividades Recreativas (Polideportivo) de 17 a 18 hs <br>
                        Atletismo y Futbol (Polideportivo) de 16.30 a 18.30 hs<br>
                    </p>
                </div>
            </div>

        </div>
    </div>
  </section>
  <!-- End Features Section -->

    <!-- ======= OTROS CURSOS (About Section) ======= -->
    <section id="about" class="about">
        <div class="container " data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4 content " data-aos="fade-left" data-aos-delay="100">
                    <div class="content-box">
                        <h3>Programas adaptados para personas con discapacidad</h3>
                        <p class="fst-italic">
                        Contamos con un programa de deporte adaptado para personas con capacidades diferentes los cuales son:
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i>Natación </li>
                            <li><i class="ri-check-double-line"></i> Atletismo </li>
                            <li><i class="ri-check-double-line"></i> Futbol </li>
                            <li><i class="ri-check-double-line"></i> Actividad fisica </li>
                        </ul>
                    {{-- <img src="assets/img/about.jpg" class="img-fluid" alt=""> --}}
                    </div>
                </div>
                <div class="col-lg-4 content" data-aos="fade-right" data-aos-delay="100">
                    <div class="content-box">
                    <h3>Escuelas municipales</h3>
                    <p class="fst-italic">
                        Tenemos varias escuelas municipales que nos representan en las provincias con excelentes logros y resultados:
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i>Escuela Municipal de Atletismo  </li>
                        <li><i class="ri-check-double-line"></i> Escuela Municipal de Natación </li>
                        <li><i class="ri-check-double-line"></i> Escuela Municipal de Newcom </li>
                    </ul>
                </div>
                </div>
                <div class="col-lg-4  content " data-aos="fade-right" data-aos-delay="100">
                    <div class="content-box">
                    <h3>Cursos </h3>
                    <p class="fst-italic">
                        Contamos con los siguientes cursos:
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i>Arbitraje de futbol </li>
                        <li><i class="ri-check-double-line"></i> Salvataje para la escuela de guardavidas </li>
                        <li><i class="ri-check-double-line"></i> Capacitación de Newcom y curso de arbitraje </li>
                    </ul>
                </div>
                </div>
            </div>

      </div>
    </section>
    <!-- End About Section -->
    @endif


    {{-- PROXIMOS EVENTOS -->  (CULTURA / DEPORTES)--}}
    @if(($nombreSeccion == "deportes" || $nombreSeccion == "cultura") && isset($eventos) && (count($eventos) > 0))


<!-- ======= Team Section ======= -->
<section id="{{$nombreSeccion}}-eventos" class="team ">
    <div class="container mt-5 mb-5" data-aos="fade-up">
        <div class="section-title">
            <p> Próximos eventos</p>
            <h2><a href="/proximos-eventos">Ver Todos</a></h2>
                 {{-- <h2>Descubrí los museos del partido de Tres Arroyos</h2> --}}
        </div>

        <div class="row">
            @foreach($eventos as $evento)
                <div class="col-lg-4 pe-4 col-md-6 col-12 mb-3 align-items-stretch ">
                    <div class=" evento-img">

                        <img src="{{asset("storage/eventos/".$evento->img)}}" class="img-fluid" alt="">

                        <button  class="btn btn-modal-evento" data-bs-toggle="modal" data-bs-target="#exampleModal4" data-imagenevento="{{$evento->img}}" data-seccion="eventos"
                            data-bs-whatever="@mdo">ver</button>
                        <div class="evento-categoria"
                            @if($evento->categoria->nombre == 'Cultura')
                                style="background:#d63384;"
                            @elseif($evento->categoria->nombre == 'Educación')
                                style="background:rgb(13, 116, 189);"
                            @elseif($evento->categoria->nombre == 'Generales')
                                style="background: #662483;"
                            @elseif($evento->categoria->nombre == 'Salud')
                                style="background: #53c04d;"
                            @endif
                            >
                                <p class="mb-0">
                                    @if($evento->categoria->nombre == 'Cultura, Educación y Derechos Humanos')
                                    Cultura
                                    @else
                                    {{$evento->categoria->nombre}}
                                    @endif
                                </p>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>

    <!-- Modal Eventos -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('')}}" class="modalimg" alt="">
                        {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>

</section>



@endif
<!-- End cultura-eventos/ Noticias  Section -->
















</section>

  <!-- Template ocultar-mostrar información JS File -->
  <script src="{{ asset('assets/js/modalevento.js') }}"></script>
