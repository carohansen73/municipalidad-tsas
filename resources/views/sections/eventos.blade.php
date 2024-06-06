@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}

<section  class="team">
    <div class="container " data-aos="fade-up">
        <main id="main" class="margen-top-navbar">

        <div class="section-title pb-2">
            <p>Eventos</p>
            {{-- <h2></h2> --}}
        </div>

        <!-- ======= borde colorido ======= -->
        <div class="container-border">
            <div class="row">
                <div class="col-4 border-1">
                </div>
                <div class="col-4 border-4">
                </div>
                <div class="col-4 border-6">
                </div>
            </div>
        </div><!-- ======= fin borde colorido ======= -->
    </div>
    {{-- FIN PORTADA --}}












    <!-- ======= Portfolio Section ======= -->
<section id="portfolio-eventos" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Eventos culturales, deportivos y sociales</h2>
            <p>Tres Arroyos</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Todos</li>
                    @if(isset($eventos) && (count($eventos) > 0) )
                        @foreach($categorias as $categoria)
                            <li data-filter=".filter-{{$categoria->nombre}}">{{$categoria->nombre}}</li>
                        @endforeach
                    @endif

                {{-- <li data-filter=".filter-deportes">Deportes</li>
                <li data-filter=".filter-card">Fiesta de las Colectividades</li>
                <li data-filter=".filter-web">Fiesta del Trigo</li> --}}
            </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @if(isset($eventos) && (count($eventos) > 0))
                @foreach($eventos as $evento)

                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{$evento->categoria->nombre}}">
                        <div class="portfolio-wrap">
                            <img src="{{asset("storage/eventos/".$evento->img)}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{$evento->nombre}}</h4>
                                <p>{{$evento->categoria->nombre}}</p>
                                <div class="portfolio-links">
                                    <a href="{{asset("storage/eventos/".$evento->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$evento->nombre}}"><i class="bx bx-plus"></i></a>
                                    {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif

      </div>

    </div>
  </section>
 <!-- End Portfolio Section -->






  <!-- Template ocultar-mostrar información JS File -->
  <script src="{{ asset('assets/js/modalevento.js') }}"></script>
