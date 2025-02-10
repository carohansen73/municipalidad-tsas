
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
    {!! Form::text('titulo', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'id'=>"descripcion"]) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        //select2
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('#descripcion').summernote({
                tabsize: 2,
                height: 200
            });
        });
        //summernote
    </script>
@endpush

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>



<!-- archivo Field -->
<div class="form-group col-sm-6">
    <p class="mb-2"> <strong> PDF con información o reglamento:  </strong> </p>
    <div class="custom-file">


        {!! Form::label('archivo', 'Cargar archivo',['class'=>'custom-file-label']) !!}
        {!!Form::file('archivo',['class' => 'custom-file-input form-control','accept'=>"application/pdf" ])!!}
        <p class="help-block"> Adjuntar únicamente un PDF con información o reglamentos.</p>

    </div>
</div>

<!-- link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Enlace de inscripción online:') !!}
    {!! Form::text('link', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
    <p class="help-block">Ingresar únicamente el enlace de inscripción online.</p>
</div>

<!-- Img Field -->
<div class="form-group col-sm-12">
    {!! Form::label('img', 'Foto') !!}
    <div class="input-group">
        <span class="input-group-btn">
            <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">Seleccionar</span>
            <input name="img" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file" accept="image/png, image/jpg, image/jpeg, image/jfif" >
        </span>
        @if (isset($convocatorias) && ($convocatorias->img))
            <span class="form-control">{{$convocatorias->img}}</span>
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

@if (isset($convocatorias) && ($convocatorias->img))
<div class="form-group col-sm-12">
    <div class="col-md-6">

        <img src="{{ asset('storage/fdt/' . $convocatorias->img) }}" alt="..." class="thumbnail" width="280" height="320">

    </div>

</div>
@endif
