
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.tadi-navbar')

@section('content')

<main id="main" class="margen-top-navbar">




 <!-- ======= Features Section ======= -->
 <section id="features" class="features">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Guía de Trámites</p>
            <h2> @foreach($tipo as $t)  {{$t->tipo}}@endforeach</h2>
            {{-- <p><span style="font-size: 14px; color:#aaaaaa;">Buscá el trámite que deseas realizar por tema</span></p> --}}
        </div>

      <div class="row">

        <div class="col-lg-12" data-aos="fade-left" data-aos-delay="100">
            @foreach($tramite as $tram)
                <div id="{{$tram->id}}" class="icon-box mt-5 div-tramite" data-aos="zoom-in" data-aos-delay="150">
                    <i class="{{$tram->tipo->icono}}"></i>

                    <h4>{{$tram->titulo}}</h4>
                    <p>{{$tram->descripcion}}</p>
                </div>

                    <div id="informacion-{{$tram->id}}" class="informacion-tramite display-none ms-lg-5">
                        <h6 class="ms-5"><strong>Lugar donde se realiza</strong></h6><p class="ms-5">{{$tram->lugar}}</p>
                        <h6 class="ms-5"><strong>Horario</strong></h6><p class="ms-5">{{$tram->horario}}</p>
                        <h6 class="ms-5"><strong>Quien puede realizarlo</strong></h6><p class="ms-5">{{$tram->quien}}</p>
                        <h6 class="ms-5"><strong>Requisitos</strong></h6><p class="ms-5">{{$tram->requisitos}}</p>
                        <h6 class="ms-5"><strong>Costo</strong></h6><p class="ms-5">{{$tram->costo}}</p>
                        <h6 class="ms-5"><strong>Contacto</strong></h6><p class="ms-5">{{$tram->contacto}}</p>
                        <h6 class="ms-5"><strong>Links de interés</strong></h6><p class="ms-5">{{$tram->links}}</p>
                    </div>



            @endforeach
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->



</main><!-- End #main -->

  <!-- Template ocultar-mostrar información JS File -->
  <script src="{{ asset('assets/js/hide-show-information.js') }}"></script>

