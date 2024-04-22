@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')
@section('content')

{{--NOTICIAS / PORTADA --}}
<section id="noticias" class="team">
    <div class="container mb-5" data-aos="fade-up">
   <main id="main" class="margen-top-navbar">

    {{-- <div id="noticias-portada" class="portada-foto text-md-left text-sm-center ">
        <img class="foto-portada" src="assets/img/museos/mulazzi-portada3.jpg" alt="museo Mulazzi">
         <!-- <div class="background-portada">   </div> -->

        <h1>Portal de noticias</h1>
    </div> --}}

    <div class="section-title ">
        @if(isset($categoriaNombre))
            <p>{{$categoriaNombre}}
        @else
            <p>Portal de Noticias</p>
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
    {{-- <section id="noticias" class="team"> --}}
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

                                        {{--<div class="social">
                                        <a href="https://www.facebook.com/{{$museo->fb}}" target="_blank"><i class="bi bi-facebook"></i></a>
                                        <a href="https://www.instagram.com/{{$museo->ig}}" target="_blank"><i class="bi bi-instagram"></i></a>
                                        </div>--}}

                                 </div>
                                <div class="member-info">
                                    <a href="/noticia/{{$noti->slug}}"><h4>{{$noti->titulo}} </h4></a>
                                    <span> {{$noti->fecha}}  </span>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </aside>


                <!-- ======= ASIDE LATERAL CATEGORIAS ======= -->
                <aside class="col-md-3 aside-lateral">
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

                        @if(isset($ultimasNoticias))
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
                                            <span> {{$noti->fecha}}  </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif



                </aside>
            </div>







{{--
            <div class="section-title">
                <p style="color: #d63384">Museos</p>
                <h2>Descubrí los museos del partido de Tres Arroyos</h2>
            </div>

            <div class="row">
                @foreach($museos as $museo)

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/museos/{{$museo->portada}}" class="img-fluid" alt="">
                            <div class="social">

                            <a href="https://www.facebook.com/{{$museo->fb}}" target="_blank"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/{{$museo->ig}}" target="_blank"><i class="bi bi-instagram"></i></a>

                            </div>
                        </div>
                        <div class="member-info">
                                <h4 style="color: #d63384">{{$museo->nombre}}</h4>

                            Referente:   <span> @if($museo->referente) {{$museo->referente}} @else - @endif </span>
                            Telefono/wsp:<span>   {{$museo->wsp}}</span>
                            Email:<span> @if($museo->email) {{$museo->email}} @else - @endif</span>
                            Dirección:<span> {{$museo->direccion}}</span>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- End container --> --}}
    </section>





<!-- End Team Section -->

</main>

</section>

  <!-- Template ocultar-mostrar información JS File -->
  {{-- <script src="{{ asset('assets/js/filtroNoticias.js') }}"></script> --- NO SE USA  --}}
