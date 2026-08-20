{{-- Nombre --}}
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre de la institución:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
</div>

{{-- Telefono --}}
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Teléfono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
</div>

{{-- Direccion --}}
<div class="form-group col-sm-12">
    {!! Form::label('direccion', 'Dirección:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
</div>
