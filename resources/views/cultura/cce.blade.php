
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}

<div id="cce">
    <div class="portada-foto text-md-left text-sm-center ">
        {{-- @if(isset($portada))
        @foreach($portada as $p)
        <img class="foto-portada" src="{{asset("storage/secciones/".$p->img)}}" alt="portada-de-la-seccion">
        @break
        @endforeach --}}
        <div class="background-portada">   </div>
        {{-- <img class="logos-portada" src="assets/img/sections-portadas/logos/logos.png" alt=""> --}}
        @foreach ($textos as $text)
            <h1>{{$text->seccion->nombre}}</h1>
        @endforeach
        {{-- @endif --}}
    </div>
</div>
    <!-- ======= borde colorido ======= -->
    <div class="container-border">
        <div class="row">
            <div class="col-4 border-6">
            </div>

            <div class="col-4 border-1">
            </div>
            <div class="col-4 border-4">
            </div>
        </div>
    </div>
    <!-- ======= fin borde colorido ======= -->
{{-- FIN PORTADA --}}


  <!-- ======= FIESTA DEL TRIGO - VIDEO (About Section) ======= -->
    {{-- <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">

            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Circuitos turísticos</h3>
            <p class="fst-italic">
                Durante el año 2020 la Comisión de Colectividades Extranjeras en Tres Arroyos realizó, junto al Museo Municipal José A. Mulazzi y la Dirección de Turismo de Tres Arroyos, un proyecto con el objetivo de poner en valor la presencia de las colectividades en la ciudad, rescatando los relatos e historias de sus protagonistas y los sitios más significativos dentro del ejido urbano, que son exponentes de las distintas culturas que forman parte de la identidad tresarroyense.
            </p>
           <a href="https://www.youtube.com/watch?v=3pABUx3B_zI&ab_channel=ColectividadesExtranjerasdeTresArroyos" target="_blank"> Seguinos en Youtube!</a>
            <p>
                En nuestro canal de youtube se encuentran los videos de los distintos circuitos turísticos.
                Estos circuitos turísticos son de consulta anual por todas las instituciones educativas y por la Dirección de Turismo Municipal.
            </p>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- End About Section -->




<!-- Features (Talleres) -->
<section id="features" class="features mt-5">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Talleres</p>
            <h2>Dictados en el CCE</h2>
        </div>
        <p> Los interesados, pueden comunicarse al tel. 431 603,de lunes a viernes de 8 a 21 horas, o dirigirse personalmente al Centro Cultural La Estación, Av. Ituzaingó 320. <br>
        </p>

        <div class="row justify-content-center">
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                    <i class="far fa-calendar-alt"></i>
                    <h4> Lunes:</h4>

                    <p> <strong>Modelando historias - taller de cerámica. </strong><br>
                        De 10 a 12h.<br>
                        Dicta: Julia Sequeira.<br>
                    </p>
                    <p> <strong>Teatro para niños/as.   </strong> <br>
                        De 17:30 a 19h.<br>
                        Dicta: Camila Taraborelli.<br>
                    </p>
                    <p> <strong> Tango para principiantes.  </strong> <br>
                        De 18 a 19h.<br>
                        Dicta: Karina Yáñez.<br>
                    </p>
                    <p> <strong> Tango nivel avanzado.  </strong> <br>
                        De 19 a 20:30h.<br>
                        Dicta: Karina Yáñez.<br>
                    </p>
                    <p> <strong> Encuadernación. </strong> <br>
                        De 19 a 20h.<br>
                        Dicta: Daiana Oliver.<br>
                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="far fa-calendar-alt"></i>
                    <h4> Martes:</h4>
                    <p> <strong> Crochet.  </strong> <br>
                        De 9 a 11h.<br>
                        Dicta: Leticia Sánchez.<br>
                    </p>
                    <p> <strong> Folklore para niños. </strong> <br>
                        De 18 a 19h.<br>
                        Dicta: Inés Conti.<br>
                    </p>
                    <p> <strong> Folklore juveniles. </strong> <br>
                        De 19 a 20:30h<br>
                        Dicta: Inés Conti.<br>
                    </p>
                    <p> <strong> Pintura para adultos. </strong> <br>
                        De 18:30 a 20:30h.<br>
                        Dicta: Karen Montes de Oca.<br>
                    </p>
                    <p> <strong> Orquesta.</strong><br>
                        De 19 a 21h.  <br>
                        Dicta: Belén Altamirano.<br>
                    </p>
                    <p> <strong> Euskera- Idioma Vasco. </strong><br>
                        De 19 a 20h.<br>
                        Dicta: Alfredo Laborde.<br>
                    </p>
                    <p> <strong> Cocina infantil. </strong> <br>
                        De 18 a 20h.<br>
                        Dicta: Amalia Ghiraldi.<br>
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="far fa-calendar-alt"></i>
                    <h4>MIÉRCOLES:</h4>
                    <p> <strong> Comprendiendo el cuerpo- taller de movilidad, entrenamiento y conciencia corporal. </strong> <br>
                        De 10 a 12h. <br>
                        Dicta: Mariana Amuchastegui.<br>
                    </p>
                    <p> <strong> Iniciación musical folclórica. </strong> <br>
                        De 17:30 a 19h.   <br>
                        Dicta: Karen Montes de Oca. <br>
                    </p>
                    <p> <strong>Maquillaje </strong> <br>
                        De 15:30 a 17:30h.     <br>
                        Dicta: Florencia Mohr.  <br>
                    </p>
                    <p> <strong>Exploración creativa- taller de arte para niños. </strong> <br>
                        De 18 a 20h.<br>
                        Dicta: Romina Saint-Denis Lara.<br>
                    </p>
                    <p> <strong> Fotografía nivel inicial. </strong> <br>
                        De 19 a 20:30h.<br>
                        Dicta: Ornella Ugalde. <br>
                    </p>
                    <p> <strong> Estimulación Cognitiva. </strong> <br>
                        De 16:30 a 17:30h.<br>
                        Dicta: Laura Caruso.<br>
                    </p>
                </div>
            </div>


                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="far fa-calendar-alt"></i>
                    <h4>JUEVES: </h4>

                    <p> <strong>Teatro para adultos. </strong> <br>
                        De 17:30 a 19:30h.<br>
                        Dicta: Camila Taraborelli.<br>
                    </p>
                    <p> <strong> Folklore para adultos.</strong><br>
                        De 18 a 19h. <br>
                        Dicta: Inés Conti.<br>
                    </p>
                    <p> <strong> Folklore juveniles. </strong> <br>
                        19 a 20:30h.<br>
                        Dicta: Inés Conti.<br>
                    </p>
                    <p> <strong> Fotografía nivel avanzado. </strong> <br>
                        De 19 a 20:30h. <br>
                        Dicta: Ornella Ugalde.<br>
                    </p>
                    <p> <strong>Alimentación Saludable. </strong> <br>
                        De 16:30 a 18:30h. <br>
                        Dicta: Amalia Ghiraldi. <br>
                    </p>
                </div>


            </div>
            {{-- <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-left" data-aos-delay="100"> --}}
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                    <i class="far fa-calendar-alt"></i>
                    <h4>VIERNES:</h4>
                    <p> <strong> Coro.</strong><br>
                        De 14 a 16h.<br>
                        Dicta: Belén Altamirano. <br>
                    </p>
                    <p> <strong> Arte-sanos de la palabra / taller de escritura.</strong><br>
                        De 18 a 20h. <br>
                        Dicta: Sofía De Ben Dalmonego.<br>
                    </p>
                    <p> <strong> Danza Vasca. </strong><br>
                        De 18 a 20h.<br>
                        Coordina el Centro Vasco Hiru Erreka.<br>
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                    <i class="far fa-calendar-alt"></i>
                    <h4>SABADO (Cada 15 días):</h4>
                    <p> <strong> Taller de Collage.</strong><br>
                        De 10 a 12h. <br>
                        Dicta: Agustina De La Cal. <br>
                    </p>
                </div>
            </div>

        </div>
    </div>
  </section>
  <!-- End Features Section -->

  <!-- Features (Talleres en delegaciones) -->
{{-- <section id="features" class="features mt-5">
    <div class="container" data-aos="fade-up">

        <h3> Talleres en las Delegaciones </h3>

        <div class="row justify-content-center">
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4> CLAROMECÓ:</h4>
                    <p> <strong>Taller literario</strong> <br>
                        Dicta María Virginia Goicochea <br>
                    </p>
                    <p> <strong>  Teatro</strong> <br>
                        Dicta Julia Czubaj
                    </p>
                    <p> <strong> Taller de Música</strong> <br>
                        Dicta Sergio Pessina
                    </p>
                    <p> <strong>Folklore</strong> <br>
                        Dicta Fausto Barú
                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4> RETA:</h4>
                    <p> <strong> Lectura y técnicas de estudio </strong> <br>
                        Dicta Nicole Arias <br>
                    </p>
                    <p> <strong> Inglés</strong> <br>
                        Dicta Marcela Vitetto <br>
                    </p>
                    <p> <strong> Canto </strong> <br>
                        Dicta Huilén Fuente <br>
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>SAN FRANCISCO DE BELLOCQ:</h4>
                    <p> <strong> Sana la Tierra</strong> <br>
                        Dictan Federico Barroso Lelouche y Laura Parraquini <br>
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>ORENSE: </h4>
                    <p> <strong> Porcelana fría</strong> <br>
                        Dicta Alicia Duhalde <br>
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>COPETONAS:</h4>
                    <p> <strong>Pintura </strong> <br>
                        Dicta Carolina Solá <br>
                    </p>
                    <p> <strong> Cocina infantil </strong> <br>
                        Dicta Marcela Bonini <br>
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-arrow-circle-right"></i>
                    <h4>M. CASCALLARES:</h4>
                    <p> <strong>Taller de arte</strong>
                        Dicta María Azul Álvarez <br>
                    </p>
                </div>
            </div>

        </div>
    </div>
  </section> --}}
  <!-- End Features Section -->

   <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <p>Galería de imágenes</p>
        {{-- <p>Tres Arroyos</p> --}}
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Todos</li>
            <li data-filter=".filter-app">Talleres</li>
            <li data-filter=".filter-card">Muestras</li>
            <li data-filter=".filter-web">Presentaciones</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset("storage/secciones/cce-taller.jpg")}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              {{-- <h4>Talleres</h4> --}}
              {{-- <p>App</p> --}}
              <div class="portfolio-links">
                <a href="{{asset("storage/secciones/cce-taller.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset("storage/secciones/cce-muestras4.jpg")}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                {{-- <h4>Muestras</h4> --}}
                {{-- <p>App</p> --}}
                <div class="portfolio-links">
                  <a href="{{asset("storage/secciones/cce-muestras4.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                  {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset("storage/secciones/cce-presentaciones.jpg")}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              {{-- <h4>Presentacion</h4> --}}
              {{-- <p>Web</p> --}}
              <div class="portfolio-links">
                <a href="{{asset("storage/secciones/cce-presentaciones.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset("storage/secciones/cce-taller2.jpg")}}" class="img-fluid" alt="">

            <div class="portfolio-info">
              {{-- <h4>App 2</h4> --}}

              <div class="portfolio-links">
                <a href="{{asset("storage/secciones/cce-taller2.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{asset("storage/secciones/cce-muestras.jpg")}}" class="img-fluid" alt="">

            <div class="portfolio-info">
              {{-- <h4>Card 2</h4>
              <p>Card</p> --}}
              <div class="portfolio-links">
                <a href="{{asset("storage/secciones/cce-muestras.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset("storage/secciones/cce-presentaciones2.jpg")}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              {{-- <h4>Web 2</h4>
              <p>Web</p> --}}
              <div class="portfolio-links">
                <a href="{{asset("storage/secciones/cce-presentaciones2.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{asset("storage/secciones/cce-muestras3.jpg")}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset("storage/secciones/cce-muestras3.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset("storage/secciones/cce-presentaciones3.jpg")}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset("storage/secciones/cce-presentaciones3.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset("storage/secciones/cce-muestras2.jpg")}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="{{asset("storage/secciones/cce-muestras2.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

      </div>

    </div>
  </section>
 <!-- End Portfolio Section -->
