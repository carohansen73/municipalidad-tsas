<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area', 'Area:') !!}
    {!!Form::select('area', $areas,null,['class' => 'form-control'])!!}
</div>

<!-- Anio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anio', 'Año:') !!}

    {!!Form::select('anio', $anios,null,['class' => 'form-control'])!!}

</div>

<!-- Periodo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periodo', 'Periodo:') !!}
    {!!Form::select('periodo', $periodos,null,['class' => 'form-control'])!!}
</div>


<!-- Nombre Field -->
<div class="form-group col-sm-12">
<div class="custom-file">
    {!! Form::label('nombre', 'Cargar archivo',['class'=>'custom-file-label']) !!}
    {!!Form::file('nombre',['class' => 'custom-file-input ','accept'=>"application/pdf" ])!!}
</div>
