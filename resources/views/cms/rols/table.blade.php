<div class="table-responsive">
    <table class="table" id="rols-table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rols as $rol)
            <tr>
                <td>{{ $rol->name }}</td>

                <td width="120">
                    {!! Form::open(['route' => ['rols.destroy', $rol->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('rols.edit')
                            <a href="{{ route('rols.edit', [$rol->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                        @endcan
                        @can('rols.destroy')
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Seguro que desea eliminar?')"]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
