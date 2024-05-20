
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}

<div id="adultos">
    <div class="portada-foto text-md-left text-sm-center ">
        {{-- @if(isset($portada))
        @foreach($portada as $p)
        <img class="foto-portada" src="{{asset("storage/secciones/".$p->img)}}" alt="portada-de-la-seccion">
        @break
        @endforeach --}}
        <div class="background-portada">   </div>
        {{-- <img class="logos-portada" src="assets/img/sections-portadas/logos/logos.png" alt=""> --}}
        @foreach ($textos as $text)
            @if($text->seccion->nombre == "Empleo - Emprendedores")
                <h1>Oficina de Empleo y Capacitación</h1>
                @else
                <h1>{{$text->seccion->nombre}}</h1>
            @endif
        @endforeach
        {{-- @endif --}}
    </div>
</div>
    <!-- ======= borde colorido ======= -->
    <div class="container-border">
        <div class="row">
            <div class="col-4 border-5">
            </div>

            <div class="col-4 border-1">
            </div>
            <div class="col-4 border-6">
            </div>
        </div>
    </div>
    <!-- ======= fin borde colorido ======= -->
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
                                    <div class="col-lg-4">   <img class="foto-portada" src="{{asset("storage/secciones/".$imag->img)}}" alt="foto-1"></div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif
            @endforeach

    </div>
{{-- </section> --}}

<!-- ======= LISTADO DE TRABAJADORES  ======= -->
<section id="about" class="about mt-lg-5">
    <div class="container content" data-aos="fade-up">
        <h3>LISTADO DE TRABAJADORES DOMICILIARIOS</h3>
        <div class="row pt-4">
            @php
                $counter = 1;
            @endphp
                @foreach ($trabajadores as $re)
                    {{--  si la iteracion es par lo muestra aca sino en la impar --}}
                    @if (($counter % 2) == 0)
                        <div class="col-lg-6 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                            <ul>
                            <li> <i class="ri-check-double-line"></i> {{ $re->apellido_y_nombre }}<br><span style="color: #848484;"> {{ $re->domicilio }} en {{ $re->localidad }} - Tel. {{ $re->contacto }}</span> </li>
                            </ul>
                        </div>
                   @else
                        <div class="col-lg-6 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                            <ul>
                            <li> <i class="ri-check-double-line"></i>{{ $re->apellido_y_nombre }}<br><span style="color: #848484;"> {{ $re->domicilio }} en {{ $re->localidad }} - Tel. {{ $re->contacto }} </span></li>
                            </ul>
                        </div>
                    @endif
                    @php
                    $counter++;
                @endphp
                @endforeach
        </div>
    </div>
</section>
  <!-- End LISTADO DE TRABAJADORES -->

<!-- ======= LISTADO RESIDENCIAS  ======= -->
<section id="about" class="about mt-lg-5">
    <div class="container content" data-aos="fade-up">
        <h3>LISTADO DE RESIDENCIAS</h3>
        <div class="row pt-4">
            @php
                $counter = 1;
            @endphp
                @foreach ($residencias as $re)
                    {{--  si la iteracion es par lo muestra aca sino en la impar --}}
                    @if (($counter % 2) == 0)
                        <div class="col-lg-6 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                            <ul>
                            <li> <i class="ri-check-double-line"></i> {{ $re->nombre }}<br><span style="color: #848484;"> {{ $re->ubicacion }} en {{ $re->localidad }} - Tel. {{ $re->contacto }} <br> Responsable: {{ $re->responsable }} </span> </li>
                            </ul>
                        </div>
                   @else
                        <div class="col-lg-6 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                            <ul>
                            <li> <i class="ri-check-double-line"></i>{{ $re->nombre }}<br><span style="color: #848484;"> {{ $re->ubicacion }} en {{ $re->localidad }} - Tel. {{ $re->contacto }} <br> Responsable: {{ $re->responsable }} </span></li>
                            </ul>
                        </div>
                    @endif
                    @php
                    $counter++;
                @endphp
                @endforeach
        </div>
    </div>
</section>
  <!-- End LISTADO RESIDENCIAS -->

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

