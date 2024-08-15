@extends('cms.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reportes Economicos</h1>
                </div>
                @can('reporteEconomico.create')
                    <div class="col-sm-6">
                        <a class="btn btn-primary float-right" href="{{ route('reporteEconomico.create') }}">
                            Agregar
                        </a>
                    </div>
                @endcan
        </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('cms.reporte_economico.table')

                <div class="card-footer clearfix">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

