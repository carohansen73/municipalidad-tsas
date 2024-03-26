
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}

    <div id="portada-secciones" class="portada-foto text-md-left text-sm-center ">
        @foreach($portada as $p)
        <img class="foto-portada" src="{{asset("storage/secciones/".$p->img)}}" alt="portada-de-la-seccion">
        @break
        @endforeach
        <div class="background-portada">   </div>
        {{-- <img class="logos-portada" src="assets/img/sections-portadas/logos/logos.png" alt=""> --}}
        @foreach ($textos as $text)
            <h1>{{$text->seccion->nombre}}</h1>
        @endforeach
    </div>

    {{-- <div  class="portada">
        <div class="portada-seccion ps-5">
            <div class="section-title">
                <p style="color: rgb(140, 187, 221);">{{$nombreSeccion}}</p>
            </div>
        </div>
        <img src="assets/img/sections-background/city-removebg-preview.png" alt="" srcset="">
    </div> --}}

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
</div><!-- ======= fin borde colorido ======= -->

<!-- =======  INFORMACION GENERAL ======= -->
@foreach ($textos as $text)
@if($text->informacion || $text->sub_informacion )
    <section class="pb-0">
        <div class="container ps-4" data-aos="fade-up">

            <div class="section-title ps-0">
                <p style="color: #d63384">{{$text->titulo}}</p>
            </div>
            <p>
                {!! $text->informacion !!}
            </p>
        </div>
    </section>
    @endif
    @if(count($text->imgs) >0 )
        <!-- =======  FOTOS REFERIDAS A ESE TEXTO======= -->
        <section id="secciones-galeria" class="pt-0 mt-0" style="padding-top: 0px!important;">
            <div class="container " data-aos="fade-up">
                <div class="row">
                    @foreach($text->imgs as $imag)

                            <div class="col-lg-4">   <img class="foto-portada" src="{{asset("storage/secciones/".$imag->img)}}" alt="foto-1"></div>

                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endforeach



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
                            @foreach($noti->imgs as $imag)
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

