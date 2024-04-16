@if(isset($seccionInformacions))
    <div class="table-responsive">
        <table class="table" id="seccionInformacions-table">
            <thead>
            <tr>
                <th>Sección</th>
                <th>Titulo</th>
                <th>Informacion</th>

        {{-- <th>Img 3</th>
            <th>Img 4</th> --}}
                <th colspan="3">Accion</th>
            </tr>
            </thead>
            <tbody>
            @foreach($seccionInformacions as $seccionInformacion)
                <tr>
                    <td>{{ $seccionInformacion->seccion->nombre }}</td>
                <td>{{ $seccionInformacion->titulo }}</td>
                <td>{{ $seccionInformacion->informacion }}</td>

            {{--}} <td>{{ $seccionInformacion->img_3 }}</td>
                <td>{{ $seccionInformacion->img_4 }}</td> --}}
                    <td width="120">
                        {!! Form::open(['route' => ['seccionInformacions.destroy', $seccionInformacion->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('seccionInformacions.show', [$seccionInformacion->id]) }}"
                            class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('seccionInformacions.edit', [$seccionInformacion->id]) }}"
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
@else

    <div class="table-responsive">
        <table class="table" id="seccionInformacions-table">
            <thead>
            <tr>
                <th>Sector</th>


                <th colspan="3">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($secciones as $seccion)
                <tr>
                    <td> <a href="{{ route('seccionInformacions.indexSections', [$seccion->nombre]) }}"> {{ $seccion->nombre }}</a></td>

                    <td width="120">
                        {{-- {!! Form::open(['route' => ['seccionInformacions.destroy', $seccionInformacion->id], 'method' => 'delete']) !!} --}}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('seccionInformacions.show', [$seccionInformacion->id]) }}"
                            class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('seccionInformacions.indexSections', [$seccion->nombre]) }}"
                            class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {{-- {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endif
