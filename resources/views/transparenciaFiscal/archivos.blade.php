

        <div class="row col-lg-12 ">

{{-- VER QUE ES LO DE EXCEPTUADA  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!--}}


            @foreach( $boletinOficial as $item)
            <div class="col-lg-6 mb-4">
                <div class="list-group">
                    <ul class="list-group text-center" >
                        <li class="list-group-item list-group-title" aria-current="true"> {{-- <i class="fas fa-file-download"></i> --}}{{ $item->titulo}}  </li>

                            <a href="{{url('/storage/archivos/situacion/'.$item->nombre)}}" target="_blank" class="list-group-item only-item">  {{ $item->descripcion}} </a>

                    </ul>
                </div>
            </div>

            @endforeach
        </div>


