<!-- Artista Field -->
<div class="form-group col-sm-6">
    {!! Form::label('artista', 'Artista:') !!}
    {!! Form::text('artista', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
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



<div class="form-group col-sm-12">
    {!! Form::label('img', 'Foto*') !!}
    <div class="input-group">
        <span class="input-group-btn">
            <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">Seleccionar</span>
            <input name="img" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file" accept="image/png, image/jpg, image/jpeg, image/jfif" >
        </span>
        @if (isset($lineUp) && ($lineUp->img))
            <span class="form-control">{{$lineUp->img}}</span>
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

@if (isset($lineUp) && ($lineUp->img))
<div class="form-group col-sm-12">
    <div class="col-md-6">

        <img src="{{ asset('storage/fdt/' . $lineUp->img) }}" alt="..." class="thumbnail" width="280" height="320">

    </div>

</div>
@endif

