
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}
{{-- CULTURA Y EDUCACION --}}
    {{-- @if($nombreSeccion == "cultura y educacion")

        <div id="cultura" class="portada-foto text-md-left text-sm-center ">
            <img class="foto-portada" src="assets/img/sections-portadas/cultura/cultura.jpg" alt="portada-de-la-seccion">
            <div class="background-portada">   </div>
            {{-- <img class="logos-portada" src="assets/img/sections-portadas/logos/logos.png" alt="">
            <h1>{{$nombreSeccion}}</h1>
        </div>

    @else
        <div  class="portada pt-5 mt-5">

            <div class="portada-seccion ps-5">
                <div class="section-title">
                    <p style="color: rgb(140, 187, 221);">{{$nombreSeccion}}</p>
                </div>
            </div>
            <img src="assets/img/sections-background/city-removebg-preview.png" alt="" srcset="">

        </div>
    @endif

    <!-- ======= borde colorido ======= -->
    <div class="container-border">
        <div class="row">
            <div class="col-4 border-1">
            </div>
            <div class="col-4 border-2">
            </div>
            <div class="col-4 border-3">
            </div>
        </div>
    </div><!-- ======= fin borde colorido ======= --> --}}

    {{-- CARDS CON DIFERENTES ENTIDADES --}}
    <section id="municipio mt-4">
        <main id="main" class="margen-top-navbar">

            {{-- CULTURA Y EDUCACION / entidades --}}

                <section class="team">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <p >Servicios</p>
                        </div>

                        <div class="row d-flex justify-content-center">

                            <div class="col-lg-6 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4 card-icono">
                                <div class="member member-1" data-aos="fade-up" data-aos-delay="100">
                                    <div class=" d-flex align-items-stretch justify-content-center p-4">
                                        <i class="fas fa-car"></i>
                                    </div>
                                    <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                        <h4> Estacionamiento medido</h4>
                                        {{-- <span>Chief Executive Officer</span> --}}
                                    </div>
                                    <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                        <a class="ver-mas-btn" href="/seccion/estacionamiento-medido">Ver mas</a>
                                    </div>
                                </div>
                            </div>

                              <div class="col-lg-6 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4 card-icono">
                                <div class="member  member-2" data-aos="fade-up" data-aos-delay="100">
                                    <div class=" d-flex align-items-stretch justify-content-center p-4">
                                        <i class="bi bi-chat-dots"></i>
                                    </div>
                                    <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                        <h4> Reclamos/denuncias </h4>
                                        {{-- <span>Chief Executive Officer</span> --}}
                                    </div>
                                    <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                        <a class="ver-mas-btn" href="https://mitresa.gobdigital.com.ar/web/default">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4 card-icono">
                                <div class="member member-3" data-aos="fade-up" data-aos-delay="100">
                                    <div class=" d-flex align-items-stretch justify-content-center p-4">
                                        <i class="fas fa-user-shield"></i>
                                    </div>
                                    <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                        <h4> Defensa al consumidor </h4>
                                        {{-- <span>Chief Executive Officer</span> --}}
                                    </div>
                                    <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                        <a class="ver-mas-btn" href="https://mitresa.gobdigital.com.ar/ciudadano/login">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4 card-icono">
                                <div class="member  member-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class=" d-flex align-items-stretch justify-content-center p-4">
                                        <i class="fas fa-id-badge"></i>
                                    </div>
                                    <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                        <h4> Carnet de conducir </h4>
                                        {{-- <span>Chief Executive Officer</span> --}}
                                    </div>
                                    <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                        <a class="ver-mas-btn" href="https://mitresa.gobdigital.com.ar/ciudadano/login">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4 card-icono">
                                <div class="member  member-5" data-aos="fade-up" data-aos-delay="100">
                                    <div class=" d-flex align-items-stretch justify-content-center p-4">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                        <h4> Plan joven </h4>

                                    </div>
                                    <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                        <a class="ver-mas-btn" href="https://planjoven.tresarroyos.gov.ar/" target="_blank">Ver mas</a>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-lg-6 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4 card-icono">
                                <div class="member  member-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class=" d-flex align-items-stretch justify-content-center p-4">
                                        <i class="fas fa-life-ring"></i>
                                    </div>
                                    <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                        <h4> Guardavidas </h4>
                                        {{-- <span>Chief Executive Officer</span> --}}
                                    </div>
                                    <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                        <a class="ver-mas-btn" href="https://guardavidas.tresarroyos.gov.ar/" target="_blank">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4 card-icono">
                                <div class="member  member-1" data-aos="fade-up" data-aos-delay="100">
                                    <div class=" d-flex align-items-stretch justify-content-center p-4">
                                        <i class="fas fa-school"></i>
                                    </div>
                                    <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                        <h4> Becas</h4>
                                        {{-- <span>Chief Executive Officer</span> --}}
                                    </div>
                                    <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                        <a class="ver-mas-btn" href="https://becas.tresarroyos.gov.ar/" target="_blank">Ver mas</a>
                                    </div>
                                </div>
                            </div>

                        </div>






    </main><!-- End #main -->






</section>

