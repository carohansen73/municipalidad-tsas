{{-- Editor de texto --}}
@push('third_party_stylesheets')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" integrity="sha384-Vh3Vqtlg6hMZ+IvHz4CNfftJxpVDzx0goO9b4ECMD15HcLHtoCUUXYgsFrvN+fgn" crossorigin="anonymous" rel="stylesheet">
@endpush

@push('third_party_scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js" integrity="sha384-tBLz28MeJJUXRcXrlNxPzl9V3iBhZz2buE5K37XPFyxvSyt5VgEv9wU6rzrzhsom" crossorigin="anonymous"></script>
@endpush


{{-- Titulo --}}
<div class="form-group col-sm-12">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, [
        'class' => 'form-control',
        'maxlength' => 30
    ]) !!}
</div>

<!-- Descripcion  -->
<div class="form-group col-sm-12 col-lg-12">

    {!! Form::label('descripcion', 'Descripcion:') !!}
    <div class="alert alert-info">
        En este ítem debe cargarse toda la información relacionada a las licitaciones,
        incluyendo: Tipos de licitación(fogones, kioscos, etc.), valores, fechas,etc.
    </div>
    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'id'=>"descripcion"]) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#descripcion').summernote({
                tabsize: 2,
                height: 300
            });

        });
    </script>
@endpush
