<div class="table-responsive">
    <table class="table" id="instituciones-table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Talleres</th>
            <th width="120">Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($instituciones as $institucion)
            <tr>
                <td>{{ $institucion->nombre }}</td>
                <td>{{ $institucion->direccion ?? '-' }}</td>
                <td>{{ $institucion->telefono ?? '-' }}</td>
                <td>{{ $institucion->actividades_count }}</td>
                <td>
                    {!! Form::open(['route' => ['instituciones.destroy', $institucion], 'method' => 'delete']) !!}
                    <div class="btn-group">
                        @can('instituciones.edit')
                            <a href="{{ route('instituciones.edit', $institucion) }}" class="btn btn-default btn-xs">
                                <i class="far fa-edit"></i>
                            </a>
                        @endcan
                        @can('instituciones.destroy')
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('¿Eliminar esta institución? Esta acción no se puede deshacer.')",
                            ]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
