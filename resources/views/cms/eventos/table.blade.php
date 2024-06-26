<div class="table-responsive">
    <table class="table" id="eventos-table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Seccion Id</th>
        <th>Img</th>
        <th>Vigente</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($eventos as $evento)
            <tr>
                <td>{{ $evento->nombre }}</td>
            <td>{{ $evento->seccion->nombre }}</td>
            <td>{{ $evento->img }}</td>
            <td>{{ $evento->vigente }}</td>
            <td>{{ \Carbon\Carbon::parse($evento->fecha_inicio)->format('d-m-Y')}}</td>
            <td>{{ \Carbon\Carbon::parse($evento->fecha_fin)->format('d-m-Y')}}</td>
                <td width="120">
                    {!! Form::open(['route' => ['eventos.destroy', $evento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('eventos.show', [$evento->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('eventos.edit', [$evento->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
