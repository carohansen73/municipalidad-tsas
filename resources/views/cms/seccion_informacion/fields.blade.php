<!-- Seccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seccion_id', 'Seccion:') !!}


    {!!Form::select('seccion_id', $secciones,null,['class' => 'form-control '])!!}

</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Informacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('informacion', 'Informacion:') !!}
    {!! Form::textarea('informacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Img 2 Field -->

@if(isset($seccionInformacion))
    @foreach ($seccionInformacion->galeria as $img )
        <div class="form-group col-sm-4">

            {!! Form::label('img', 'Img') !!}
            <div class="input-group">
                <span class="input-group-btn mb-2">
                    <span class="btn btn-primary btn-sm" onclick="$(this).parent().find('input[type=file]').click();">Seleccionar</span>
                    <input name="img" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file" accept="image/png, image/jpg, image/jpeg, image/jfif" >
                </span>
                @if($img->img)
                    <span class="form-control form-control-sm">{{$img->img}}</span>
                @else
                    <span class="form-control"></span>
                @endif
            </div>

            <div class="form-group col-sm-12">
                <div class="col-md-6">
                    <img src="{{ asset('storage/secciones/' .$img->img) }}" alt="..." class="thumbnail" width="280" height="210">
                </div>
            </div>
        </div>
    @endforeach

@else

    {!! Form::label('img', 'Img') !!}
    <div class="input-group">
        <span class="input-group-btn mb-2">
            <span class="btn btn-primary btn-sm" onclick="$(this).parent().find('input[type=file]').click();">Seleccionar</span>
            <input name="img" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file" accept="image/png, image/jpg, image/jpeg, image/jfif" >
        </span>
        <span class="form-control"></span>
    </div>

@endif



{{-- <!-- Img 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_3', 'Img 3:') !!}
    {!! Form::text('img_3', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Img 4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_4', 'Img 4:') !!}
    {!! Form::text('img_4', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div> --}}


