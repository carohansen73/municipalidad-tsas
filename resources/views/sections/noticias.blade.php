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



    <!-- ======= NOTICIAS Y LATERAL CON CATEGORIAS Y DESTACADAS O LAS QUE SIGUEN ======= -->
    {{-- <section id="noticias" class="team"> --}}
        <div class="container mb-5" data-aos="fade-up">


            <div class="row">
                <!-- ======= ASIDE NOTICIAS ======= -->
                <aside class="col-md-9 aside-principal">
                    <div class="row">
                        @foreach($noticias as $noti)

                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    @foreach($noti->imgs as $imag)
                                        <img src="{{asset("storage/noticia_img/".$imag->img)}}" class="img-fluid" alt="">
                                        @break
                                    @endforeach

                                    <div class="social">

                                    {{-- <a href="https://www.facebook.com/{{$museo->fb}}" target="_blank"><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/{{$museo->ig}}" target="_blank"><i class="bi bi-instagram"></i></a> --}}

                                    </div>
                                </div>
                                <div class="member-info">
                                    <a href="noticia/{{$noti->pathname}}"><h4>{{$noti->titulo}} </h4></a>
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

