
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
                </div>
                @endif
                @if(count($text->galeria) >0 )
                    <!-- =======  FOTOS REFERIDAS A ESE TEXTO======= -->
                    <section id="secciones-galeria" class="pt-0 mt-0" style="padding-top: 0px!important;">
                        <div class="container " data-aos="fade-up">
                            <div class="row">
                                @foreach($text->galeria as $imag)
                                    <div class="col-lg-4 mb-3">   <img class="foto-portada img-fluid" src="{{asset("storage/secciones/".$imag->img)}}" alt="foto-1"></div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif
            @endforeach

    </div>
{{-- </section> --}}


<!-- ======= ARCHIVOS  ======= -->
@if(isset($archivos) && (count($archivos) > 0))
    <section id="secciones-archivos">
        <div class="container " data-aos="fade-up">

            <div class="section-title">
                <p>Archivos</p>
                <h2>Accedé a la información que necesitás</h2>
            </div>

            <div class="container-listado-archivos row col-12 ps-3 ps-md-0">
                <p> <i class="fas fa-file-download"> <span>Descargas</span>  </i> </p>
                @foreach ($archivos as $archivo)

                <div class="col-lg-6 col-md-12">

                {{-- ver como recorro para q muestre separado por sub_seccion --}}
                    <div class="archivos-item">
                    <a href="{{url('/storage/archivos/'.$seccion.'/'.$archivo->nombre)}}" target="_blank">  {{ $archivo->nombre_agradable}} </a>
                </div>
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



 <!-- ======= Contact Section ======= -->

@if(isset($contacto) && count($contacto) >0)
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                {{-- <h2>Contacto</h2> --}}
                <p>Contacto</p>
            </div>
            <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    @foreach ($contacto as $cont)
                        @if($cont->direccion)
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Dirección:</h4>
                                <p>{{$cont->direccion}}</p>
                            </div>
                        @endif
                        @if($cont->email)
                            <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{$cont->email}}</p>
                            </div>
                        @endif
                        @if($cont->telefono || $cont->wsp)
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telefono:</h4>
                                <p>{{$cont->telefono}}</p>
                                <p>{{$cont->wsp}}</p>
                            </div>
                        @endif
                        @if($cont->ig)
                            <div class="email">
                                <i class="fab fa-instagram"></i>
                                <h4>Ig:</h4>
                                <p>{{$cont->ig}}</p>
                            </div>
                        @endif
                        @if($cont->fb)
                            <div class="email">
                                <i class="fab fa-facebook-square"></i>
                                <h4>Fb:</h4>
                                <p>{{$cont->fb}}</p>
                            </div>
                        @endif
                        @if ($cont->pagina_web)
                            <div class="email">
                                <i class="fas fa-mouse-pointer"></i>
                                <h4>Sitio web:</h4>
                                <p><a href="{{$cont->pagina_web}}" class="a-blue" target="_blank"> <span style="font-size: 14px;"> {{$cont->pagina_web}} </span> </a></p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        <div class="col-lg-8 mt-5 mt-lg-0">
            @foreach ($contacto as $cont)
            @if($cont->direccion)


            <div>

                <iframe style="border:0; width: 100%; height: 270px;" src="{{$cont->iframe_mapa}}" frameborder="0" allowfullscreen></iframe>
              </div>
              @endif
              @endforeach

        </div>

      </div>

    </div>
  </section>
  @endif
  <!-- End Contact Section -->




<!-- Template ocultar-mostrar información JS File -->
<script src="{{ asset('assets/js/hide-ig-divs.js') }}"></script>
