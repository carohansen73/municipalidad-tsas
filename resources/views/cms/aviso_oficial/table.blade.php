<div class="container">
    <div class="table-responsive">
        <table class="table" id="avisoOficial-table">
            <thead>
            <tr>
                <th>Titulo</th>
                <th>Archivo</th>
                <th>Descripcion</th>
                <th>Area</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach($avisoOficials as $avisoOficial)
                    <tr>
                        <td>{{ $avisoOficial->titulo }}</td>
                        <td> <a href="{{url('/storage/archivos/boletin_oficial/avisos/'.$avisoOficial->nombre)}}" target="_blank" >  {{ $avisoOficial->nombre}} </a> </td>

                        <td>{{ $avisoOficial->descripcion }}</td>
                        <td>{{ $avisoOficial->area }}</td>
                        <td>  {{ \Carbon\Carbon::parse($avisoOficial->fecha)->format('d-m-Y')}} </td>
                        <td width="120">
                            {{-- PARA ELIMINAR DESCOMENTAR form::open, Form::button, Form::close --}}
                            {!! Form::open(['route' => ['avisoOficial.destroy', $avisoOficial->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                @can('avisoOficial.edit')
                                    <a href="{{ route('avisoOficial.edit', [$avisoOficial->id]) }}" class='btn btn-default btn-xs'>
                                        <i class="far fa-edit"></i>
                                    </a>
                                @endcan
                                @can('avisoOficial.destroy')
                                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Seguro que quiere eliminar?')"]) !!}
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
            $('#avisoOficial-table').DataTable({
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

