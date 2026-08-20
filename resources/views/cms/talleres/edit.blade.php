@extends('cms.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Editar Taller</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($taller, ['route' => ['talleres.update', $taller], 'method' => 'PUT', 'files' => true]) !!}

            <div class="card-body">

                <div class="row">
                    @include('cms.talleres.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('talleres.index') }}" class="btn btn-default">Cancelar</a>
            </div>

            {!! Form::close() !!}

        </div>

        @can('talleres.destroy')
            <div class="card border-danger mt-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <strong>Eliminar taller</strong>
                        <p class="text-muted mb-0">Borra el taller junto con todos sus lugares y horarios. No se puede deshacer.</p>
                    </div>
                    {!! Form::open(['route' => ['talleres.destroy', $taller], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="far fa-trash-alt"></i> Eliminar taller', [
                            'type' => 'submit',
                            'class' => 'btn btn-danger',
                            'onclick' => "return confirm('¿Eliminar este taller y todos sus lugares y horarios? Esta acción no se puede deshacer.')",
                        ]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        @endcan
    </div>
@endsection
