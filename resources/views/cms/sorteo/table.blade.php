<div class="table-responsive p-2">
    <table  id="sorteo-table" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nº inscripción</th>
                <th>Nombre</th>
                <th>Area</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inscriptos as $inscripto)
                <tr>
                    <td>{{ $inscripto->numero_inscripcion }}</td>
                    <td>
                        {{ $inscripto->empleado->nombre }}
                    </td>
                    <td>
                        {{ $inscripto->empleado->area }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@push('page_scripts')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#sorteo-table').DataTable({
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
