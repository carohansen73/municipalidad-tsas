<div class="container">
<div class="table-responsive ">
    <table  id="noticias-table" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <th>Fecha</th>
            <th>Titulo</th>

            <th>Categorias</th>
            <th>Publicada</th>
            <th>Destacada</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
            @foreach($noticias as $noticia)
            <tr>
                <td>{{ \Carbon\Carbon::parse($noticia->fecha)->format('Y-m-d')}}</td>
               <td>{{ $noticia->titulo }}</td>


                <td>
                    @foreach ($noticia->categorias as $categoria )
                        {{$categoria->nombre}}
                    @endforeach
                </td>
                <td class="text-center">
                    @if ($noticia->publicada)
                        <i class="far fa-check-circle text-success"></i>
                    @endif
                </td>
                <td class="text-center">
                    @if ($noticia->destacada)
                        <i class="far fa-check-circle text-success"></i>
                    @endif
                </td>


                <td width="120">
                        {!! Form::open(['route' => ['noticias.destroy', $noticia->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>

                            <a href="{{ route('noticias.edit', [$noticia->id]) }}"
                            class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro que desea eliminar?')"]) !!}
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
            $('#noticias-table').DataTable({
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
