<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Nombre Agradable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_agradable', 'Nombre Agradable:') !!}
    {!! Form::text('nombre_agradable', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Seccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seccion_id', 'Seccion Id:') !!}
    {!! Form::number('seccion_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Sub Seccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_seccion', 'Sub Seccion:') !!}
    {!! Form::text('sub_seccion', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>