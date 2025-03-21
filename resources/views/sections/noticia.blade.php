@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')
@section('content')

{{--NOTICIAS / PORTADA --}}
<section id="noticias" class="team">

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- END FACEBOOK SHARE -->

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



            {{-- <section id="noticias" class="team"> --}}
            <section id="noticia">
            <div class="container" data-aos="fade-up">


                <div class="row">
                    <!-- =======  NOTICIA PRINCIPAL ======= -->
                    <aside class="col-md-9 aside-principal">
                        <div class="row">
                            @if($noticia)
                                @if($noticia->imgs->isNotEmpty())
                                    <div class="img-noticia">
                                        <img src="{{asset("storage/noticia_img/".$noticia->id."/".$noticia->imgs->first()->img)}}" class="img-fluid" alt="">
                                    </div>
                                @endif

                                <div class="info-noticia">
                                    <h4>{{$noticia->titulo}} </h4>
                                    <div class="detalles-noticia">
                                        <div class="row">
                                            <div class="col-auto">
                                                <p><i class="fas fa-clock"></i>  {{ \Carbon\Carbon::parse($noticia->fecha)->format('d-m-Y')}}  </p>
                                            </div>
                                            @foreach($noticia->categorias as $categ)
                                            <div class="col-auto">
                                                <p><i class="fas fa-tags"></i> <a href="/noticias-categoria/{{$categ->nombre}}">  {{$categ->nombre}}  </a></p>
                                            </div>
                                            @endforeach

                                            <!-- Your share button code FB COMPARTIR  NO ANDAAA-->
                                            <div class="col-auto ps-2 pe-2">
                                                <p><i class="fas fa-eye"></i> {{ $noticia->views }} vistas</p>
                                            </div>

                                             <!-- VIEWS -->
                                            <div class="col-auto">
                                                <div class="fb-share-button">
                                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                                    target="_blank" style="color: rgb(13, 116, 189);">
                                                        <i class="fab fa-facebook"></i> Compartir
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p> {!! $noticia->descripcion!!} </p>

                                </div>
                                <div class="galeria-noticia">
                                    {{--CARRUSEL DE NOTICIA PPAL --}}
                                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            {{-- @foreach($noti->imgs as $imag)
                                                <div class="carousel-item active">
                                                    <img src="{{asset("storage/noticia_img/".$imag->noticia_id."/".$imag->img)}}" class="img-fluid" alt="">
                                                </div>
                                            @endforeach --}}
                                            @foreach($imagenesPrimera as $imag)
                                                <div class="carousel-item active">
                                                    <img src="{{asset("storage/noticia_img/".$imag->noticia_id."/".$imag->img)}}" class="img-fluid" alt="">
                                                </div>
                                            @endforeach
                                            @foreach($imagenes as $imag)
                                                <div class="carousel-item ">
                                                    <img src="{{asset("storage/noticia_img/".$imag->noticia_id."/".$imag->img)}}" class="img-fluid" alt="">
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


                                {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="..." alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="..." alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="..." alt="Third slide">
                                        </div>
                                    </div>

                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div> --}}


                                <!-- =======  NOTICIAS RELACIONADAS(Abajo) ======= -->
                                @if($noticiasRelacionadas->isNotEmpty())

                                    <div class="noticias-relacionadas">
                                        <div class="row">
                                            <hr>
                                            <div class="section-title mb-3">
                                                <p style="font-size: 18px">Noticias relacionadas</p>
                                            </div>

                                            @foreach($noticiasRelacionadas as $noti)
                                                <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
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

                                        </div>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </aside>




                    <!-- ======= ASIDE LATERAL CATEGORIAS / ultimas noticias ======= -->
                    <aside class="col-md-3 aside-lateral">
                        <div class="section-title mb-3">
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
                                        <span> {{ \Carbon\Carbon::parse($noti->fecha)->format('d-m-Y')}}  </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <hr>
                        <div class="section-title mb-3 mt-3">
                            <p style="font-size: 18px">Categorias</p>
                        </div>
                        <ul class="botonera-categorias">
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

                    </aside>
                </div>
            </div>
        </section>

    </main>
</section><!-- End noticias Section -->

