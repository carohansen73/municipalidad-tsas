

        <div class="row col-lg-12 ">

{{-- VER QUE ES LO DE EXCEPTUADA  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!--}}


            @foreach( $boletinOficial as $item)
            <div class="col-lg-6 mb-4">
                <div class="list-group">
                    <ul class="list-group text-center" >
                        <li class="list-group-item list-group-title" aria-current="true"> {{-- <i class="fas fa-file-download"></i> --}}{{ $item->titulo}}  </li>
                        @if (isset($item->tipo))
                            <a href="{{url('/storage/archivos/boletin_oficial/'.$item->tipo.'/'.$item->anio.'/'.$item->nombre)}}" target="_blank" class="list-group-item only-item">  {{ $item->descripcion}} </a>
                        @else
                            <a href="{{url('/storage/archivos/boletin_oficial/avisos/'.$item->nombre)}}" target="_blank" class="list-group-item only-item">  {{ $item->descripcion}} </a>
                        @endif

                    </ul>
                </div>
            </div>

            @endforeach
        </div>


