@extends('cms.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Situacion Economico Financiera</h1>
                </div>
                @can('situacionFinanciera.create')
                    <div class="col-sm-6">
                        <a class="btn btn-primary float-right"   href="{{ route('situacionFinanciera.create') }}">
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
                @include('cms.situacion_financiera.table')

                <div class="card-footer clearfix">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

