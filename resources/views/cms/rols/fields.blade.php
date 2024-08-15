<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Guard Name Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('guard_name', 'Guard Name:') !!}
    {!! Form::text('guard_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> --}}
<div class="form-group col-sm-12">

    <h1>lista de permisos</h1>
</div>

@foreach ($permisos as $permiso)

{{-- <div class="form-group col-sm-3">
    {!! Form::label('name', 'descripcion:') !!}
    {!! Form::checkbox('permission[]',$permiso->id, null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Destacada Field -->
<div class="form-group col-sm-3">
    <div class="form-check">

        {!! Form::checkbox('permissions[]',$permiso->id, null, ['class' => 'form-check-input']) !!}
        {!! Form::label('permissions', $permiso->descripcion, ['class' => 'form-check-label']) !!}
    </div>
</div>

@endforeach
