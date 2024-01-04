@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')
@section('content')

{{--NOTICIAS / PORTADA --}}
<section id="noticias" class="team">

    <div class="container" data-aos="fade-up">
        <main id="main" class="margen-top-navbar">


            <div class="section-title pb-2">
                <p>Portal de Noticias</p>
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
            {{-- FIN PORTADA --}}


            <!-- ======= NOTICIAS Y LATERAL CON CATEGORIAS Y DESTACADAS O LAS QUE SIGUEN ======= -->
            {{-- <section id="noticias" class="team"> --}}
            <section id="noticia">
            <div class="container" data-aos="fade-up">


                <div class="row">
                    <!-- ======= ASIDE NOTICIA PRINCIPAL ======= -->
                    <aside class="col-md-9 aside-principal">
                        <div class="row">
                            @foreach($noticia as $noti)
                                @foreach($noti->imgs as $imag)
                                    <div class="img-noticia">
                                        <img src="{{asset("storage/noticia_img/".$imag->img)}}" class="img-fluid" alt="">
                                    </div>
                                    @break
                                @endforeach
                                <div class="info-noticia">
                                    <h4>{{$noti->titulo}} </h4>
                                    <div class="detalles-noticia">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p><i class="fas fa-clock"></i>  {{$noti->fecha}}  </p>
                                            </div>
                                            <div class="col-lg-2">
                                                <p><i class="fas fa-tags"></i> <a href="/noticias/{{$noti->categoria}}">  {{$noti->categoria}}  </a></p>
                                            </div>
                                        </div>

                                    </div>

                                    <p> {!! $noti->descripcion!!} </p>

                                </div>
                                <div class="galeria-noticia">
                                    {{-- GALERIA DE IMAGENES DE NOTICIA PPAL --}}
                                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach($noti->imgs as $imag)
                                                <div class="carousel-item active">
                                                    <img src="{{asset("storage/noticia_img/".$imag->img)}}" class="img-fluid" alt="">
                                                </div>
                                            @endforeach
                                        </div>

                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    {{-- FIN GALERIA DE IMGS --}}
                                </div>


                                <div class="noticias-relacionadas">
                                <div class="row">
                                    <div class="section-title mb-3">
                                        <p style="font-size: 18px">Noticias relacionadas</p>
                                    </div>

                                    @foreach($noticias as $noti)
                                    @if($noti->categoria == $categoria)

                                        <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
                                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                                <div class="member-img">
                                                    @foreach($noti->imgs as $imag)
                                                        <img src="{{asset("storage/noticia_img/".$imag->img)}}" class="img-fluid" alt="">
                                                        @break
                                                    @endforeach
                                                </div>
                                                <div class="member-info">
                                                    <a href="/noticia/{{$noti->pathname}}"><h4>{{$noti->titulo}} </h4></a>
                                                    <span> {{$noti->fecha}}  </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @endforeach

                                </div>

                                </div>


                            @endforeach
                        </div>
                    </aside>


                    <!-- ======= ASIDE LATERAL CATEGORIAS /notis relacionadas ======= -->
                    <aside class="col-md-3 aside-lateral">
                        <div class="section-title mb-3">
                            <p style="font-size: 18px">Noticias relacionadas</p>
                        </div>

                        @foreach($noticias as $noti)
                        @if($noti->categoria == $categoria)

                            <div class="col-lg-12 col-md-12 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member-img">
                                        @foreach($noti->imgs as $imag)
                                            <img src="{{asset("storage/noticia_img/".$imag->img)}}" class="img-fluid" alt="">
                                            @break
                                        @endforeach
                                    </div>
                                    <div class="member-info">
                                        <a href="/noticia/{{$noti->pathname}}"><h4>{{$noti->titulo}} </h4></a>
                                        <span> {{$noti->fecha}}  </span>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach


                        <div class="section-title mt-4">
                            <p style="font-size: 18px">Categorias</p>
                        </div>
                        <ul>
                            <li>
                                <p>Generales</p>
                            </li>
                            <li>
                                <p>Cultura</p>
                            </li>
                            <li>
                                <p>Deportes</p>
                            </li>
                            <li>
                                <p>La Ciudad</p>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>

        </section>

    </main>
</section><!-- End noticias Section -->

