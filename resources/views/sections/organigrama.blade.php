
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
                    <div class="col-lg-12 item-tramite" data-aos="fade-left" data-aos-delay="100">

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

                            {{--  info del establecimiento  --}}
                            {{-- @if($area->informacion)

                                <p  class="font-detail mb-5">{!! $est->informacion !!}</p>
                            @endif --}}
                            {{-- @foreach($area->organigrama as $org)
                            <p  class="font-detail mb-5">ver informacion {{$org->descripcion}}</p>
                            @endforeach --}}
                            {{--  carreras  --}}
                                @foreach($area->relacion_areas as $subarea)
                                    @if ($subarea->depende_de == $area->id)
                                    <div  class="col-lg-6 mb-4">
                                        <h4>Areas dependientes </h4>

                                        <div class="ms-2">
                                            {{$subarea->nombre}}

                                            {{-- @foreach($est->carreras as $carrera)
                                                <a href="" class="a-blue">
                                                    <div id="carrera-{{$carrera->id}}" class="col-lg-12 div-mas-info " >
                                                        <span class="icon-closed"><i class="fas fa-angle-right"></i> {{$carrera->nombre}}</span>
                                                        <span class="icon-open display-none"><i class="fas fa-angle-down"></i> {{$carrera->nombre}}</span>
                                                    </div>
                                                </a>
                                                <div id="info-carrera-{{$carrera->id}}" class="display-none font-detail ms-2" >
                                                    <p class="font-detail-minimalist"> {!! $carrera->periodo_inscripcion !!}</p>
                                                    <p>{!! $carrera->informacion !!}</p>
                                                    @if($carrera->links)
                                                    <p>   <a href="{{$carrera->links}}" target="_blank"><i class="fas fa-mouse-pointer"></i> {!! $carrera->links !!} </a></p>
                                                    @endif
                                                </div>
                                            @endforeach --}}
                                        </div>
                                    </div>

                                    @break
                                    @endif
                                @endforeach
                            {{--  fin carreras  --}}


                            {{-- info tabla organigrama --}}
                            @foreach($area->organigrama as $org)
                            <div  class="col-lg-6 ps-lg-5 mb-4">
                                <h4 class="">Información del  AREA </h4>
                                <h6 class="d-flex align-items-center">
                                    <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-map-marker-alt"></i></span>
                                    <strong>Responsable: </strong> <span style="font-size: 14px;"> {{$org->cargo}} {{$org->responsable}} </span> </h6>
                                <h6 class="d-flex align-items-center">
                                    <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-at"></i></span>
                                    <strong>Direccion: </strong> <span style="font-size: 14px;"> {{$org->direccion}} </span>
                                </h6>
                                @if ($org->telefono)
                                <h6 class="d-flex align-items-center">
                                    <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-phone"></i></span>
                                    <strong>Telefono: </strong> <span style="font-size: 14px;"> {{$org->telefono}} </span>
                                </h6>
                                @endif
                                @if ($org->email)
                                <h6 class="d-flex align-items-center">
                                    <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-phone"></i></span>
                                    <strong>Email: </strong> <span style="font-size: 14px;"> {{$org->email}} </span>
                                </h6>
                                @endif
                                @if ($org->descripcion)
                                <h6 class="d-flex align-items-center">

                                     <span style="font-size: 14px;"> {{$org->descripcion}} </span>
                                </h6>
                                @endif
                            </div>
                            @endforeach
                            {{-- fin info organigrama --}}


                        </div>





                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Features Section -->

</main><!-- End #main -->

<!-- Template ocultar-mostrar información JS File -->
<script src="{{ asset('assets/js/hide-show-information.js') }}"></script>

