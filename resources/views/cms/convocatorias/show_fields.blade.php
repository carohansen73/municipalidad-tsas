<!-- Titulo Field -->
<div class="col-sm-12">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{{ $convocatorias->titulo }}</p>
</div>

<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $convocatorias->descripcion }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $convocatorias->telefono }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $convocatorias->email }}</p>
</div>

<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', 'Img:') !!}
    <p>{{ $convocatorias->img }}</p>
</div>

