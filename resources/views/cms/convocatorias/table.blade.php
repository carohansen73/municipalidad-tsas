<div class="table-responsive">
    <table class="table" id="convocatorias-table">
        <thead>
        <tr>
            <th>Titulo</th>
        <th>Descripcion</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Img</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($convocatorias as $convocatorias)
            <tr>
                <td>{{ $convocatorias->titulo }}</td>
            <td>{{ $convocatorias->descripcion }}</td>
            <td>{{ $convocatorias->telefono }}</td>
            <td>{{ $convocatorias->email }}</td>
            <td>{{ $convocatorias->img }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['convocatorias.destroy', $convocatorias->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('convocatorias.show', [$convocatorias->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('convocatorias.edit', [$convocatorias->id]) }}"
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
