
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


<div class="form-group col-sm-12">
    <div class="custom-file">
        {!! Form::label('img', 'Cargar imagen:',['class'=>'custom-file-label']) !!}
        {!!Form::file('img',['class' => 'custom-file-input ','id'=>'img'])!!}
    </div>

</div>
