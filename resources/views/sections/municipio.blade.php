
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')

<main id="main" class="margen-top-navbar">
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                {{-- <h2>Team</h2> --}}
                <p>Municipio</p>
            </div>

            <div class="row">
                @foreach($secciones as $seccion)

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="seccion-gral-img">
                            <img src="assets/img/sections-portadas/{{$seccion->portada}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            </div>
                            <div class="member-info">
                            <h4>{{$seccion->nombre}}</h4>
                            {{-- <span>Chief Executive Officer</span> --}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

    </div>
  </section><!-- End Team Section -->
</main><!-- End #main -->
