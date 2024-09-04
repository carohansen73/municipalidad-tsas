<div class="table-responsive p-2">
    <table id="eventos-table" class="table" >
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Seccion Id</th>
        <th>Img</th>
        <th>Vigente</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
            <th colspan="3">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($eventos as $evento)
            <tr>
                <td>{{ $evento->nombre }}</td>
            <td>{{ $evento->seccion->nombre }}</td>
            <td>{{ $evento->img }}</td>
            <td>{{ $evento->vigente }}</td>
            <td>{{ \Carbon\Carbon::parse($evento->fecha_inicio)->format('Y-m-d')}}</td>
            <td>{{ \Carbon\Carbon::parse($evento->fecha_fin)->format('Y-m-d')}}</td>
                <td width="120">
                    {!! Form::open(['route' => ['eventos.destroy', $evento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('eventos.edit')
                            <a href="{{ route('eventos.edit', [$evento->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                        @endcan
                        @can('eventos.destroy')
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

@push('page_scripts')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#eventos-table').DataTable({
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
