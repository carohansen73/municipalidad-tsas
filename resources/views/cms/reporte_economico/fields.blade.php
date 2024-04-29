<!-- Titulo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Periodo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periodo', 'Periodo:') !!}
    {!! Form::select('periodo',$periodos, null, ['class' => 'form-control']) !!}
</div>

<!-- Anio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anio', 'Anio:') !!}
    {!! Form::select('anio', $anios,null, ['class' => 'form-control']) !!}

</div>

<!-- Sector Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sector', 'Sector:') !!}
    {!! Form::select('sector',$areas, null, ['class' => 'form-control']) !!}
</div>

<!-- Archivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    <div div class="custom-file">
        {!! Form::label('nombre_arch', 'cargar archivo:',['class'=>'custom-file-label']) !!}
        {!! Form::file('nombre_arch',['class' => 'custom-file-input ','accept'=>"application/pdf" ]) !!}
    </div>
</div>

