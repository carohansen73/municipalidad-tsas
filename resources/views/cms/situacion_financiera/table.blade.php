<div class="container">
    <div class="table-responsive">
        <table class="table table-striped" id="situacionFinanciera-table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Area</th>
                <th>Anio</th>
                <th>Periodo</th>
                <th>Titulo</th>
                <th >Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($situacionFinancieras as $situacionFinanciera)
                <tr>
                    <td>{{ $situacionFinanciera->nombre }}</td>
                    <td>{{ $situacionFinanciera->area }}</td>
                    <td>{{ $situacionFinanciera->anio }}</td>
                    <td>{{ $situacionFinanciera->periodo }}</td>
                    <td>{{ $situacionFinanciera->titulo }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['situacionFinanciera.destroy', $situacionFinanciera->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('situacionFinancieras.show', [$situacionFinanciera->id]) }}"
                            class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('situacionFinanciera.edit', [$situacionFinanciera->id]) }}"
                            class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Seguro que quiere eliminar el archivo?')"]) !!}
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
            $('#situacionFinanciera-table').DataTable({
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
