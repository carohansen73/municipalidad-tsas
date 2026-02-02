{{-- ================= ARCHIVOS ================= --}}
<hr>

<div class="card mt-4">
    <div class="card-header">
        <h3 >Archivos / Reglamentos</h3>
    </div>

    <div class="card-body">

        {{-- FORMULARIO PARA AGREGAR ARCHIVO --}}
        <form
            action="{{ route('licitaciones.archivos.store', $licitacion->id) }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf

            <div class="row">
                <div class="col-md-4">
                    <label>Título del archivo</label>
                    <input
                        type="text"
                        name="titulo"
                        class="form-control"
                        maxlength="30"
                        required
                    >
                </div>

                <div class="col-md-6">
                    <label>Archivo (PDF)</label>
                    <input
                        type="file"
                        name="archivo"
                        class="form-control"
                        required
                    >
                </div>

                <div class="col-md-2 d-flex align-items-end">
                    <button class="btn btn-primary w-100">
                        Agregar
                    </button>
                </div>
            </div>
        </form>

        {{-- LISTADO DE ARCHIVOS --}}
        @if($licitacion->archivos->count())
            <table class="table table-sm mt-4">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Archivo</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($licitacion->archivos as $archivo)
                        <tr>
                            <td>{{ $archivo->titulo }}</td>
                            <td>
                                <a href="{{ asset('storage/'.$archivo->archivo) }}"
                                   target="_blank">
                                    Ver archivo
                                </a>
                            </td>
                            <td>
                                {{ $archivo->activa ? 'Activo' : 'Inactivo' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-muted mt-3">
                No hay archivos cargados para esta licitación.
            </p>
        @endif

    </div>
</div>
