@php
    $horario = $horario ?? null;

    $horaValor = function ($campo) use ($lugarIndex, $index, $horario) {
        $antiguo = old("lugares.$lugarIndex.horarios.$index.$campo");

        if ($antiguo !== null) {
            return $antiguo;
        }

        $desdeModelo = $horario->{$campo} ?? null;

        return $desdeModelo ? $desdeModelo->format('H:i') : null;
    };

    $diaValor = old("lugares.$lugarIndex.horarios.$index.dia_semana", $horario->dia_semana ?? null);
@endphp

<div class="row horario-item align-items-end" data-horario-index="{{ $index }}">
    @if ($horario)
        <input type="hidden" name="lugares[{{ $lugarIndex }}][horarios][{{ $index }}][id]" value="{{ $horario->id }}">
    @endif

    <div class="form-group col-sm-4">
        <label>Día:</label>
        <select name="lugares[{{ $lugarIndex }}][horarios][{{ $index }}][dia_semana]" class="form-control" required>
            <option value="">Seleccionar...</option>
            @foreach ($diasSemana as $value => $label)
                <option value="{{ $value }}" {{ $diaValor == $value ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-sm-3">
        <label>Desde:</label>
        <input type="time" name="lugares[{{ $lugarIndex }}][horarios][{{ $index }}][hora_inicio]" class="form-control" required value="{{ $horaValor('hora_inicio') }}">
    </div>

    <div class="form-group col-sm-3">
        <label>Hasta:</label>
        <input type="time" name="lugares[{{ $lugarIndex }}][horarios][{{ $index }}][hora_fin]" class="form-control" required value="{{ $horaValor('hora_fin') }}">
    </div>

    <div class="form-group col-sm-2">
        <button type="button" class="btn btn-sm btn-outline-danger btn-remove-horario">
            <i class="fas fa-trash"></i> Quitar
        </button>
    </div>
</div>
