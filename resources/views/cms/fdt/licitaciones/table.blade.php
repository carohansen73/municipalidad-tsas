<div class="table-responsive">
    <table class="table" id="tickets-table">
        <thead>
        <tr>
            <th>Titulo</th>
            <th>Estado</th>
            <th>Archivos</th>
            <th colspan="3">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($licitaciones as $licitacion)
            <tr>
                <td>{{ $licitacion->titulo }}</td>
                <td>
                    @can('licitaciones.destroy')
                    <form action="{{ route('licitaciones.activar', $licitacion) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="custom-control custom-switch">
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="activar-{{ $licitacion->id }}"
                                    onchange="this.form.submit()"
                                    {{ $licitacion->activa ? 'checked' : '' }}
                                >
                                <label class="custom-control-label"
                                    for="activar-{{ $licitacion->id }}">
                                </label>
                            </div>
                        </form>
                    @endcan
                </td>
                <td>{!! $licitacion->archivos_count !!}</td>
                <td width="120">
                    @can('licitaciones.edit')
                        <div class='btn-group'>
                            <a href="{{ route('licitaciones.edit', [$licitacion->id]) }}"
                            class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                        </div>
                    @endcan

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
