@extends('layouts.app')
   <!-- barra de navegacion -->
   @include('layouts.navbar')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center ">

          <video  id="video" src="assets/img/video/video-tsas.mp4" autoplay="autoplay" loop="loop" muted="muted">
            Tu navegador no admite el elemento <code>video</code>.
        </video>

    <div class="container" data-aos="fade-up">

        {{-- {* <video class="video-portada">
        <source src="assets/video/TresArroyos.mp4" type="video/webm">
        <source src="assets/video/TresArroyos.mp4" type="video/mp4">
        </video> *} --}}


        <div class="row justify-content-center portada-titulo" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
            <h1>Municipalidad de Tres Arroyos<span>.</span></h1> <br><br><br>
            {{-- <h2>Somos un equipo que trabaja para el bienestar de todos los ciudadanos.</h2> --}}
            </div>
        </div>

        <div class="row  mt-lg-5 mt-md-1 mt-sm-1 justify-content-center menu-home " data-aos="zoom-in" data-aos-delay="250">

            <div class="col-xl-2 col-md-2 ">
                <a href="municipio">
                    <div class="icon-box icon-2">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Tres Arroyos</h3>
                    </div>
                </a>
            </div>


            <div class="col-xl-2 col-md-2">
                <a href="atencion-al-vecino">
                    <div class="icon-box icon-5">

                    <i class="fas fa-phone"></i>
                        <h3>Atención al vecino</h3>
                    </div>
                </a>
            </div>

            <div class="col-xl-2 col-md-2">
                <a href="cultura">
                    <div class="icon-box icon-4">
                        <i class="fas fa-theater-masks"></i>
                        <h3>Cultura</h3>
                    </div>
                </a>
            </div>

            <div class="col-xl-2 col-md-2">
                <a href="https://turismo.tresarroyos.gov.ar/" target="_blank">
                    <div class="icon-box icon-3">
                        <i class="fas fa-camera-retro"></i>
                        <h3>Turismo </h3>
                    </div>
                </a>
            </div>

            <div class="col-xl-2 col-md-2">
                <a href="deportes">
                    <div class="icon-box icon-6">
                        <i class="fas fa-biking"></i>
                        <h3>Deportes</h3>
                    </div>
                </a>
            </div>

            <div class="col-xl-2 col-md-2">
                <a href="salud" target="_blank">
                    <div class="icon-box icon-1">
                        <i class="fas fa-plus-square"></i>
                        <h3>Salud</h3>
                    </div>
                </a>
            </div>


        </div>

    </div>
</section><!-- End Hero -->

<!-- ======= Noticias/novedades Section ======= -->
    <section id="novedades" class="novedades">
        <div class="container" data-aos="fade-up">

            <div class="row">


                {{-- <div class="col-lg-12" data-aos="fade-left" data-aos-delay="100"> --}}

                    <div class="col-lg-4 col-md-4 col-sm-12 container-image-2" data-aos="fade-left" data-aos-delay="100">
                        {{-- <div class="section-title">
                            <p>Eventos</p>
                            <h2><a href="portal-de-noticias">Ver Todas</a></h2>
                        </div> --}}
                        <!-- Swiper -->
                        <div class="today d-flex justify-content-center">

                            <video  id="video" src="{{asset("storage/videos/app-salud.mp4")}}" autoplay="autoplay" loop="loop" muted="muted">
                                Tu navegador no admite el elemento <code>video</code>.
                            </video>


                            {{-- <img src="{{asset("storage/hoy/today2.png")}}" class="img-fluid" alt="">
                            <div class="today-one"><p> <strong>Inscripción al FOMEPRO </strong>en la oficina de empleo y capacitación, Pedro N. Carrera 940. <br><a href="https://www.tresarroyos.gov.ar/seccion/empleo-emprendedores" target="_blank">Bases y condiciones</a></p>    </div>
                            <div class="today-two"> <p> <strong>Móvil quirúrgico de castraciones:</strong> Barrio Benito Machado - 20 de Abril 1168 (frente al CAPS)</p> </div> --}}

                        </div>
                    </div>
                            <!-- ======= Noticias2+ ======= -->
                            {{-- @foreach($noticias as $noti)
                                <div class="image-2-box mt-5  mt-lg-0 col-lg-12" data-aos="zoom-in" data-aos-delay="150">
                                    <div class="container" data-aos="fade-up">
                                        <div class="row">
                                            <div class="col-lg-6 mb-lg-3 img-secondary">
                                                @foreach($noti->Imgs as $imag)
                                                    <img src="{{asset("storage/noticia_img/".$imag->noticia_id."/".$imag->img)}}" class="image-2" alt="">
                                                    @break
                                                @endforeach
                                            </div>
                                            <div class="col-lg-6 mb-0 novedad-text-box">
                                                <h4>{{$noti->titulo}}</h4>
                                                <div class="ver-mas-box">
                                                    <a class="ver-mas-btn" href="/noticia/{{$noti->slug}}">Ver mas</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach --}}

                    <div class="col-lg-8 col-md-8 col-sm-12 container-image-1 "  data-aos="fade-right">
                        {{-- <div class="section-title pb-2">

                            <p>Noticias</p>

                        </div> --}}

                        <!-- Swiper -->
                        <div class="swiper mySwiper swiper-noticia">
                            <div class="swiper-wrapper">
                                @foreach($noticias as $noti)

                                    <div class="swiper-slide">
                                        @foreach($noti->imgs as $imag)
                                        <img src="{{asset("storage/noticia_img/".$noti->id."/".$imag->img)}}" class="image-1" alt="">

                                        @break
                                        @endforeach
                                        <div class="swiper-slide subtitle ">
                                            <a href="/noticia/{{$noti->slug}}"><h4>{{$noti->titulo}}</h4></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{-- <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div> --}}
                            <div class="swiper-pagination"></div>
                            <div class="autoplay-progress">
                                <svg viewBox="0 0 48 48">
                                    <circle cx="24" cy="24" r="20"></circle>
                                </svg>
                                <span></span>
                            </div>
                        </div>

                    </div>
                    {{-- @foreach($noticiaPpal as $noti)
                    @foreach($noti->imgs as $imag)
                        <img src="{{asset("storage/noticia_img/".$noti->id."/".$imag->img)}}" class="image-1" alt="">
                        @break
                    @endforeach
                    <div class="novedad-1">
                        <a href="/noticia/{{$noti->slug}}"><h4>{{$noti->titulo}}</h4></a>
                    </div>
                    @endforeach --}}
                {{-- </div> --}}

            </div>


            {{-- <div class="link-ver-todas">
                <p><a href="portal-de-noticias">Ver todas</a></p>
            </div> --}}
        </div>
    </section>
<!-- End Noticias Section -->





{{-- PROXIMOS EVENTOS -->  (CULTURA / DEPORTES)--}}
@if(isset($eventos) && (count($eventos) > 0))

<!-- ======= Team Section ======= -->
<section id="{{$nombreSeccion}}-eventos" class="team ">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p> Próximos eventos</p>
            <h2><a href="/proximos-eventos">Ver Todos</a></h2>
                 {{-- <h2>Descubrí los museos del partido de Tres Arroyos</h2> --}}
        </div>

        <div class="row">
            @foreach($eventos as $evento)
                <div class="col-lg-3 pe-4 col-md-6 col-12 mb-3 align-items-stretch ">
                    <div class=" evento-img">

                        <img src="{{asset("storage/eventos/".$evento->img)}}" class="img-fluid" alt="">

                        <button  class="btn btn-modal-evento" data-bs-toggle="modal" data-bs-target="#exampleModal4" data-imagenevento="{{$evento->img}}" data-seccion="eventos"
                            data-bs-whatever="@mdo">ver</button>
                        <div class="evento-categoria"
                            @if($evento->categoria->nombre == 'Cultura')
                                style="background:#d63384;"
                            @elseif($evento->categoria->nombre == 'Educación')
                                style="background:rgb(13, 116, 189);"
                            @elseif($evento->categoria->nombre == 'Generales')
                                style="background: #662483;"
                            @elseif($evento->categoria->nombre == 'Salud')
                                style="background: #53c04d;"

                            @endif
                            >
                                <p class="mb-0">
                                    @if($evento->categoria->nombre == 'Cultura, Educación y Derechos Humanos')
                                    Cultura
                                    @else
                                    {{$evento->categoria->nombre}}
                                    @endif
                                </p>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>

    <!-- Modal Eventos -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('')}}" class="modalimg" alt="">
                        {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>

</section>

@endif
 <!-- End EVENTOS -->




  <main id="main">

    <!-- ======= About Section ======= -->
    {{-- <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </p>
          </div>
        </div>

      </div>
    </section> --}}
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --}}
    <!-- End Clients Section -->
{{--


    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/features.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-receipt"></i>
              <h4> noticia 2</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
        </div>

      </div>
    </section> --}}
    <!-- End Features Section -->






    <!-- ======= Servicios mas consultados ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">

                <p>Servicios</p>
                <h2>Servicios mas consultados</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box icon-3">
                        <div class="icon"><i class="bi bi-laptop"></i></div>
                        <h4><a href="https://autogestion.tresarroyos.gov.ar/inicio" target="_blank">Portal de Autogestión</a></h4>
                        {{-- {* <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> *} --}}
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box icon-4">
                    <div class="icon"><i class="bi bi-calendar3"></i></div>
                    <h4><a href="https://aplicaciones.tresarroyos.gov.ar/graficas/calendario.pdf" target="_blank" alt="Vencimientos 2023">Calendario de Vencimientos</a></h4>
                    {{-- {* <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p> *} --}}
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <a href="guia-de-tramites">
                          <div class="icon-box icon-2">
                    <div class="icon"><i class="bi bi-card-checklist"></i></div>
                    <h4><a href="guia-de-tramites">Guía de Trámites</a></h4>
                    {{-- {* <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> *} --}}
                    </div>
                </a>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box icon-1">
                    <div class="icon"><i class="bi bi-chat-dots"></i></div>
                    <h4><a href="https://mitresa.gobdigital.com.ar/web/default">Consultas o Reclamos</a></h4>
                    {{-- {* <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p> *} --}}
                    </div>
                </div>

                {{-- {* /fila *} --}}

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-md-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box icon-2">
                    <div class="icon"><i class="bi bi-clipboard-check"></i></div>
                    <h4><a href="/boletin-oficial">Boletín Oficial</a></h4>
                    {{-- {* <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> *} --}}
                </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-2" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box icon-1">
                    <div class="icon"><i class="bi bi-house-check-fill"></i></div>
                    <h4><a href="/transparencia-fiscal">Transparencia Fiscal</a></h4>
                    {{-- {* <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p> *} --}}
                </div>
                </div>

                {{-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-2" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box icon-3">
                    <div class="icon"><i class="bi bi-car-front"></i></div>
                    <h4><a href="https://tresarroyos.gobdigital.com.ar/web/turnoFecha?m=2" target="_blank">Licencia de Conducir</a></h4>

                </div>
                </div> --}}


                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box icon-2">
                        <div class="icon"><i class="fas fa-desktop"></i></div>
                        <h4><a href="https://mitresa.gobdigital.com.ar/web/default">Web MiTresa</a></h4>
                    </div>
                    </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box icon-4">
                        <div class="icon"><i class="bi bi-arrow-down-circle-fill"></i></div>
                        <h4><a href="https://play.google.com/store/apps/details?id=com.GDAMiTresa.Ciudadano">App MiTresa</a></h4>
                        {{-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>  --}}
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box icon-1">
                        <div class="icon"><i class="fas fa-laptop-medical"></i></div>
                        <h4><a href="https://tresarroyos.itconsultsa.com/login" target="_blank">Telemedicina</a></h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-2" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box icon-3">
                        <div class="icon"><i class="bi bi-life-preserver"></i></div>
                        <h4><a href="https://guardavidas.tresarroyos.gov.ar/login">Guardavidas</a></h4>
                    </div>
                </div>



                {{-- {* /fila *} --}}

                {{-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-md-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box icon-1">
                <div class="icon"><i class="bi bi-recycle"></i></div>
                <h4><a href="">Gestión Ambiental</a></h4>

                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-2" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box icon-3">
                <div class="icon"><i class="bi bi-egg-fried"></i></div>
                <h4><a href="">Bromatología</a></h4>

                </div>
            </div>


            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box icon-2">
                <div class="icon"><i class="bi bi-image"></i></div>
                <h4><a href="">Imágenes</a></h4>

                </div>
            </div> --}}
      {{-- {* /fila *} --}}

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= TADI Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
            <div class="text-center">
                <h3>Mi Tresa</h3>
                <p> Ingresá a MiTresa. Registrate para acceder a los servicios que provee el municipio de Tres Arroyos digitalmente.</p>
                <div class="row d-flex justify-content-center">
                    <div class="col-auto">
                    <a class="cta-btn" href="https://mitresa.gobdigital.com.ar/web/default" target="_blank">Ingresá a MiTresa </a>
                    </div>
                    <div class="col-auto">
                    <a class="cta-btn" href="https://play.google.com/store/apps/details?id=com.GDAMiTresa.Ciudadano" target="_blank">Descargá la App </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    {{-- <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Conoce los lugares mas atractivos de</h2>
          <p>Tres Arroyos</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-app">Playas</li>
              <li data-filter=".filter-card">Parque Cabaña</li>
              <li data-filter=".filter-web">Atracciones</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --}}
   <!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    {{-- <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Voluptatem dignissimos provident quasi</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div>
              </div>
            </div> <!-- End .content-->
          </div>
        </div>

      </div>
    </section> --}}
    <!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --}}
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    {{-- <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --}}
<!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>Contactate con nosotros...</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3127.804796273589!2d-60.278521724913496!3d-38.3766369664152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95926db7216bc22d%3A0xfb8779239424177e!2sAv.%20Rivadavia%201%2C%20B7500%20Tres%20Arroyos%2C%20Provincia%20de%20Buenos%20Aires%2C%20Argentina!5e0!3m2!1ses-419!2sus!4v1702997783574!5m2!1ses-419!2sus" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-6">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Nos encontramos en:</h4>
                <p>Av. Rivadavia Nº 1, Tres Arroyos, Argentina</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>reclamos@tresarroyos.gov.ar</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefono:</h4>
                <p>(02983) 439200</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0">

            <div class="info">
                <div class="address">
                    <i class="fab fa-instagram"></i>
                    <h4>Instagram:</h4>
                    <p><a href="https://www.instagram.com/municipalidadtresarroyos/" class="a-blue" target="_blank"> <span style="font-size: 14px;">/municipalidadtresarroyos</span> </a></p>
                </div>

                <div class="email">
                    <i class="fab fa-facebook-square"></i>
                  <h4>Facebook:</h4>
                  <p><a href="https://www.facebook.com/municipalidaddetresarroyos" class="a-blue" target="_blank"> <span style="font-size: 14px;">/municipalidaddetresarroyos</span> </a></p>

                </div>

                {{-- <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Telefono:</h4>
                  <p>(02983) 439200</p>
                </div> --}}

              </div>

            {{--
                 <div class="col-lg-8 mt-5 mt-lg-0">
                     <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Apellido y nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Su Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto de contacto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Escriba su mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Enviando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado exitosamente. Muchas gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
             </div>--}}


            </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->



<!-- SWIPER carousel -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/js/swiper-carousel.js') }}"></script>

  <!-- Modal para ver evento -->
  <script src="{{ asset('assets/js/modalevento.js') }}"></script>
@endsection
