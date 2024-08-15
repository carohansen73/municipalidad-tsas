<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>
<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>
<!-- mail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Mail:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<!-- rol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rol', 'Rol:') !!}

    {!!Form::select('rol', $rols,null,['class' => 'form-control'])!!}

</div>

<!-- password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Contraseña:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<!-- password Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('password_confirmation', 'Retype password:') !!}
    {!! Form::text('password_confirmation', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div> --}}


