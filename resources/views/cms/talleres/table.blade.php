<div class="table-responsive">
    <table class="table" id="talleres-table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Público</th>
            <th>Lugares</th>
            <th>Estado</th>
            <th width="120">Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($talleres as $taller)
            <tr>
                <td>{{ $taller->nombre }}</td>
                <td>{{ $taller->categoria->nombre ?? '-' }}</td>
                <td>{{ $taller->publico->nombre ?? '-' }}</td>
                <td>{{ $taller->actividades_count }}</td>
                <td>
                    @if ($taller->activo)
                        <span class="badge badge-success">Activo</span>
                    @else
                        <span class="badge badge-secondary">Inactivo</span>
                    @endif
                </td>
                <td>
                    {!! Form::open(['route' => ['talleres.destroy', $taller], 'method' => 'delete']) !!}
                    <div class="btn-group">
                        @can('talleres.edit')
                            <a href="{{ route('talleres.edit', $taller) }}" class="btn btn-default btn-xs">
                                <i class="far fa-edit"></i>
                            </a>
                        @endcan
                        @can('talleres.destroy')
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('¿Eliminar este taller y todos sus lugares y horarios? Esta acción no se puede deshacer.')",
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
