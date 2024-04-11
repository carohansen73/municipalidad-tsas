@extends('cms.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$title}}</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('seccionInformacions.create') }}">
                        + información/imágenes
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('cms.seccion_informacion.table')

                <div class="card-footer clearfix">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

    @if(isset($seccionInformacions))

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Archivos</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('archivos.create') }}">
                        + archivo
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        @if(isset($archivos) && ( count($archivos) > 0))
            <div class="card">
                <div class="card-body p-0">

                @include('cms.archivos.table')

                    <div class="card-footer clearfix">
                        <div class="float-right">
                        </div>
                    </div>
                </div>

            </div>
        @endif
    </div>
    @endif

@endsection

