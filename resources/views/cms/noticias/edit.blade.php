@extends('cms.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Editar Noticia</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($noticia, ['route' => ['noticias.update', $noticia->id], 'method' => 'patch','files' => true]) !!}

            <div class="card-body">
                <div class="row">
                    @include('cms.noticias.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('noticias.index') }}" class="btn btn-default">Cancelar</a>
            </div>
            {!! Form::close() !!}
            <div class="container">

                @include('cms.noticias.imagenes')
            </div>
        </div>
    </div>
@endsection
