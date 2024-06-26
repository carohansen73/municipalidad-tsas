<!-- Titulo Field -->
<div class="col-sm-12">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{{ $avisoOficial->titulo }}</p>
</div>

<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $avisoOficial->descripcion }}</p>
</div>

<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Archivo:') !!}
    <p><a href="{{url('/storage/archivos/boletin_oficial/avisos/'.$avisoOficial->nombre)}}" target="_blank" >  {{ $avisoOficial->nombre}} </a></p>
</div>



<!-- Area Field -->
<div class="col-sm-12">
    {!! Form::label('area', 'Area:') !!}
    <p>{{ $avisoOficial->area }}</p>
</div>

<!-- Fecha Field -->
<div class="col-sm-12">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p> {{ \Carbon\Carbon::parse($avisoOficial->fecha)->format('d-m-Y')}} </p>

</div>

