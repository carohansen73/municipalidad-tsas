<div class="table-responsive">
    <table class="table" id="grillas-table">
        <thead>
        <tr>
            <th>Titulo</th>
        <th>Descripcion</th>
        <th>Fecha</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($grillas as $grilla)
            <tr>
                <td>{{ $grilla->titulo }}</td>
            <td>{{ $grilla->descripcion }}</td>
            <td>{{ $grilla->fecha }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['grillas.destroy', $grilla->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('grillas.show', [$grilla->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('grillas.edit', [$grilla->id]) }}"
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
