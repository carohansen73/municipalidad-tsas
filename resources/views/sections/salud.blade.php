@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


    <section id="municipio mt-4">
        <main id="main" class="margen-top-navbar">

                <section class="team">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <p >Salud</p>
                        </div>

                        {{-- <p>
                            COMPROMETIDOS CON LA EDUCACION<br>
                            En nuestra ciudad, creemos que <strong>la educación es la base del progreso </strong>y el desarrollo personal.
                            Estamos dedicados a proporcionar a nuestros estudiantes las <strong> herramientas</strong> y <strong> recursos</strong> necesarios para alcanzar sus metas y contribuir positivamente a la sociedad.<br>
                            <strong>  </strong> <br>
                        </p>
                        <p>
                            PROPUESTAS EDUCATIVAS DE NUESTRA CIUDAD<br>
                            Tres Arroyos cuenta comuna amplia variedad de instituciones de educación <strong>inicial, primaria y secundaria, </strong>de gestión tanto pública como privada,
                            que se destacan por su compromiso con el desarrollo integral de los estudiantes.<br>
                            También alberga instituciones de <strong>  educación superior </strong>que ofrecen una variedad de programas y oportunidades para los estudiantes que buscan
                             avanzar en sus estudios y carreras.<br>
                          <br>
                        </p> --}}

                        <div class="row d-flex justify-content-center mt-4">



                                <div class="col-lg-6 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-3 card-icono">
                                    <div class="member member-3" data-aos="fade-up" data-aos-delay="100">
                                        <div class=" d-flex align-items-stretch justify-content-center p-4">
                                            <i class="far fa-hospital"></i>
                                        </div>
                                        <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                            <div class="row text-center">
                                                <h4> Centro de Salud </h4>
                                                <span>Sitio oficial del Centro Municipal de Salud</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                            <a class="ver-mas-btn" href="https://centrodesaludtsas.com.ar/">Ingresar</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-3 card-icono">
                                    <div class="member member-2" data-aos="fade-up" data-aos-delay="100">
                                        <div class=" d-flex align-items-stretch justify-content-center p-4">
                                            <i class="fas fa-laptop-medical"></i>
                                        </div>
                                        <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                            <div class="row text-center">
                                                <h4> Telemedicina </h4>
                                                <span>Consulta medica virtual</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                            <a class="ver-mas-btn" href="https://tresarroyos.itconsultsa.com/login">Ingresar</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-3 card-icono">
                                    <div class="member member-1" data-aos="fade-up" data-aos-delay="100">
                                        <div class=" d-flex align-items-stretch justify-content-center p-4">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                        <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                            <div class="row text-center">
                                                <h4> Doná sangre </h4>
                                                <span> Registro permanente de donantes voluntarios de sangre</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                            <a class="ver-mas-btn" href="https://centrodesalud.com.ar/noticia/anotate-para-donar">Ingresar</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-3 card-icono">
                                    <div class="member member-4" data-aos="fade-up" data-aos-delay="100">
                                        <div class=" d-flex align-items-stretch justify-content-center p-4">
                                            <i class="fas fa-h-square"></i>
                                        </div>
                                        <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                            <div class="row text-center">

                                            <h4> Laboratorio  </h4>
                                             <span>Acceso a descarga de resultados</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                            <a class="ver-mas-btn" href="https://resultados.ibta.com.ar/shift/lis/ibta/elis/s01.iu.web.Login.cls?config=HOSPITAL">Ingresar</a>
                                        </div>
                                    </div>
                                </div>



                        </div>



    </main><!-- End #main -->






</section>

