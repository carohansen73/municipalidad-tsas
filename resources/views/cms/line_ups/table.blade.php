<div class="table-responsive">
    <table class="table" id="lineUps-table">
        <thead>
        <tr>
            <th>Artista</th>
        <th>Fecha</th>
        <th>Img</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lineUps as $lineUp)
            <tr>
                <td>{{ $lineUp->artista }}</td>
            <td>{{ $lineUp->fecha }}</td>
            <td>{{ $lineUp->img }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['lineUps.destroy', $lineUp->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lineUps.show', [$lineUp->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('lineUps.edit', [$lineUp->id]) }}"
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
