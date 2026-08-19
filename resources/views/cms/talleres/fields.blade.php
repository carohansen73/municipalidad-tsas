@php
    $modalidades = [
        'gratuita' => 'Gratuita',
        'arancelada' => 'Arancelada',
    ];

    $diasSemana = [
        'lunes' => 'Lunes',
        'martes' => 'Martes',
        'miercoles' => 'Miércoles',
        'jueves' => 'Jueves',
        'viernes' => 'Viernes',
        'sabado' => 'Sábado',
        'domingo' => 'Domingo',
    ];
@endphp

@include('adminlte-templates::common.errors')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="col-sm-12 mb-3">
    <h2>Datos generales</h2>
</div>

{{-- Nombre --}}
<div class="form-group col-sm-8">
    {!! Form::label('nombre', 'Nombre del taller:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
</div>

{{-- Categoria --}}
<div class="form-group col-sm-4">
    {!! Form::label('categoria_id', 'Categoría:') !!}
    {!! Form::select('categoria_id', $categorias, null, [
        'class' => 'form-control',
        'placeholder' => 'Seleccionar...',
    ]) !!}
</div>

{{-- Publico --}}
<div class="form-group col-sm-4">
    {!! Form::label('publico_id', 'Público destinatario:') !!}
    {!! Form::select('publico_id', $publicos, null, [
        'class' => 'form-control',
        'placeholder' => 'Seleccionar...',
    ]) !!}
</div>

{{-- Descripcion --}}
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => 4]) !!}
</div>

<div class="col-sm-12 mb-3">
    <hr>
    <h2>Lugares donde se dicta</h2>
    <p class="text-muted">Cada lugar combina institución, instructor, modalidad y sus propios horarios.</p>
</div>

<div class="col-sm-12">
    <div id="lugares-container">
        <div class="lugar-item card card-secondary mb-3" data-lugar-index="0">
            <div class="card-body">
                @include('cms.talleres.partials.lugar-fields', [
                    'index' => 0,
                    'instituciones' => $instituciones,
                    'modalidades' => $modalidades,
                    'diasSemana' => $diasSemana,
                ])
            </div>
        </div>
    </div>

    <button type="button" id="btn-add-lugar" class="btn btn-outline-primary mb-3">
        <i class="fas fa-plus"></i> Agregar otro lugar
    </button>
</div>

{{-- Template (oculto) para clonar un nuevo lugar --}}
<template id="lugar-template">
    <div class="lugar-item card card-secondary mb-3" data-lugar-index="__LUGAR__">
        <div class="card-body">
            @include('cms.talleres.partials.lugar-fields', [
                'index' => '__LUGAR__',
                'instituciones' => $instituciones,
                'modalidades' => $modalidades,
                'diasSemana' => $diasSemana,
            ])
        </div>
    </div>
</template>

{{-- Template (oculto) para clonar un nuevo horario dentro de un lugar --}}
<template id="horario-template">
    @include('cms.talleres.partials.horario-fields', [
        'lugarIndex' => '__LUGAR__',
        'index' => '__HORARIO__',
        'diasSemana' => $diasSemana,
    ])
</template>

@push('page_scripts')
<script type="text/javascript">
    $(document).ready(function () {
        var lugarIndex = $('#lugares-container .lugar-item').length;

        function toggleCosto($lugarItem) {
            var modalidad = $lugarItem.find('.lugar-modalidad').val();
            var $costo = $lugarItem.find('.campo-costo');

            if (modalidad === 'arancelada') {
                $costo.show();
            } else {
                $costo.hide();
                $costo.find('input').val('');
            }
        }

        // Estado inicial del campo costo en el lugar ya renderizado
        $('#lugares-container .lugar-item').each(function () {
            toggleCosto($(this));
        });

        // Agregar lugar
        $('#btn-add-lugar').on('click', function () {
            var html = $('#lugar-template').html().split('__LUGAR__').join(lugarIndex);
            var $nuevoLugar = $(html);

            $('#lugares-container').append($nuevoLugar);
            toggleCosto($nuevoLugar);

            lugarIndex++;
        });

        // Quitar lugar
        $(document).on('click', '.btn-remove-lugar', function () {
            $(this).closest('.lugar-item').remove();
        });

        // Mostrar/ocultar costo según la modalidad elegida
        $(document).on('change', '.lugar-modalidad', function () {
            toggleCosto($(this).closest('.lugar-item'));
        });

        // Agregar horario dentro de un lugar
        $(document).on('click', '.btn-add-horario', function () {
            var $lugarItem = $(this).closest('.lugar-item');
            var lugarIdx = $lugarItem.data('lugar-index');
            var $horariosContainer = $lugarItem.find('.horarios-container');
            var horarioIndex = $horariosContainer.data('horario-count');

            var html = $('#horario-template').html()
                .split('__LUGAR__').join(lugarIdx)
                .split('__HORARIO__').join(horarioIndex);

            $horariosContainer.append($(html));
            $horariosContainer.data('horario-count', horarioIndex + 1);
        });

        // Quitar horario (siempre debe quedar al menos uno por lugar)
        $(document).on('click', '.btn-remove-horario', function () {
            var $horariosContainer = $(this).closest('.horarios-container');

            if ($horariosContainer.find('.horario-item').length > 1) {
                $(this).closest('.horario-item').remove();
            }
        });
    });
</script>
@endpush
