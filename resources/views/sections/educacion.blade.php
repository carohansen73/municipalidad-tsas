
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
                            (CAMBIAR - TEXTO DE EJEMPLO) <br>
                            Diseñamos, gestionamos y evaluamos las políticas educativas que garantizan el <strong> derecho a aprender </strong>. <br>
                            Nuestro enfoque son los derechos y deberes, con una perspectiva integral e integrada y una mirada ciudadana
                            que compromete su accionar en beneficio del desarrollo personal y social de todas y todos las <strong> niñas, niños, adolescentes, jóvenes y adultos/as. </strong> <br>
                        </p>

                        <div class="row d-flex justify-content-center mt-4">
                            <?php $estiloColor=4 ?>
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

