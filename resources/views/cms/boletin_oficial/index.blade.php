@extends('cms.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @if(isset($template) && $template == 'filtro')
                        <h1>Filtro de Busqueda - Boletin Oficial</h1>
                    @else
                        <h1>Boletin Oficial</h1>
                    @endif
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('boletinOficial.create') }}">
                       Agregar
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
                @if(isset($template) && $template == 'filtro')


                    {{-- {!! Form::open( ['route' => ['boletinOficial.indexFiltered']]) !!} --}}
                    <div class="card-body">
                        <div class="row">
                            @include('cms.boletin_oficial.index_filtro')
                        </div>
                    </div>

                    {{-- <div class="card-footer">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('eventos.index') }}" class="btn btn-default">Cancel</a>
                    </div>

                    {!! Form::close() !!} --}}


                @else
                    @include('cms.boletin_oficial.table')
                @endif


                <div class="card-footer clearfix">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

