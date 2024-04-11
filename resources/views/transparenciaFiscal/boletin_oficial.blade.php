@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')





</div><!-- ======= fin borde colorido ======= --> --}}

{{-- CARDS CON DIFERENTES ENTIDADES --}}

    <main id="main" class="margen-top-navbar">

        {{-- CULTURA Y EDUCACION / entidades --}}

            <section class="team">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <p>Boletin oficial</p>
                    </div>

                    <p>En esta sección se publican los Avisos, Resoluciones, Decretos y Ordenanzas Municipales, con fines informativos. </p>

                    <div class="row d-flex justify-content-center">
                        @foreach($items as $item)

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4 card-icono">
                            <div class="member member-6" data-aos="fade-up" data-aos-delay="100" style="border: 2px solid #eeeeee;">
                                <div class=" d-flex align-items-stretch justify-content-center p-3">
                                    <i class='{{$item["icono"]}}'></i>
                                </div>
                                <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                    <h4>{{$item['nombre']}}</h4>
                                    {{-- <span>Chief Executive Officer</span> --}}
                                </div>
                                <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                    <a class="ver-mas-btn" href="/seccion/estacionamiento-medido">Ver</a>
                                </div>
                            </div>
                        </div>
@endforeach







                    </div>






</main><!-- End #main -->






</section>






















