
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}

    <div id="cultura" class="portada-foto text-md-left text-sm-center ">
        @foreach($textos as $text)
        <img class="foto-portada" src="{{asset("storage/secciones/".$text->img_portada)}}" alt="portada-de-la-seccion">
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
<section>
    <div class="container " data-aos="fade-up">
        @foreach ($textos as $text)
            <div class="section-title">
                <p style="color: #d63384">{{$text->titulo}}</p>
            </div>
            <p>
                {!! $text->informacion !!}
            </p>
            <div class="section-title mt-5">
                <p style="color: #d63384">{{$text->subtitulo}}</p>
            </div>
            <div>
                {!! $text->sub_informacion !!}
            </div>
        @endforeach
    </div>
</section>

<!-- =======  FOTOS ======= -->
@foreach ($textos as $text)
@if($text->img_2 || $text->img_3 || $text->img_4)
    <section id="secciones-galeria" class="pt-0">
        <div class="container " data-aos="fade-up">
            <div class="section-title">
                <p style="color: #d63384">Galeria</p>
            </div>
            <div class="row">
                @if ($text->img_2)
                    <div class="col-lg-4">   <img class="foto-portada" src="{{asset("storage/secciones/".$text->img_2)}}" alt="foto-1"></div>
                @endif
                @if ($text->img_3)
                    <div class="col-lg-4">   <img class="foto-portada" src="{{asset("storage/secciones/".$text->img_3)}}" alt="foto-2"></div>
                @endif
                @if ($text->img_4)
                    <div class="col-lg-4">   <img class="foto-portada" src="{{asset("storage/secciones/".$text->img_4)}}" alt="foto-3"></div>
                @endif
            </div>
        </div>
    </section>
@endif
@endforeach
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

