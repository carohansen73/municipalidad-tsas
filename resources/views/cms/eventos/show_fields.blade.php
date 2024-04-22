<!-- Seccion Id Field -->

<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $evento->nombre }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('seccion_id', 'Seccion:') !!}
    <p>{{ $evento->seccion->nombre }}</p>
</div>

<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', 'Img:') !!}
    <p>{{ $evento->img }}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{{ $evento->fecha_inicio }}</p>
</div>

<!-- Fecha Fin Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    <p>{{ $evento->fecha_fin }}</p>
</div>

