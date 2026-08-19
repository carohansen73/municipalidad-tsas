<div class="row horario-item align-items-end" data-horario-index="{{ $index }}">
    <div class="form-group col-sm-4">
        <label>Día:</label>
        <select name="lugares[{{ $lugarIndex }}][horarios][{{ $index }}][dia_semana]" class="form-control" required>
            <option value="">Seleccionar...</option>
            @foreach ($diasSemana as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-sm-3">
        <label>Desde:</label>
        <input type="time" name="lugares[{{ $lugarIndex }}][horarios][{{ $index }}][hora_inicio]" class="form-control" required>
    </div>

    <div class="form-group col-sm-3">
        <label>Hasta:</label>
        <input type="time" name="lugares[{{ $lugarIndex }}][horarios][{{ $index }}][hora_fin]" class="form-control" required>
    </div>

    <div class="form-group col-sm-2">
        <button type="button" class="btn btn-sm btn-outline-danger btn-remove-horario">
            <i class="fas fa-trash"></i> Quitar
        </button>
    </div>
</div>
