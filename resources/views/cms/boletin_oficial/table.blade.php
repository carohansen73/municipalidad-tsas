<div class="container">
    <div class="table-responsive">
        <table class="table" id="boletinOficial-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Titulo</th>
                    <th>Tipo</th>
                    <th>Anio</th>
                    <th>Orden</th>
                    <th>Publica</th>
                    <th>Mes</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($boletinOficials as $boletinOficial)
                    <tr>
                        <td>{{ $boletinOficial->nombre }}</td>
                        <td>{{ $boletinOficial->descripcion }}</td>
                        <td>{{ $boletinOficial->titulo }}</td>
                        <td>{{ $boletinOficial->tipo }}</td>
                        <td>{{ $boletinOficial->anio }}</td>
                        <td>{{ $boletinOficial->orden }}</td>
                        <td>{{ $boletinOficial->publica }}</td>
                        <td>{{ $boletinOficial->mes }}</td>
                        <td width="120">
                            {!! Form::open(['route' => ['boletinOficial.destroy', $boletinOficial->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('boletinOficial.show', [$boletinOficial->id]) }}"
                                class='btn btn-default btn-xs'>
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('boletinOficial.edit', [$boletinOficial->id]) }}"
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

