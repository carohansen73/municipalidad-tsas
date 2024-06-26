
<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control','maxlength' => 265,'maxlength' => 265]) !!}
</div>

<!-- Orden Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orden', 'Orden:') !!}
    {!! Form::number('orden', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::select('tipo',$tipos, null, ['class' => 'form-control']) !!}
</div>

<!-- Anio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anio', 'Anio:') !!}
    {!! Form::select('anio',$anios, null, ['class' => 'form-control']) !!}
</div>

<!-- Mes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mes', 'Mes:') !!}
    {!! Form::select('mes',$meses, null, ['class' => 'form-control']) !!}
</div>


@if(!isset($boletinOficial))
    <!-- Archivo (nombre Field) -->
    <div class="form-group col-sm-10">
        {!! Form::label('nombre', ' Archivo') !!}
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">Seleccionar</span>
                <input name="nombre" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;"  accept="application/pdf" type="file" required>
            </span>
            @if (isset($boletinOficial) && ($boletinOficial->nombre))
                <span class="form-control">{{$boletinOficial->nombre}}</span>
            @else
                <span class="form-control"></span>
            @endif

        </div>
        <p class="help-block">El formato permitido es pdf.</p>
    </div>

    <div class="form-group col-sm-2 mt-lg-5">
        @else
        <div class="form-group col-sm-2">
@endif

<!-- Publica Field -->

    <div class="form-check">
        {!! Form::hidden('publica', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('publica', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('publica', 'Publica', ['class' => 'form-check-label']) !!}
    </div>
</div>

