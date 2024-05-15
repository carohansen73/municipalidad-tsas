
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
                <p>Establecimientos educativos</p>
                <h2>  @foreach($establecimientos as $est)  <i class="{{$est->nivel->icono}}" style="font-size: 24px;"></i> @break @endforeach
                    {{-- @foreach($tipo as $t)  {{$t->tipo}} @endforeach --}} {!! $est->nivel->nivel !!}
                </h2>
                {{-- <p><span style="font-size: 14px; color:#aaaaaa;">Buscá el trámite que deseas realizar por tema</span></p> --}}
            </div>

            <div class="row">
                {{-- <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100"> --}}
                    <h4 class="dark-blue-font" data-aos="zoom-in" data-aos-delay="150">Tres Arroyos </h4>
                    @foreach($establecimientos as $est)
                    @if($est->localidad == "Tres Arroyos")

                        <div class="col-lg-12 item-tramite" data-aos="fade-left" data-aos-delay="100">

                            <a href="" >
                                <div id="{{$est->id}}" class="icon-box  div-tramite" data-aos="zoom-in" data-aos-delay="150">
                                    <div class="d-flex align-items-center">
                                        <span class="icon-closed "><i class="fas fa-angle-right pb-2"></i></span>
                                        <span class="icon-open display-none"><i class="fas fa-angle-down"></i></span>
                                        <h4 >{{$est->nombre}}</h4>
                                    </div>

                                </div>
                            </a>
                            <div id="informacion-{{$est->id}}" class="row col-lg-12 informacion-tramite display-none ms-lg-5">
                                {{--  info del establecimiento  --}}
                                @if($est->informacion)
                                    <p  class="font-detail mb-5">{!! $est->informacion !!}</p>
                                @endif
                                {{--  carreras  --}}
                                    @foreach($est->carreras as $carrera)
                                        @if ($carrera->id)
                                        <div  class="col-lg-6 mb-4">
                                            <h4>Propuesta académica </h4>
                                            <div class="ms-2">
                                                @foreach($est->carreras as $carrera)
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
                                                @endforeach
                                            </div>
                                        </div>
                                        @break
                                        @endif
                                    @endforeach
                                {{--  fin carreras  --}}
                                {{-- info del establecimiento --}}
                                <div  class="col-lg-6 ps-lg-5 mb-4">
                                    <h4 class="">Información del establecimiento </h4>
                                    <h6 class="d-flex align-items-center">
                                        <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-map-marker-alt"></i></span>
                                        <strong>Dirección: </strong> <span style="font-size: 14px;"> {{$est->ubicacion}} </span> </h6>
                                    <h6 class="d-flex align-items-center">
                                        <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-at"></i></span>
                                        <strong>Email: </strong> <span style="font-size: 14px;"> {{$est->email}} </span>
                                    </h6>
                                    <h6 class="d-flex align-items-center">
                                        <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-phone"></i></span>
                                        <strong>Contacto: </strong> <span style="font-size: 14px;"> {{$est->contacto}} </span>
                                    </h6>
                                    @if ($est->sitio_web)
                                    <h6 class="d-flex align-items-center">
                                        <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-mouse-pointer"></i> </span>
                                        <strong>Sitio web: </strong> <a href="{{$est->sitio_web}}" class="a-blue" target="_blank"> <span style="font-size: 14px;"> {{$est->sitio_web}} </span> </a>
                                    </h6>
                                    @endif
                                    @if ($est->instagram)
                                        <h6 class="d-flex align-items-center">
                                            <span style="font-size: 24px; padding-right:10px;"> <i class="fab fa-instagram"></i></span>
                                            <strong> Ig: </strong> <a href="{{$est->instagram}}"  class="a-blue" target="_blank"> <span style="font-size: 14px;"> {{$est->instagram}} </span> </a>
                                        </h6>
                                    @endif
                                    @if ($est->facebook)
                                        <h6 class="d-flex align-items-center">
                                            <span style="font-size: 24px; padding-right:10px;"><i class="fab fa-facebook-square"></i></span>
                                            <strong> Facebook: </strong> <a href="{{$est->facebook}}" class="a-blue" target="_blank"> <span style="font-size: 14px;"> {{$est->facebook}} </span> </a>
                                        </h6>
                                    @endif
                                    @if ($est->horarios_de_atencion)
                                        <h6 class="d-flex align-items-center">
                                            <span style="font-size: 24px; padding-right:10px;"><i class="far fa-clock"></i></span>
                                            <strong> Horarios de atención: </strong> <span style="font-size: 14px;">{{$est->horarios_de_atencion}} </span>
                                        </h6>
                                    @endif
                                </div>
                                {{-- fin info del establecimiento --}}
                            </div>
                        </div>
                        @endif
                    @endforeach
                {{-- </div> --}}





                {{-- <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100"> --}}
                    <h4 class="dark-blue-font pt-2 pb-2 mt-3"  data-aos="zoom-in" data-aos-delay="150">Localidades</h4>
                    @foreach($establecimientos as $est)
                    @if($est->localidad != "Tres Arroyos")
                        <div class="col-lg-12 item-tramite" data-aos="fade-left" data-aos-delay="100">

                            <a href="" >
                                <div id="{{$est->id}}" class="icon-box  div-tramite" data-aos="zoom-in" data-aos-delay="150">
                                    <div class="d-flex align-items-center">
                                        <span class="icon-closed "><i class="fas fa-angle-right pb-2"></i></span>
                                        <span class="icon-open display-none"><i class="fas fa-angle-down"></i></span>
                                        <h4 >{{$est->nombre}}</h4>
                                    </div>

                                </div>
                            </a>
                            <div id="informacion-{{$est->id}}" class="row col-lg-12 informacion-tramite display-none ms-lg-5">
                                {{--  info del establecimiento  --}}
                                @if($est->informacion)
                                    <p  class="font-detail mb-5">{!! $est->informacion !!}</p>
                                @endif
                                {{--  carreras  --}}
                                    @foreach($est->carreras as $carrera)
                                        @if ($carrera->id)
                                        <div  class="col-lg-6 mb-4">
                                            <h4>Propuesta académica </h4>
                                            <div class="ms-2">
                                                @foreach($est->carreras as $carrera)
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
                                                @endforeach
                                            </div>
                                        </div>
                                        @break
                                        @endif
                                    @endforeach
                                {{--  fin carreras  --}}
                                {{-- info del establecimiento --}}
                                <div  class="col-lg-6 ps-lg-5 mb-4">
                                    <h4 class="">Información del establecimiento </h4>
                                    <h6 class="d-flex align-items-center">
                                        <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-map-marker-alt"></i></span>
                                        <strong>Dirección: </strong> <span style="font-size: 14px;"> {{$est->ubicacion}} </span> </h6>
                                    <h6 class="d-flex align-items-center">
                                        <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-at"></i></span>
                                        <strong>Email: </strong> <span style="font-size: 14px;"> {{$est->email}} </span>
                                    </h6>
                                    <h6 class="d-flex align-items-center">
                                        <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-phone"></i></span>
                                        <strong>Contacto: </strong> <span style="font-size: 14px;"> {{$est->contacto}} </span>
                                    </h6>
                                    @if ($est->sitio_web)
                                    <h6 class="d-flex align-items-center">
                                        <span style="font-size: 24px; padding-right:10px;"> <i class="fas fa-mouse-pointer"></i> </span>
                                        <strong>Sitio web: </strong> <a href="{{$est->sitio_web}}" class="a-blue" target="_blank"> <span style="font-size: 14px;"> {{$est->sitio_web}} </span> </a>
                                    </h6>
                                    @endif
                                    @if ($est->instagram)
                                        <h6 class="d-flex align-items-center">
                                            <span style="font-size: 24px; padding-right:10px;"> <i class="fab fa-instagram"></i></span>
                                            <strong> Ig: </strong> <a href="{{$est->instagram}}"  class="a-blue" target="_blank"> <span style="font-size: 14px;"> {{$est->instagram}} </span> </a>
                                        </h6>
                                    @endif
                                    @if ($est->facebook)
                                        <h6 class="d-flex align-items-center">
                                            <span style="font-size: 24px; padding-right:10px;"><i class="fab fa-facebook-square"></i></span>
                                            <strong> Facebook: </strong> <a href="{{$est->facebook}}" class="a-blue" target="_blank"> <span style="font-size: 14px;"> {{$est->facebook}} </span> </a>
                                        </h6>
                                    @endif
                                    @if ($est->horarios_de_atencion)
                                        <h6 class="d-flex align-items-center">
                                            <span style="font-size: 24px; padding-right:10px;"><i class="far fa-clock"></i></span>
                                            <strong> Horarios de atención: </strong> <span style="font-size: 14px;">{{$est->horarios_de_atencion}} </span>
                                        </h6>
                                    @endif
                                </div>
                                {{-- fin info del establecimiento --}}
                            </div>
                        </div>
                        @endif
                    @endforeach
                {{-- </div> --}}









            </div>

        </div>
    </section><!-- End Features Section -->

</main><!-- End #main -->

<!-- Template ocultar-mostrar información JS File -->
<script src="{{ asset('assets/js/hide-show-information.js') }}"></script>

