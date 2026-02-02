@extends('cms.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Editar Licitación</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

           {!! Form::model($licitacion, [
                'route' => ['licitaciones.update', $licitacion],
                'method' => 'patch',
                'files' => true
            ]) !!}

            <div class="card-body">
                <div class="row">
                    @include('cms.fdt.licitaciones.fields')

                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('licitaciones.index') }}" class="btn btn-default">Cancelar</a>
            </div>

            {!! Form::close() !!}




        </div>

         {{-- <div class="card"> --}}
             @include('cms.fdt.licitaciones.archivos')
         {{-- </div> --}}


    </div>
@endsection
