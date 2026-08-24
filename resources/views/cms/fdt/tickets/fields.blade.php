{{-- Editor de texto --}}
@push('third_party_stylesheets')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" integrity="sha384-Vh3Vqtlg6hMZ+IvHz4CNfftJxpVDzx0goO9b4ECMD15HcLHtoCUUXYgsFrvN+fgn" crossorigin="anonymous" rel="stylesheet">
@endpush

@push('third_party_scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js" integrity="sha384-tBLz28MeJJUXRcXrlNxPzl9V3iBhZz2buE5K37XPFyxvSyt5VgEv9wU6rzrzhsom" crossorigin="anonymous"></script>
@endpush

@push('page_css')
<style>
.bootstrap-datetimepicker-widget {
    color: #000;
}
</style>
@endpush


{{-- Los errores ya se muestran una vez en create.blade.php / edit.blade.php --}}

<div class="col-sm-12 mb-3">
    <h2> General </h2>
</div>

{{-- Año de la edición --}}
<div class="form-group col-sm-4">
    {!! Form::label('edicion_anio', 'Año de la edición:') !!}
    {!! Form::number('edicion_anio', null, [
        'class' => 'form-control',
        'min' => 2000,
        'max' => date('Y') + 1
    ]) !!}
</div>

{{-- Activa --}}
<div class="form-group col-sm-4">
    {!! Form::label('activa', 'Edición activa:') !!}
    <div>
        {!! Form::hidden('activa', 0) !!}
        {!! Form::checkbox('activa', 1, null) !!} Activa
    </div>
</div>

<!-- Descripcion  -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'id'=>"descripcion"]) !!}
</div>



<div class="col-sm-12 mb-3">
    <hr>
    <h2> Venta Presencial </h2>
</div>

{{-- Estado venta presencial --}}
<div class="form-group col-sm-6">
    {!! Form::label('estado_venta_presencial', 'Estado venta presencial:') !!}
    {!! Form::select(
        'estado_venta_presencial',
        [
            'proximamente' => 'Próximamente',
            'activa' => 'Activa',
            'finalizada' => 'Finalizada'
        ],
        null,
        ['class' => 'form-control']
    ) !!}
</div>

{{-- Fecha inicio presencial --}}
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio_presencial', 'Fecha inicio venta presencial:') !!}
    {!! Form::text('fecha_inicio_presencial', null, [
        'class' => 'form-control',
        'id' => 'fecha_inicio_presencial'
    ]) !!}
</div>

{{-- Lugar presencial --}}
<div class="form-group col-sm-12">
    {!! Form::label('lugar_presencial', 'Lugar de venta presencial:') !!}
    {!! Form::text('lugar_presencial', null, [
        'class' => 'form-control',
        'maxlength' => 191
    ]) !!}
</div>

{{-- Horarios presencial --}}
<div class="form-group col-sm-12">
    {!! Form::label('horarios_presencial', 'Horarios venta presencial:') !!}
    {!! Form::textarea('horarios_presencial', null, [
        'class' => 'form-control',
        'rows' => 4,
        'id' => 'horarios_presencial'
    ]) !!}
</div>

<div class="col-sm-12 mb-3">
    <hr>
    <h2> Venta Online </h2>
</div>

{{-- Estado venta online --}}
<div class="form-group col-sm-6">
    {!! Form::label('estado_venta_online', 'Estado venta online:') !!}
    {!! Form::select(
        'estado_venta_online',
        [
            'proximamente' => 'Próximamente',
            'activa' => 'Activa',
            'finalizada' => 'Finalizada'
        ],
        null,
        ['class' => 'form-control']
    ) !!}
</div>

{{-- Fecha inicio online --}}
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio_online', 'Fecha inicio venta online:') !!}
    {!! Form::text('fecha_inicio_online', null, [
        'class' => 'form-control',
        'id' => 'fecha_inicio_online'
    ]) !!}
</div>

{{-- URL venta online --}}
<div class="form-group col-sm-12">
    {!! Form::label('url_venta_online', 'URL boletería online:') !!}
    {!! Form::text('url_venta_online', null, [
        'class' => 'form-control',
        'placeholder' => 'https://'
    ]) !!}
</div>

<div class="col-sm-12 mb-3">
    <hr>
    <h2> Contacto </h2>
</div>

{{-- WhatsApp --}}
<div class="form-group col-sm-6">
    {!! Form::label('whatsapp', 'WhatsApp consultas:') !!}
    {!! Form::text('whatsapp', null, [
        'class' => 'form-control',
        'placeholder' => '2983-417777'
    ]) !!}
</div>

{{-- Email --}}
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email consultas:') !!}
    {!! Form::email('email', null, [
        'class' => 'form-control'
    ]) !!}
</div>


@push('page_scripts')
<script type="text/javascript">
    $('#fecha_inicio_presencial').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });

    $('#fecha_inicio_online').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
        sideBySide: true,
        useCurrent: false,
        showTodayButton: true,
        showClear: true,
        showClose: true
    });

     $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('#descripcion').summernote({
                tabsize: 2,
                height: 300
            });
            $('#horarios_presencial').summernote({
            tabsize: 2,
            height: 200,
            placeholder: 'Ej: Lunes a viernes de 8 a 22 hs'
        });
        });
</script>
@endpush
