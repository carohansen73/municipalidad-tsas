
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


<main id="main" class="margen-top-navbar">

    <!-- ======= Features Section ======= -->
    <section id="tramites" class="features">
        <div class="container" data-aos="fade-up">
            {{-- aca --}}
            <div class="section-title">
                <p>Organigrama</p>
                {{-- <h2></h2> --}}
                {{-- <p><span style="font-size: 14px; color:#aaaaaa;">Buscá el trámite que deseas realizar por tema</span></p> --}}
            </div>

            <div class="row">
                @foreach($areas as $area)
                  {{--  AREAS NIVEL 1 --}}
                    <div class="col-lg-12 item-tramite" id="{{$area->id}}" data-aos="fade-left" data-aos-delay="100">

                        <a href="" >
                            <div id="{{$area->id}}" class="icon-box div-tramite" data-aos="zoom-in" data-aos-delay="150">
                                <div class="d-flex align-items-center">
                                    <span class="icon-closed "><i class="fas fa-angle-right pb-2"></i></span>
                                    <span class="icon-open display-none"><i class="fas fa-angle-down"></i></span>
                                    <h4 >{{$area->nombre}}</h4>
                                </div>
                            </div>
                        </a>

                        <div id="informacion-{{$area->id}}" class="row col-lg-12 informacion-tramite display-none ms-lg-5">
                            {{--  SUBAREAS NIVEL 2 --}}
                            <div  class="col-lg-6 mb-4">
                                @foreach($area->hijos as $subarea)
                                    <div class="ms-2">
                                        @foreach($subarea->organigrama as $org)
                                            <a href="" class="a-blue  div-tramite-2" id="{{$subarea->id}}">
                                                <div id="carrera-{{$subarea->id}}" class="col-lg-12 div-mas-info" >
                                                    <span class="icon-closed"><i class="fas fa-angle-right"></i> {{$subarea->nombre}}</span>
                                                    <span class="icon-open display-none"><i class="fas fa-angle-down"></i> {{$subarea->nombre}}</span>
                                                </div>
                                            </a>

                                            {{--  SUBAREAS NIVEL 3 --}}
                                            @foreach($subarea->hijos as $subarea3)
                                                <div class="ms-4">
                                                    @foreach($subarea3->organigrama as $org)
                                                    <a href="" class="a-dark-blue  div-tramite-3" style="color=rgb(118 172 211);;" id="{{$subarea3->id}}">
                                                        <div id="carrera-{{$subarea3->id}}" class="col-lg-12 div-mas-info" >
                                                            <span class="icon-closed"><i class="fas fa-angle-right"></i> {{$subarea3->nombre}}</span>
                                                            <span class="icon-open display-none"><i class="fas fa-angle-down"></i> {{$subarea3->nombre}}</span>
                                                        </div>
                                                    </a>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                            {{--  FIN SUBAREAS NIVEL 3 --}}

                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                            {{--  fin subareas nivel 2 --}}
                             {{--  Info de las areas, con JS --}}
                            <div id="show-info-{{$area->id}}" class="col-lg-6 ps-lg-5 mb-4 info-area-general" >
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Features Section -->

</main><!-- End #main -->

<!-- Template ocultar-mostrar información JS File -->
<script src="{{ asset('assets/js/organigrama.js') }}"></script>

