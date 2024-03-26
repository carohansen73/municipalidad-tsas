<div class="table-responsive">
    <table class="table" id="noticias-table">
        <thead>
        <tr>
            <th>Titulo</th>
            <th>Fecha</th>
            <th>Categorias</th>
            <th>Publicada</th>
            <th>Destacada</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($noticias as $noticia)
            <tr>
                <td>{{ $noticia->titulo }}</td>

            <td>{{ $noticia->fecha }}</td>
            <td>
                @foreach ($noticia->categorias as $categoria )
                    {{$categoria->nombre}}
                @endforeach
            </td>
            <td>{{ $noticia->publicada }}</td>
            <td>{{ $noticia->destacada }}</td>

             <td width="120">
                    {!! Form::open(['route' => ['noticias.destroy', $noticia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('noticias.show', [$noticia->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('noticias.edit', [$noticia->id]) }}"
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
