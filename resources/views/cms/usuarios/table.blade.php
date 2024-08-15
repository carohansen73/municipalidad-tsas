<div class="container">
    <div class="table-responsive">
        <table class="table table-striped" id="situacionFinanciera-table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido </th>
                <th>Email</th>
                <th>Rol</th>
                <th >Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $user)
                <tr>
                    <td>{{ $user->nombre }}</td>
                    <td>{{ $user->apellido }}</td>
                    <td>{{ $user->email }}</td>

                    <td>
                    @if (count($user->getRoleNames())>0)
                    {{$user->getRoleNames()[0]}}

                    @endif

                    </td>

                    <td width="120">
                        {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('situacionFinancieras.show', [$situacionFinanciera->id]) }}"
                            class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            @can('user.edit')
                                <a href="{{ route('user.edit', [$user->id]) }}" class='btn btn-default btn-xs'>
                                    <i class="far fa-edit"></i>
                                </a>
                            @endcan
                            @can('user.destroy')
                                {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Seguro que quiere eliminar el usuario?')"]) !!}
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
