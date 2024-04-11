<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $archivos->nombre }}</p>
</div>

<!-- Nombre Agradable Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_agradable', 'Nombre Agradable:') !!}
    <p>{{ $archivos->nombre_agradable }}</p>
</div>

<!-- Seccion Id Field -->
<div class="col-sm-12">
    {!! Form::label('seccion_id', 'Seccion Id:') !!}
    <p>{{ $archivos->seccion_id }}</p>
</div>

<!-- Sub Seccion Field -->
<div class="col-sm-12">
    {!! Form::label('sub_seccion', 'Sub Seccion:') !!}
    <p>{{ $archivos->sub_seccion }}</p>
</div>

