
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


    <section id="municipio mt-4">
        <main id="main" class="margen-top-navbar">

                <section class="team">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <p >Educación</p>
                        </div>

                        <p>
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
                        </p>

                        <div class="row d-flex justify-content-center mt-4">
                            <?php $estiloColor=1 ?>
                            @foreach ($niveles as $nivel)

                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-3 card-icono">
                                    <div class="member member-{{$estiloColor}}" data-aos="fade-up" data-aos-delay="100">
                                        <div class=" d-flex align-items-stretch justify-content-center p-4">
                                            <i class="{{$nivel->icono}}"></i>
                                        </div>
                                        <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                            <h4> {{$nivel->nivel}}</h4>
                                            {{-- <span>Chief Executive Officer</span> --}}
                                        </div>
                                        <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                            <a class="ver-mas-btn" href="/educacion/{{$nivel->id}}">Ver mas</a>
                                        </div>
                                    </div>
                                </div>

                                <?php $estiloColor+=1 ?>
                            @endforeach
                        </div>



    </main><!-- End #main -->






</section>

