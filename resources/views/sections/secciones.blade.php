
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}
@if(isset($portada) && count($portada) >0)

    <div id="portada-secciones" class="portada-foto text-md-left text-sm-center ">
        @foreach($portada as $p)
        <img class="foto-portada img-fluid" src="{{asset("storage/secciones/".$p->img)}}" alt="portada-de-la-seccion">
        @break
        @endforeach
        <div class="background-portada">   </div>
        {{-- <img class="logos-portada" src="assets/img/sections-portadas/logos/logos.png" alt=""> --}}
        @foreach ($textos as $text)
            @if($text->seccion->nombre == "Empleo - Emprendedores")
                <h1>Oficina de Empleo y Capacitación</h1>
                @else
                <h1>{{$text->seccion->nombre}}</h1>
            @endif
        @endforeach
    </div>
    <!-- ======= borde colorido ======= -->
    <div class="container-border">
        <div class="row">
            <div class="col-4 border-1">
            </div>

            <div class="col-4 border-3">
            </div>
            <div class="col-4 border-6">
            </div>
        </div>
    </div>
    <!-- ======= fin borde colorido ======= -->
@else
    <main id="main" class="margen-top-navbar">

@endif

{{-- FIN PORTADA --}}







<!-- =======  INFORMACION GENERAL ======= -->
    <div class="container-section-information ">


            @foreach ($textos as $text)
                @if($text->informacion || $text->sub_informacion )
                <div class="row col-lg-12">

                    <div class="container p-4 section-information col-10" data-aos="fade-up">
                        <div class="">
                            <div class="section-title ps-0 pb-2">
                                <p >{{$text->titulo}}</p>
                            </div>
                            <p>
                                {!! $text->informacion !!}
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-4 col-12 section-information-contact display-none">
                        <section id="section-information" class="pb-0 ">
                            {{-- info del establecimiento --}}
                        {{-- <div  class="col-lg-4 ps-lg-5 mb-4"> --}}
                           <div class="box-contact">
                                <h4 class="">Contacto</h4>
                                <h6 class="d-flex align-items-center">
                                    <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-map-marker-alt"></i></span>
                                    {{-- <strong>Dirección: </strong> <span style="font-size: 14px;"> {{$est->ubicacion}} </span> </h6> --}}
                                    <strong>Dirección: </strong> <span style="font-size: 14px;"> Pedro N. Carrera 940 </span> </h6>
                                <h6 class="d-flex align-items-center">
                                    <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-at"></i></span>
                                    {{-- <strong>Email: </strong> <span style="font-size: 14px;"> {{$est->email}} </span> --}}
                                    <strong>Email: </strong> <span style="font-size: 14px;"> adminempleo@tresarroyos.gov.ar  </span>
                                </h6>
                                <h6 class="d-flex align-items-center">
                                    <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-phone"></i></span>
                                    {{-- <strong>Telefono: </strong> <span style="font-size: 14px;"> {{$est->contacto}} </span> --}}
                                    <strong>Telefono: </strong> <span style="font-size: 14px;"> (2983) 422284 </span>

                                </h6>
                                <h6 class="d-flex align-items-center">
                                    <span style="font-size: 24px; padding-right:10px;"> <i class="fab fa-instagram"></i></span>
                                    <strong> Ig: </strong> <a href=""  class="a-blue" target="_blank"> <span style="font-size: 14px;"> @oficinaempleotsas </span> </a>
                                </h6>
                                    {{-- </div> --}}
                                    {{-- @if ($est->sitio_web)
                                    <h6 class="d-flex align-items-center">
                                        <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-mouse-pointer"></i> </span>
                                        <strong>Sitio web: </strong> <a href="{{$est->sitio_web}}" class="a-blue" target="_blank"> <span style="font-size: 14px;"> {{$est->sitio_web}} </span> </a>
                                    </h6>
                                    @endif
                                    --}}
                            </div>
                        </section>
                       {{-- fin info del establecimiento --}}
                    </div>
                </div>
                @endif
                @if(count($text->galeria) >0 )
                    <!-- =======  FOTOS REFERIDAS A ESE TEXTO======= -->
                    <section id="secciones-galeria" class="pt-0 mt-0" style="padding-top: 0px!important;">
                        <div class="container " data-aos="fade-up">
                            <div class="row">
                                @foreach($text->galeria as $imag)

                                    <div class="col-lg-4">   <img class="foto-portada" src="{{asset("storage/secciones/".$imag->img)}}" alt="foto-1"></div>

                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif
            @endforeach

    </div>
{{-- </section> --}}


<!-- ======= ARCHIVOS(hacer un listadito similar al de la plata-guia de tramites)  ======= -->
@if(isset($archivos) && (count($archivos) > 0))
    <section id="secciones-archivos">
        <div class="container " data-aos="fade-up">

            <div class="section-title">
                <p>Documentos</p>
                <h2>PDF's</h2>
            </div>

            <div class="container-listado-archivos ps-3 ps-md-0">
                <p> <i class="fas fa-file-download"> <span>Descargas</span>  </i> </p>
                @foreach ($archivos as $archivo)



                {{-- ver como recorro para q muestre separado por sub_seccion --}}
                    <div class="archivos-item">
                    <a href="{{url('/storage/archivos/'.$seccion.'/'.$archivo->nombre)}}" target="_blank">  {{ $archivo->nombre_agradable}} </a>

                </div>
                @endforeach

            </div>
        </div>
    </section>
@endif

<!-- ======= EVENTOS/NOVEDADES /NOTICIAS ======= -->
@if(isset($noticias) && (count($noticias) > 0))
    <section id="secciones-eventos" class="team">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <p> Novedades y eventos</p>
            </div>
            <div class="row">
                @foreach($noticias as $noti)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            @foreach($noti->galeria as $imag)
                                <div class="img-noticia">
                                    <img src="{{asset("storage/noticia_img/".$imag->img)}}" class="img-fluid" alt="">
                                </div>
                                @break
                            @endforeach
                            {{-- <div class="social">
                                <a href="https://www.facebook.com/{{$museo->fb}}" target="_blank"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/{{$museo->ig}}" target="_blank"><i class="bi bi-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="member-info">
                            <a href="/noticia/{{$noti->pathname}}"> {{$noti->titulo}} </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endif

<!-- Template ocultar-mostrar información JS File -->
<script src="{{ asset('assets/js/hide-ig-divs.js') }}"></script>
