<div class="table-responsive">
    <table class="table" id="archivos-table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Nombre Agradable</th>
            <th>Seccion Id</th>
            <th>Sub Seccion</th>
            <th colspan="3">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($archivos as $archivos)
            <tr>
                <td>{{ $archivos->nombre }}</td>
            <td>{{ $archivos->nombre_agradable }}</td>
            <td>{{ $archivos->seccion_id }}</td>
            <td>{{ $archivos->sub_seccion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['archivos.destroy', $archivos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{{ route('archivos.show', [$archivos->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a> --}}
                        <a href="{{ route('archivos.edit', [$archivos->id]) }}"
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
