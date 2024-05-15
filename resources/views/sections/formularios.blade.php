
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
                            <p> {!! $tipo !!}</p>
                        </div>
                        <?php
                        $counter = 1
                        ?>
                        <div class="row d-flex justify-content-center">
                            @foreach($formularios as $form)


                            <div class="col-lg-6 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4 card-icono">
                                <div class="member member-{{$counter}}" data-aos="fade-up" data-aos-delay="100">
                                    <div class=" d-flex align-items-stretch justify-content-center p-4">
                                        <i class="{!! $form->icono !!}"></i>
                                    </div>
                                    <div class="card-icono-info  ">
                                        <div class="row d-flex align-items-stretch justify-content-center text-center">
                                            <h4> {!! $form->nombre !!}</h4>
                                            <span>{!! $form->descripcion !!}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                        <a class="ver-mas-btn" href="{!! $form->link !!}">Ver mas </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $counter += 1;
                            ?>
                            @endforeach





                        </div>






    </main><!-- End #main -->






</section>

