
@push('third_party_stylesheets')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('third_party_scripts')

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endpush

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control','maxlength' => 180,'maxlength' => 180]) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control','id'=>"descripcion"]) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
        //select2
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('#descripcion').summernote({
                tabsize: 2,
                height: 300
            });
        });
        //summernote

    </script>
@endpush

<!-- Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categorias', 'Categoria:') !!}

    {!!Form::select('categorias[]', $categorias,null,['class' => 'form-control js-example-basic-multiple','id'=>'categorias[]', 'multiple'=>"multiple"])!!}
</div>


<!-- Publicada Field -->
<div class="form-group col-sm-3">
    <div class="form-check">
        {!! Form::hidden('publicada', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('publicada', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('publicada', 'Publicada', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Destacada Field -->
<div class="form-group col-sm-3">
    <div class="form-check">
        {!! Form::hidden('destacada', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('destacada', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('destacada', 'Destacada', ['class' => 'form-check-label']) !!}
    </div>
</div>





