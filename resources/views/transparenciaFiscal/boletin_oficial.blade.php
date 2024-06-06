@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')

{{-- CARDS CON DIFERENTES ENTIDADES --}}

    <main id="main" class="margen-top-navbar">

        @if(isset($items) && count($items) > 0)
            {{-- 4 cards avisos-decretos-ordenanzas-resoluciones --}}
            <section class="team">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <p>Boletin oficial</p>
                    </div>
                    <p>En esta sección se publican los Avisos, Resoluciones, Decretos y Ordenanzas Municipales, con fines informativos. </p>
                    <div class="row d-flex justify-content-center">
                        @foreach($items as $item)
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4 card-icono">
                                <div class="member member-7" data-aos="fade-up" data-aos-delay="100" style="border: 2px solid #eeeeee;">
                                    <div class=" d-flex align-items-stretch justify-content-center p-3">
                                        <i class='{{$item["icono"]}}'></i>
                                    </div>
                                    <div class="card-icono-info d-flex align-items-stretch justify-content-center">
                                        <h4>{{$item['nombre']}}</h4>
                                        {{-- <span>Chief Executive Officer</span> --}}
                                    </div>
                                    <div class="d-flex align-items-stretch justify-content-center p-4 card-ver-mas">
                                        <a class="ver-mas-btn" href="{{$item['slug']}}">Ver</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        {{-- DECRETOS Y RESOLUCIONES , FILTRO DE BUSQUEDA Y RESULTADOS--}}

        @if(isset($tipo) && isset($filtroDeBusqueda))  {{--Filtro de Busqueda--}}
        <section class="team pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-title text-center ln-before">
                    <p style="font-size: 24px;">{{$tipo}}</p>
                    <h2> Boletin oficial</h2>
                </div>


                <div class="d-flex justify-content-center">

                    <nav class="navbar navbar-light bg-light col-lg-6 mb-4">
                        <form class="container-fluid" action="/filtro-boletin-oficial/{{$tipo}}" method="POST">
                            @csrf
                            {{--MES--}}
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Mes</span>
                                <select class="form-select" aria-label="Default select example" name="mes">
                                    <option selected><strong>{{$filtroDeBusqueda['mes']}}</strong></option>
                                    @foreach($filtroDeBusqueda['meses'] as $mes)

                                        @if($mes != $filtroDeBusqueda['mes'])
                                            <option value="{{$mes}}">{{$mes}}</option>
                                        @endif

                                    @endforeach
                                </select>


                                <span class="input-group-text" id="basic-addon1">Año</span>
                                <select class="form-select" aria-label="Default select example" name="anio">
                                    <option selected><strong>{{$filtroDeBusqueda['anio']}}</strong></option>
                                    @foreach($filtroDeBusqueda['anios'] as $anio)

                                        @if($anio != $filtroDeBusqueda['anio'])
                                            <option value="{{$anio}}">{{$anio}}</option>
                                        @endif

                                    @endforeach
                                </select>
                                {{-- <input type="select" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> --}}
                                <button class="btn btn-outline-primary" type="submit">Buscar</button>
                            </div>
                        </form>
                    </nav>
                </div>


            </div>
        </section>
    @endif

    @if(isset($boletinOficial) && count($boletinOficial) > 0)
    <div class="container" data-aos="fade-up">
        @include('transparenciaFiscal.archivos')
    </div>
    @endif

{{-- AVISOS OFICIALES -> MUERSTRA SOLO LOS AVISOS (NO BUSQUEDA)--}}



    </main><!-- End #main -->




























