@extends('cms.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tickets</h1>
                </div>
                @can('tickets.create')
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('tickets.create') }}">
                        Crear nueva edición
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
                <div class="alert alert-info">
                    <strong>Importante:</strong> solo puede haber <b>una edición activa</b> por año.
                    Al activar una edición, las demás se desactivan automáticamente.
                </div>

                @include('cms.fdt.tickets.table')

                <div class="card-footer clearfix">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

