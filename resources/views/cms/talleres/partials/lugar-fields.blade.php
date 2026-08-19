<div class="d-flex justify-content-between align-items-start">
    <h4>Lugar</h4>
    <button type="button" class="btn btn-sm btn-outline-danger btn-remove-lugar" @if ($index === 0) style="display:none" @endif>
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
                <option value="{{ $institucion->id }}">{{ $institucion->nombre }}</option>
            @endforeach
        </select>
    </div>

    {{-- Instructor --}}
    <div class="form-group col-sm-6">
        <label>Instructor:</label>
        <input type="text" name="lugares[{{ $index }}][instructor]" class="form-control" maxlength="255">
    </div>

    {{-- Modalidad --}}
    <div class="form-group col-sm-4">
        <label>Modalidad:</label>
        <select name="lugares[{{ $index }}][modalidad]" class="form-control lugar-modalidad" required>
            @foreach ($modalidades as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>
    </div>

    {{-- Costo (solo aplica si la modalidad es arancelada) --}}
    <div class="form-group col-sm-4 campo-costo">
        <label>Costo:</label>
        <input type="number" name="lugares[{{ $index }}][costo]" class="form-control" min="0" step="0.01">
    </div>

    {{-- Fecha inicio --}}
    <div class="form-group col-sm-2">
        <label>Fecha inicio:</label>
        <input type="date" name="lugares[{{ $index }}][fecha_inicio]" class="form-control">
    </div>

    {{-- Fecha fin --}}
    <div class="form-group col-sm-2">
        <label>Fecha fin:</label>
        <input type="date" name="lugares[{{ $index }}][fecha_fin]" class="form-control">
    </div>

    {{-- Requisitos --}}
    <div class="form-group col-sm-6">
        <label>Requisitos:</label>
        <textarea name="lugares[{{ $index }}][requisitos]" class="form-control" rows="2"></textarea>
    </div>

    {{-- Contacto inscripcion --}}
    <div class="form-group col-sm-6">
        <label>Contacto para inscripción:</label>
        <input type="text" name="lugares[{{ $index }}][contacto_inscripcion]" class="form-control" maxlength="255">
    </div>
</div>

<div class="horarios-container" data-horario-count="1">
    @include('cms.talleres.partials.horario-fields', ['lugarIndex' => $index, 'index' => 0, 'diasSemana' => $diasSemana])
</div>

<button type="button" class="btn btn-sm btn-outline-secondary btn-add-horario">
    <i class="fas fa-plus"></i> Agregar horario
</button>
