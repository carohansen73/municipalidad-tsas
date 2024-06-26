

            <form class="container-fluid" action="{{route('filtro')}}" method="POST">
                @csrf

                    <div class="input-group">

                            <span class="input-group-text" >Tipo</span>
                            <select class="form-select me-2" aria-label="Default select example" name="tipo" style="margin-right: 10px">
                                @foreach($tipos as $tipo)
                                    <option value="{{$tipo}}">{{$tipo}}</option>
                                @endforeach
                            </select>

                            <span class="input-group-text" >Mes</span>
                            <select class="form-select me-2" aria-label="Default select example" name="mes" style="margin-right: 10px">
                                @foreach($meses as $mes)
                                    <option value="{{$mes}}">{{$mes}}</option>
                                @endforeach
                            </select>



                            <span class="input-group-text" >Año</span>
                            <select class="form-select me-2" aria-label="Default select example" name="anio" style="margin-right: 10px">
                                {{-- <option selected><strong>{{$filtroDeBusqueda['anio']}}</strong></option> --}}
                                @foreach($anios as $anio)
                                        <option value="{{$anio}}">{{$anio}}</option>
                                @endforeach
                            </select>



                        <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </div>
            </form>
