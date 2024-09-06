@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')
@section('content')

{{--NOTICIAS / PORTADA --}}
<section id="noticias" class="team">
<div class="container mb-5" data-aos="fade-up">
<main id="main" class="margen-top-navbar">

    <div class="section-title ">
        @if(isset($categoriaNombre))
            <p><a href="/portal-de-noticias">Portal de Noticias - TSAS</a></p>
            <h2>{{$categoriaNombre}}</h2>
        @else
            <p><a href="/portal-de-noticias">Portal de Noticias</a></p>

        @endif
        {{-- <h2>Descubrí los museos del partido de Tres Arroyos</h2> --}}
    </div>

    <!-- ======= borde colorido ======= -->
    <div class="container-border mb-5">
        <div class="row">
            <div class="col-4 border-2">
            </div>
            <div class="col-4 border-3">
            </div>
            <div class="col-4 border-6">
            </div>
        </div>
    </div><!-- ======= fin borde colorido ======= -->


    <!-- ======= NOTICIAS CENTRAL ======= -->
    <div class="container mb-5" data-aos="fade-up">
        {{-- @csrf --}}

        <div class="row">
            <!-- ======= ASIDE NOTICIAS ======= -->
            <aside class="col-md-9 aside-principal">
                <div class="row">
                    @foreach($noticias as $noti)
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class=" member-img">
                                @foreach($noti->imgs as $imag)
                                    <img src="{{asset("storage/noticia_img/".$imag->noticia_id."/".$imag->img)}}" class="img-fluid" alt="">
                                    @break
                                @endforeach
                            </div>
                            <div class="member-info">
                                <a href="/noticia/{{$noti->slug}}"><h4>{{$noti->titulo}} </h4></a>
                                <span> {{ \Carbon\Carbon::parse($noti->fecha)->format('d-m-Y')}} </span>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
                <div>
                    {{ $noticias->links() }}
                </div>
            </aside>

            <!-- ======= ASIDE LATERAL  FILTRO DE BUSQUEDA- CATEGORIAS - ULTIMAS NOTICIAS======= -->
            <aside class="col-md-3 aside-lateral">
                {{--  --}}
                 <form class="container-fluid mt-3" action="/portal-de-noticias" method="GET">
                   {{-- @csrf {{ method_field('GET') }} --}}
                   <div class="search-input position-relative">
                        {{-- <input class="form-control me-2 btn-search" type="search" placeholder="Buscar" aria-label="Search" > --}}
                        <input type="search" name="search" class="form-control form-control-md ps-5" placeholder="Buscar">
                        <svg xmlns="http://www.w3.org/2000/svg" style="left: 10px;" class="position-absolute top-50 translate-middle-y search-icon" width="25" height="25" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                   </div>

                </form>
                <hr>

                <div class="section-title">
                    <p >Categorias</p>
                </div>
                    <ul>
                        {{-- SE USABA ASI CON AJAX JS
                                @foreach($categorias as $cat)
                            <li class="desplegable-categoria-2"  id="categoria_{{$cat->id}}">
                                <div class="d-flex justify-content-between align-content-center desplegable-categoria-boton" id="categoria_{{$cat->id}}">
                                    <div id="categoria_{{$cat->id}}">
                                        <p id="categoria_{{$cat->id}}">
                                            <p><i class="fas fa-tags"></i> <a href="/noticias-categoria/{{$cat->nombre}}">  {{$cat->nombre}}  </a></p>
                                        </p>
                                    </div>

                                    <button class="desplegable-categoria"  id="categoria_{{$cat->id}}">
                                        <span class="icon-closed"> <i class="fas fa-angle-right" id="categoria_{{$cat->id}}"></i></span>
                                        <span class="icon-open display-none"><i class="fas fa-angle-down"></i></span>
                                    </button>
                                </div>
                            </li>
                            <ul class="noticias-por-categoria{{$cat->id}} display-none">
                            </ul>
                        @endforeach --}}
                        <li class="desplegable-categoria-2"  >
                            <a href="/portal-de-noticias">
                                <div class="d-flex justify-content-between align-content-center desplegable-categoria-boton">
                                    <div>
                                        <p> Todas </p>
                                    </div>
                                        <i class="fas fa-angle-right" ></i>
                                </div>
                            </a>
                        </li>

                        {{-- ASI SIN AJAX JS--}}
                        @foreach($categorias as $cat)
                            <li class="desplegable-categoria-2"  id="categoria_{{$cat->id}}">
                                <a href="/noticias-categoria/{{$cat->nombre}}">
                                    <div class="d-flex justify-content-between align-content-center desplegable-categoria-boton">
                                        <div>
                                            <p>  {{$cat->nombre}} </p>
                                        </div>
                                            <i class="fas fa-angle-right" ></i>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <hr>

                    @if(isset($ultimasNoticias))
                        <div class="section-title mb-3 mt-5">
                            <p style="font-size: 18px">Últimas Noticias</p>
                        </div>
                        @foreach($ultimasNoticias as $noti)
                            <div class="col-lg-12 col-md-12 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member-img">
                                        @foreach($noti->imgs as $imag)
                                            <img src="{{asset("storage/noticia_img/".$imag->noticia_id."/".$imag->img)}}" class="img-fluid" alt="">
                                            @break
                                        @endforeach
                                    </div>
                                    <div class="member-info">
                                        <a href="/noticia/{{$noti->slug}}"><h4>{{$noti->titulo}} </h4></a>
                                        <span>{{ \Carbon\Carbon::parse($noti->fecha)->format('d-m-Y')}} </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </aside>
            </div>
    </section>


<!-- End Team Section -->

</main>

</section>

  <!-- Template ocultar-mostrar información JS File -->
  {{-- <script src="{{ asset('assets/js/filtroNoticias.js') }}"></script> --- NO SE USA  --}}
