<div class="table-responsive  p-2">
    <table class="table" id="reporteEconomico-table">
        <thead>
        <tr>
            <th>Titulo</th>
        <th>Periodo</th>
        <th>Anio</th>
        <th>Sector</th>
        <th >Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reporteEconomicos as $reporteEconomico)
            <tr>
                <td>{{ $reporteEconomico->titulo }}</td>
            <td>{{ $reporteEconomico->periodo }}</td>
            <td>{{ $reporteEconomico->anio }}</td>
            <td>{{ $reporteEconomico->sector }}</td>
            <td width="120">
                    {!! Form::open(['route' => ['reporteEconomico.destroy', $reporteEconomico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                    {{--  <a href="{{ route('reporteEconomico.show', [$reporteEconomico->id]) }}"
                        class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a> --}}
                        <a href="{{ route('reporteEconomico.edit', [$reporteEconomico->id]) }}"
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

@push('page_scripts')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#reporteEconomico-table').DataTable({
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
