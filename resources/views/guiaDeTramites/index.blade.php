
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.tadi-navbar')

@section('content')

<main id="main" class="margen-top-navbar">
   <!-- ======= Consultas/reclamos Section ======= -->
   {{-- <section id="consulta" class="services reclamos">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Seccion</h2>
        <p>Guía de Trámites</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box icon-4">
            <div class="icon"><i class="bi bi-chat-left-dots-fill"></i></div>
            <h4><a href="nuevo-reclamo">Ingresar una Consulta/reclamo</a></h4>

          </div>
        </div>




    </div>

    </div>
  </section> --}}






    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container services-sm" data-aos="fade-up">

            <div class="section-title">

                <p>Guía de Trámites</p>
                <h2>Buscá el trámite que deseas realizar por tema</h2>
                {{-- <p><span style="font-size: 14px; color:#aaaaaa;">Buscá el trámite que deseas realizar por tema</span></p> --}}
            </div>

            <div class="row">
                @foreach($tipos as $tipo)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box icon-4">
                        <div class="icon"><i class="{{$tipo->icono}}"></i></div>
                        <h4><a href="tramite/{{$tipo->id}}">{{$tipo->tipo}}</a></h4>
                        {{-- {* <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> *} --}}
                    </div>
                </div>
                @endforeach


            </div>

        </div>
    </section><!-- End Services Section -->


</main><!-- End #main -->


