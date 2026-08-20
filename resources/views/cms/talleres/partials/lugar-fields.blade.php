@php
    $actividad = $actividad ?? null;
    $modoEdicion = $modoEdicion ?? false;
    $deleteUrl = $deleteUrl ?? null;
    $horariosDelLugar = $actividad ? $actividad->horarios : collect();

    $valor = function ($campo, $default = null) use ($index, $actividad) {
        $desdeModelo = $actividad->{$campo} ?? $default;

        return old("lugares.$index.$campo", $desdeModelo);
    };

    // Las fechas vienen del modelo como Carbon, pero old() siempre devuelve string:
    // hay que normalizar ambos casos al formato que espera <input type="date">.
    $fecha = function ($campo) use ($index, $actividad) {
        $antiguo = old("lugares.$index.$campo");

        if ($antiguo !== null) {
            return $antiguo;
        }

        $desdeModelo = $actividad->{$campo} ?? null;

        return $desdeModelo ? $desdeModelo->format('Y-m-d') : null;
    };
@endphp

@if ($actividad)
    <input type="hidden" name="lugares[{{ $index }}][id]" value="{{ $actividad->id }}">
@endif

<div class="d-flex justify-content-between align-items-start">
    <h4>Lugar</h4>
    <button
        type="button"
        class="btn btn-sm btn-outline-danger btn-remove-lugar"
        @if (!$modoEdicion && $index === 0) style="display:none" @endif
        @if ($deleteUrl) data-delete-url="{{ $deleteUrl }}" @endif
    >
        <i class="fas fa-trash"></i> Quitar lugar
    </button>
</div>

<div class="row">
    {{-- Institucion --}}
    <div class="form-group col-sm-6">
        <label>Institución:</label>
        <select name="lugares[{{ $index }}][institucion_id]" class="form-control" required>
            <option value="">Seleccionar...</option>
            @foreach ($instituciones as $institucion)
                <option value="{{ $institucion->id }}" {{ $valor('institucion_id') == $institucion->id ? 'selected' : '' }}>{{ $institucion->nombre }}</option>
            @endforeach
        </select>
    </div>

    {{-- Instructor --}}
    <div class="form-group col-sm-6">
        <label>Instructor:</label>
        <input type="text" name="lugares[{{ $index }}][instructor]" class="form-control" maxlength="255" value="{{ $valor('instructor') }}">
    </div>

    {{-- Modalidad --}}
    <div class="form-group col-sm-4">
        <label>Modalidad:</label>
        <select name="lugares[{{ $index }}][modalidad]" class="form-control lugar-modalidad" required>
            @foreach ($modalidades as $value => $label)
                <option value="{{ $value }}" {{ $valor('modalidad', 'gratuita') == $value ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </select>
    </div>

    {{-- Costo (solo aplica si la modalidad es arancelada) --}}
    <div class="form-group col-sm-4 campo-costo">
        <label>Costo:</label>
        <input type="number" name="lugares[{{ $index }}][costo]" class="form-control" min="0" step="0.01" value="{{ $valor('costo') }}">
    </div>

    {{-- Fecha inicio --}}
    <div class="form-group col-sm-2">
        <label>Fecha inicio:</label>
        <input type="date" name="lugares[{{ $index }}][fecha_inicio]" class="form-control" value="{{ $fecha('fecha_inicio') }}">
    </div>

    {{-- Fecha fin --}}
    <div class="form-group col-sm-2">
        <label>Fecha fin:</label>
        <input type="date" name="lugares[{{ $index }}][fecha_fin]" class="form-control" value="{{ $fecha('fecha_fin') }}">
    </div>

    {{-- Requisitos --}}
    <div class="form-group col-sm-6">
        <label>Requisitos:</label>
        <textarea name="lugares[{{ $index }}][requisitos]" class="form-control" rows="2">{{ $valor('requisitos') }}</textarea>
    </div>

    {{-- Contacto inscripcion --}}
    <div class="form-group col-sm-6">
        <label>Contacto para inscripción:</label>
        <input type="text" name="lugares[{{ $index }}][contacto_inscripcion]" class="form-control" maxlength="255" value="{{ $valor('contacto_inscripcion') }}">
    </div>

    {{-- Imagen --}}
    <div class="form-group col-sm-6">
        <label>Foto (opcional):</label>
        @if ($actividad && $actividad->imagen)
            <div class="mb-2">
                <img src="{{ asset('storage/talleres/actividades/' . $actividad->imagen) }}" alt="Foto actual" style="max-width:150px;max-height:150px;" class="img-thumbnail">
                <p class="help-block mb-0">Subí una nueva solo si querés reemplazarla.</p>
            </div>
        @endif
        <input type="file" name="lugares[{{ $index }}][imagen]" class="form-control-file" accept="image/png, image/jpg, image/jpeg, image/webp">
        <small class="form-text text-muted">Formatos: jpg, png, webp. Se redimensiona automáticamente.</small>
    </div>

    @if ($modoEdicion)
        {{-- Destacado / Activo (solo se pueden tocar desde editar) --}}
        <div class="form-group col-sm-6">
            <label>Estado del lugar:</label>
            <div>
                <label class="mr-3">
                    <input type="hidden" name="lugares[{{ $index }}][activo]" value="0">
                    <input type="checkbox" name="lugares[{{ $index }}][activo]" value="1" {{ $valor('activo', true) ? 'checked' : '' }}>
                    Activo
                </label>
                <label>
                    <input type="hidden" name="lugares[{{ $index }}][destacado]" value="0">
                    <input type="checkbox" name="lugares[{{ $index }}][destacado]" value="1" {{ $valor('destacado', false) ? 'checked' : '' }}>
                    Destacado
                </label>
            </div>
        </div>
    @endif
</div>

<div class="horarios-container" data-horario-count="{{ max($horariosDelLugar->count(), 1) }}">
    @forelse ($horariosDelLugar as $hIndex => $horario)
        @include('cms.talleres.partials.horario-fields', [
            'lugarIndex' => $index,
            'index' => $hIndex,
            'horario' => $horario,
            'diasSemana' => $diasSemana,
        ])
    @empty
        @include('cms.talleres.partials.horario-fields', [
            'lugarIndex' => $index,
            'index' => 0,
            'horario' => null,
            'diasSemana' => $diasSemana,
        ])
    @endforelse
</div>

<button type="button" class="btn btn-sm btn-outline-secondary btn-add-horario">
    <i class="fas fa-plus"></i> Agregar horario
</button>
