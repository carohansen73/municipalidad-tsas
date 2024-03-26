<!-- Titulo Field -->
<div class="col-sm-12">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{{ $noticia->titulo }}</p>
    <p>{{ $noticia->categorias }}</p>
</div>

<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $noticia->descripcion }}</p>
</div>

<!-- Fecha Field -->
<div class="col-sm-12">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $noticia->fecha }}</p>
</div>

<!-- Categoria Field -->
<div class="col-sm-12">
    {!! Form::label('categoria', 'Categoria:') !!}
    <p>{{ $noticia->categoria }}</p>
</div>

<!-- Publicada Field -->
<div class="col-sm-12">
    {!! Form::label('publicada', 'Publicada:') !!}
    <p>{{ $noticia->publicada }}</p>
</div>

<!-- Destacada Field -->
<div class="col-sm-12">
    {!! Form::label('destacada', 'Destacada:') !!}
    <p>{{ $noticia->destacada }}</p>
</div>

<!-- Pathname Field -->
<div class="col-sm-12">
    {!! Form::label('pathname', 'Pathname:') !!}
    <p>{{ $noticia->pathname }}</p>
</div>

<!-- Usuario Id Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    <p>{{ $noticia->usuario_id }}</p>
</div>

