<div class="table-responsive">
    <table class="table" id="talleres-table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Público</th>
            <th>Lugares</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        @foreach($talleres as $taller)
            <tr>
                <td>{{ $taller->nombre }}</td>
                <td>{{ $taller->categoria->nombre ?? '-' }}</td>
                <td>{{ $taller->publico->nombre ?? '-' }}</td>
                <td>{{ $taller->actividades_count }}</td>
                <td>
                    @if ($taller->activo)
                        <span class="badge badge-success">Activo</span>
                    @else
                        <span class="badge badge-secondary">Inactivo</span>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
