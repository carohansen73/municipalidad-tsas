
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}

<div id="ente-vial">
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
            <div class="col-4 border-1">
            </div>

            <div class="col-4 border-6">
            </div>
            <div class="col-4 border-3">
            </div>
        </div>
    </div>
    <!-- ======= fin borde colorido ======= -->
{{-- FIN PORTADA --}}


 <!-- ======= Counts Section ======= -->
 <section id="counts" class="counts mt-4">
    <div class="container" data-aos="fade-up">

      <div class=" col-lg-12">
      <div class="row">
        <div class=" col-lg-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100">
            <img  src="{{asset("storage/secciones/ente-vial/pala.jpg")}}" alt="foto-1" style="width:100%;" >
        </div>
        <div class="col-lg-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch " data-aos="fade-left" data-aos-delay="100">
          <div class="content pt-0 pb-0 d-flex flex-column justify-content-center">
            <h3>El Ente Vial está activo</h3>
            {{-- <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p> --}}
            <div class="row">
              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="fas fa-snowplow"></i>
                  <span data-purecounter-start="0" data-purecounter-end="28" data-purecounter-duration="2" class="purecounter"></span>
                  <p><strong>Km. </strong> de limpieza realizados por la retroexcavadoras en distintos puntos del partido</p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-sign-merge-right"></i>
                  <span data-purecounter-start="0" data-purecounter-end="46000" data-purecounter-duration="2" class="purecounter"></span>
                  <p><strong>m3</strong> de tosca fue retirada en distintas zonas las cuales se acopian para venideras obras durante el año.</p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-sign-turn-left"></i>
                  <span data-purecounter-start="0" data-purecounter-end="34" data-purecounter-duration="4" class="purecounter"></span>
                  <p><strong>Km</strong> han sido entoscados, trasladando el camino a Mayol para reentoscarlo en algunos tramos.</p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="fas fa-road"></i>
                  <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="4" class="purecounter"></span>
                  <p><strong>Km</strong> fueron mejorados y se continúa con la segunda pasada</p>
                </div>
              </div>
            </div>
          </div> <!-- End .content-->
        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Counts Section -->


<section id="secciones-galeria" class="pt-0 mt-0" style="padding-top: 0px!important;">
    <div class="container " data-aos="fade-up">
        <div class="row">
            {{-- @foreach($text->galeria as $imag) --}}

                <div class="col-lg-4 mb-3">   <img class="foto-portada" src="{{asset("storage/secciones/ente-vial/trabajos.jpg")}}" alt="foto-1"></div>
                <div class="col-lg-4 mb-3">   <img class="foto-portada" src="{{asset("storage/secciones/ente-vial/vial.jpeg" )}}" alt="foto-1"></div>
                <div class="col-lg-4 mb-3">   <img class="foto-portada" src="{{asset("storage/secciones/ente-vial/maquina-champion-ente-vial.jpg")}}" alt="foto-1"></div>

            {{-- @endforeach --}}
        </div>
    </div>
</section>









<!-- Template ocultar-mostrar información JS File -->
<script src="{{ asset('assets/js/hide-ig-divs.js') }}"></script>
