
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





    @if($nombreSeccion == "cultura")

<nav class="navbar navbar-expand-lg navbar-light  cultura-nav" >
    <div class="container-fluid p-0">

        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        {{-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> --}}
            <div class="navbar-nav">
                {{-- <a class="nav-link active" aria-current="page" href="#">Home</a> --}}
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
        {{-- </div> --}}
    </div>
</nav>

@endif

{{-- FIN PORTADA --}}

    {{-- CARDS CON DIFERENTES ENTIDADES --}}
    <section id="municipio">
        <main id="main" class="margen-top-navbar">

            {{-- CULTURA Y EDUCACION / entidades --}}
            @if($nombreSeccion == "cultura")
                <section class="team mb-5">
                    <div class="container" data-aos="fade-up">
                        <div class="row container-section-gral mb-5">
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
                                                <h4 style="color: #d63384">
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



    {{-- PROXIMOS EVENTOS -->  (CULTURA / DEPORTES)--}}
    @if(isset($eventos) && (count($eventos) > 0))

        <!-- ======= borde colorido ======= -->
        {{-- <div class="container-border">
            <div class="row">
                <div class="col-4 border-4">
                </div>
                <div class="col-4 border-4">
                </div>
                <div class="col-4 border-4">
                </div>
            </div>
        </div> --}}
        <!-- ======= fin borde colorido ======= -->
        <!-- ======= Team Section ======= -->
        <section id="{{$nombreSeccion}}-eventos" class="team eventos">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <p> Próximos eventos</p>
                        {{-- <h2>Descubrí los museos del partido de Tres Arroyos</h2> --}}
                </div>

                <div class="row">
                    @foreach($eventos as $evento)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center">

                            <div class="member" data-aos="fade-up" data-aos-delay="200">
                                <div class="member-img">
                                    <img src="{{asset("storage/eventos/".$nombreSeccion."/".$evento->img)}}" class="img-fluid" alt="">
                                    <div class="social">
                                        <a> <button type="button" class="btn btn-modal-evento" data-bs-toggle="modal" data-bs-target="#exampleModal4" data-imagenevento="{{$evento->img}}" data-seccion="{{$nombreSeccion}}""
                                            data-bs-whatever="@mdo">Ver</button>
                                        </a>
                                    </div>
                                </div>
                                {{-- <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                </div> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>





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
        <!-- End cultura-eventos/ Noticias  Section -->
    @endif
</section>

  <!-- Template ocultar-mostrar información JS File -->
  <script src="{{ asset('assets/js/modalevento.js') }}"></script>
