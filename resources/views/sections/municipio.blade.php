
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')

<section id="municipio">

    <div  class="portada">

        <div class="portada-seccion ps-5">
            <div class="section-title">
                <p style="color: rgb(140, 187, 221);">{{$nombreSeccion}}</p>
            </div>
        </div>
        <img src="assets/img/sections-background/city-removebg-preview.png" alt="" srcset="">

    </div>
    <div class="container-border">
        <div class="row">
            <div class="col-lg-4 border-1">

            </div>
            <div class="col-lg-4 border-2">

            </div>
            <div class="col-lg-4 border-3">

            </div>
        </div>
    </div>




    <main id="main" class="margen-top-navbar">
        <!-- ======= Team Section ======= -->
        <section class="team">
            <div class="container" data-aos="fade-up">

                {{-- <div class="section-title">

                    <p>Municipio</p>
                </div> --}}

                <div class="row container-section-gral">
                    @foreach($secciones as $seccion)

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="seccion-gral-img">
                                    <img src="assets/img/sections-portadas/{{$seccion->portada}}" class="img-fluid" alt="">
                                    {{-- <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div> --}}
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
</section>

