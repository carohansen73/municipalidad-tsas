
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')




@if(isset($datosSituacion) && (count($datosSituacion['muni']) > 0))
    <section id="secciones-archivos">
        <main  class="margen-top-navbar">
        <div class="container mb-5" data-aos="fade-up">
            <div class="section-title">
                <p>Transparencia fiscal</p>
                <h2>Ley 13.295</h2>
            </div>


            <div class="section-title text-center ln-before">
                <p style="font-size: 24px;">Situacion Económico Financiera</p>
                 <h2>{{$datosSituacion['anio']}}</h2>
            </div>

            <div class="d-flex justify-content-center">
                <nav class="navbar navbar-light bg-light col-lg-6 mb-4">
                    <form class="container-fluid" action="transparencia-fiscal-filtro" method="POST">
                        @csrf
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Busqueda por año</span>
                        <select class="form-select" aria-label="Default select example" name="anio">
                            <option selected><strong>{{$datosSituacion['anio']}}</strong></option>
                            @foreach($datosSituacion['anios'] as $anio)

                            @if($anio != $datosSituacion['anio'])
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


            <div class="row col-lg-12 ">
                {{-- Administracion Central (MUNI)--}}
                <div class="col-lg-6 mb-4">
                    <div class="list-group">
                        <ul class="list-group text-center" >
                            <li class="list-group-item list-group-title" aria-current="true"> {{-- <i class="fas fa-file-download"></i> --}} Administración Central  </li>
                            @foreach ($datosSituacion['muni'] as $muni)
                                <a href="{{url('/storage/archivos/situacion/'.$muni->nombre)}}" target="_blank" class="list-group-item only-item">  {{ $muni->titulo}} </a>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{--Vialidad Rural (vial)--}}
                <div class="col-lg-6 mb-4">
                    <div class="list-group">
                        <ul class="list-group text-center" >
                            <li class="list-group-item list-group-title" aria-current="true"> Dirección de Vialidad Rural  </li>
                            @foreach ($datosSituacion['vial'] as $vial)
                                <a href="{{url('/storage/archivos/situacion/'.$vial->nombre)}}" class="list-group-item only-item" target="_blank">  {{ $vial->titulo}} </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>


            <div class="row col-lg-12 ">

                {{-- Claromecó  (CLARO)--}}
                <div class="col-lg-6 mb-4">
                    <div class="list-group">
                        <ul class="list-group text-center" >
                            <li class="list-group-item list-group-title" aria-current="true"> Claromecó Servicios Turísticos  </li>
                            @foreach ($datosSituacion['claro'] as $claro)
                                <a href="{{url('/storage/archivos/situacion/'.$claro->nombre)}}" target="_blank" class="list-group-item only-item">  {{ $claro->titulo}} </a>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{--Centro de Salud (SALUD)--}}
                <div class="col-lg-6 mb-4">
                    <div class="list-group">
                        <ul class="list-group text-center" >
                            <li class="list-group-item list-group-title" aria-current="true"> Centro Municipal de Salud </li>
                            @foreach ($datosSituacion['salud'] as $salud)
                                <a href="{{url('/storage/archivos/situacion/'.$salud->nombre)}}" target="_blank" class="list-group-item only-item">  {{ $salud->titulo}} </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>




{{--REPORTES ECONOMICO FINANCIERO--}}
        <div class="container" data-aos="fade-up">

            <div class="section-title ln-before text-center" style="padding-bottom:15px;">
                <p style="font-size: 24px;">Reporte Económico Financiero</p>
                <h2>{{$datosSituacion['anio']}}</h2>
            </div>

{{--  Generales  --}}

            <h3 class="blue-font"> Generales</h3>
            <?php $medio=round((count($reportes['generales'])/2));
            $i=1; ?>

            <div class="row col-lg-12">
                <div class="col-md-6 col-sm-6">
                    <ul class="list-group">
                        @if(isset($reportes['generales']) && (count($reportes['generales']) > 0))
                            @foreach ($reportes['generales'] as $reporte)
                                @if ($i==$medio+1)
                                    </ul></div>
                                    <div class="col-md-6 col-sm-6">
                                <ul class="list-group">
                                @endif
                                <li class="list-group-item">
                                    <a href="{{url('/storage/archivos/situacion/'.$reporte->nombre_arch)}}" target="_blank" >{{$reporte->titulo}}</a>
                                </li>
                                <?php $i++;?>
                            @endforeach
                        @else
                            <span class="input-group-addon">No hay datos para el filtro aplicado</span>
                        @endif
                    </ul>
                    <br/><br/>
                </div>
            </div>

            <div class="row col-lg-12 mt-2">
                {{-- Trimestre 1--}}
                <div class="col-lg-6 mb-4">
                    <div class="list-group">
                        <ul class="list-group text-center" >
                            <li class="list-group-item list-group-title" aria-current="true"> {{-- <i class="fas fa-file-download"></i> --}} Primer Trimestre  </li>
                            @if(isset($reportes['trimestre1']) && (count($reportes['trimestre1']) > 0))
                                @foreach ($reportes['trimestre1'] as $reporte)
                                    <a href="{{url('/storage/archivos/situacion/'.$reporte->nombre_arch)}}" target="_blank" class="list-group-item only-item">  {{ $reporte->titulo}} </a>
                                @endforeach
                            @else
                            <li class="list-group-item"> No hay datos para el filtro aplicado </li>
                            @endif
                        </ul>
                    </div>
                </div>
                {{--Trimestre 2 --}}
                <div class="col-lg-6 mb-4">
                    <div class="list-group">
                        <ul class="list-group text-center" >
                            <li class="list-group-item list-group-title" aria-current="true"> Segundo Trimestre  </li>
                            @if(isset($reportes['trimestre2']) && (count($reportes['trimestre1']) > 0))
                                @foreach ($reportes['trimestre2'] as $reporte)
                                    <a href="{{url('/storage/archivos/situacion/'.$reporte->nombre_arch)}}" class="list-group-item only-item" target="_blank">  {{ $reporte->titulo}} </a>
                                @endforeach
                            @else
                            <li class="list-group-item"> No hay datos para el filtro aplicado </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row col-lg-12 mt-2">
                {{-- Trimestre 3  --}}
                <div class="col-lg-6 mb-4">
                    <div class="list-group">
                        <ul class="list-group text-center" >
                            <li class="list-group-item list-group-title" aria-current="true"> Tercer Trimestre </li>
                            @if(isset($reportes['trimestre3']) && (count($reportes['trimestre1']) > 0))
                                @foreach ($reportes['trimestre3'] as $reporte)
                                    <a href="{{url('/storage/archivos/situacion/'.$reporte->nombre_arch)}}" target="_blank" class="list-group-item only-item">  {{ $reporte->titulo}} </a>
                                @endforeach
                            @else
                            <li class="list-group-item"> No hay datos para el filtro aplicado </li>
                            @endif
                        </ul>
                    </div>
                </div>
                {{--  Trimestre 4  --}}
                <div class="col-lg-6 mb-4">
                    <div class="list-group">
                        <ul class="list-group text-center" >
                            <li class="list-group-item list-group-title" aria-current="true"> Cuarto Trimestre</li>
                            @if(isset($reportes['trimestre4']) && (count($reportes['trimestre1']) > 0))
                                @foreach ($reportes['trimestre4'] as $reporte)
                                    <a href="{{url('/storage/archivos/situacion/'.$reporte->nombre_arch)}}" target="_blank" class="list-group-item only-item">  {{ $reporte->titulo}} </a>
                                @endforeach
                            @else
                            <li class="list-group-item"> No hay datos para el filtro aplicado </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        </main>
</section>
@endif
