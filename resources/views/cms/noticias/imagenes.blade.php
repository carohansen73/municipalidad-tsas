@isset($noticia)

<div class="row mt-4">
    @foreach ($noticia->Imgs as $imagen)
        <div class="col-sm-2 mb-1">
            {!! Form::open(['route' => ['deleteImg', $imagen->id], 'method' => 'delete']) !!}
            {{-- <div><a href=""  onclick ="return confirm('Esta seguro que desea eliminar la imagen?')" class="float-right btn-tool  mb-1"><i class="fas fa-trash"></i></a></div> --}}

            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'float-right btn btn-danger btn-xs  mb-1', 'onclick' => "return confirm('Esta seguro que desea eliminar?')"]) !!}
            <img src="{{asset("storage/noticia_img/".$imagen->noticia_id.'/'.$imagen->img)}}" alt="{{$imagen->leyenda}}" class="img-fluid">
            {!! Form::close() !!}
        </div>
    @endforeach
</div>
@endisset
