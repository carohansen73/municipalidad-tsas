<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control','maxlength' => 300,'maxlength' => 300]) !!}
</div>

<!-- Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area', 'Area:') !!}
    {!! Form::select('area', $areas, null, ['class' => 'form-control']) !!}
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
    </script>
@endpush

{{-- SI SE PUEDE ACTUALIZAR, SACAR EL REQUIRED, PORQUE SI NO ACTUALIZAS TOMA COMO QUE EL CAMPO ESTA VACIO! --}}
@if(!isset($avisoOficial))
 <!-- Nombre Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('nombre', ' Archivo') !!}
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">Seleccionar</span>
                <input name="nombre" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;"  accept="application/pdf" type="file" required>
            </span>
            @if (isset($avisoOficial) && ($avisoOficial->nombre))
                <span class="form-control">{{$avisoOficial->nombre}}</span>
            @else
                <span class="form-control"></span>
            @endif

        </div>
        <p class="help-block">El formato permitido es pdf.</p>
    </div>
@endif
