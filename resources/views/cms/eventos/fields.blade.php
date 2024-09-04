
@push('third_party_stylesheets')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('third_party_scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endpush

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 180,'maxlength' => 180]) !!}
</div>

<!-- Seccion Id Field -->
    <div class="form-group col-sm-6 ps-0">
        {!! Form::label('seccion_id', 'Seccion:') !!}
        {!!Form::select('seccion_id', $secciones,null,['class' => 'form-control '])!!}
    </div>

    <!-- Seccion Id Field -->
    <div class="form-group col-sm-6 ps-0">
        {!! Form::label('categoria_id', 'Categoria:') !!}
        {!!Form::select('categoria_id', $categorias,null,['class' => 'form-control '])!!}
    </div>


<!-- Fecha Inicio Field -->
<div class="row form-group col-sm-12">
    <div class="form-group col-sm-6">
        {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
        {!! Form::text('fecha_inicio', null, ['class' => 'form-control','id'=>'fecha_inicio']) !!}
    </div>

    @push('page_scripts')
        <script type="text/javascript">
            $('#fecha_inicio').datetimepicker({
                format: 'YYYY-MM-DD',
                useCurrent: true,
                sideBySide: true
            })
        </script>
    @endpush

    <!-- Fecha Fin Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
        {!! Form::text('fecha_fin', null, ['class' => 'form-control','id'=>'fecha_fin']) !!}
    </div>

    @push('page_scripts')
        <script type="text/javascript">
            $('#fecha_fin').datetimepicker({
                format: 'YYYY-MM-DD',
                useCurrent: true,
                sideBySide: true
            })
        </script>
    @endpush
</div>


{{-- <div class="form-group col-sm-12">
    <div class="custom-file">
        {!! Form::label('img', 'Cargar imagen:',['class'=>'custom-file-label']) !!}
        {!!Form::file('img',['class' => 'custom-file-input ','id'=>'img'])!!}
    </div>
</div> --}}


<div class="form-group col-sm-12">
    {!! Form::label('img', 'Foto del evento*') !!}
    <div class="input-group">
        <span class="input-group-btn">
            <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">Seleccionar</span>
            <input name="img" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file" accept="image/png, image/jpg, image/jpeg, image/jfif" >
        </span>
        @if (isset($evento) && ($evento->img))
            <span class="form-control">{{$evento->img}}</span>
        @else
            <span class="form-control"></span>
        @endif
    </div>
    <p class="help-block">Los formatos permitidos son jpg, png, jpeg.</p>
    {{-- @if ($errors->has('front_document'))
        <span class="text-danger">
            {{ $errors->first('front_document') }}
        </span>
    @endif            --}}
</div>

@if (isset($evento) && ($evento->img))
<div class="form-group col-sm-12">
    <div class="col-md-6">

        <img src="{{ asset('storage/eventos/' . $evento->img) }}" alt="..." class="thumbnail" width="280" height="210">

    </div>

</div>
@endif

