<div class="table-responsive  p-2">
    <table class="table" id="boletinOficial-table">
        <thead>
            <tr>
                <th>Ord</th>
                <th>Titulo</th>
                <th>Archivo</th>
                <th>Descripcion</th>
                {{-- <th>Tipo</th> --}}
                <th>Fecha</th>
                {{-- <th>Anio</th> --}}
                <th>Publica</th>

                <th>Acciones</th>
            </tr>
        </thead>
        <tbody >
            @foreach($boletinOficials as $boletinOficial)
                <tr >
                    <td class="text-center">{{ $boletinOficial->orden }}</td>
                    <td class="text-center">{{ $boletinOficial->titulo }}</td>
                    <td> <a href="{{url('/storage/archivos/boletin_oficial/'.$boletinOficial->tipo.'/'.$boletinOficial->anio.'/'.$boletinOficial->nombre)}}" target="_blank"> {{ $boletinOficial->nombre }} </a></td>
                    <td>{{ $boletinOficial->descripcion }}</td>
                    <td class="text-center">{{ $boletinOficial->mes }}/{{ $boletinOficial->anio }}</td>
                    <td class="text-center">
                        @if ($boletinOficial->publica)
                            <i class="far fa-check-circle text-success"></i>
                        @endif
                    </td>

                        <td class="text-center" width="120">
                            {!! Form::open(['route' => ['boletinOficial.destroy', $boletinOficial->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                @can('boletinOficial.edit')
                                    <a href="{{ route('boletinOficial.edit', [$boletinOficial->id]) }}" class='btn btn-default btn-xs'>
                                        <i class="far fa-edit"></i>
                                    </a>
                                @endcan
                                @can('boletinOficial.destroy')
                                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                @endcan
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@push('page_scripts')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#boletinOficial-table').DataTable({
                "language":{
                    "search":"Buscador:",
                    "emptyTable":"No se encontraron resultados",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty":"Mostrando 0 a 0 de 0 miembros",
                    "infoFiltered":"(Filtrado de _MAX_ total miembros)",
                    "infoPostFix":"",
                    "Thousands":",",
                    "lengthMenu":"Mostrar _MENU_ entradas",
                    "loadingRecords":"Cargando...",
                    "processing":"Procesando...",
                    'zeroRecords':"No se encontraron resultados",
                    "paginate":{
                        "first":"Primero",
                        "last":"Ultimo",
                        "next":"Siguiente",
                        "previous":"Anterior"
                    }
                }
            });
        } );
    </script>
@endpush

