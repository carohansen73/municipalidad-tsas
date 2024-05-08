
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
                    <p> <strong> PEMTA - Taller de Radio </strong><br>
                        Karina Arias<br>
                        15 a 17hs<br>
                    </p>
                    <p> <strong> Guitarra y Ukelele  </strong> <br>
                        Cristian San Román<br>
                        18 a 20hs<br>
                    </p>
                    <p> <strong> Tango Infanto-juvenil  </strong> <br>
                        18 a 19hs<br>
                       Karina Yañez<br>
                    </p>
                    <p> <strong> Tango adultos  </strong> <br>
                        19 a 20hs<br>
                        Karina Yañez<br>
                    </p>
                    <p> <strong> Dibujo y Pintura </strong> <br>
                        Para Adultos. Cada 15 días<br>
                        Maximiliano Soriano<br>
                        18:30 a 20:30hs<br>
                    </p>
                    <p> <strong> Arte-sanos de la palabra  </strong> <br>
                        Sofía De Ben Dalmonego<br>
                        18 a 20hs<br>
                    </p>
                    <p> <strong> Folklore </strong><br>
                        Jorge Mauri.<br>

                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="far fa-calendar-alt"></i>
                    <h4> Martes:</h4>
                    <p> <strong> Italiano (Arancelado)  </strong> <br>
                        Mariana Caso<br>
                         9 a 10:30hs<br>
                    </p>
                    <p> <strong> Crochet (Arancelado) </strong> <br>
                        Leticia Sánchez<br>
                        9 a 10:30hs<br>
                    </p>
                    <p> <strong> Radioteatro </strong> <br>
                        Karina Arias<br>
                        15 a 16:30hs<br>
                    </p>
                    <p> <strong> Danza Clásica (Arancelado) </strong> <br>
                        Tamara Campano<br>
                        14 a 15:30hs<br>
                    </p>
                    <p> <strong> Teatro<br>
                        Beto Pereyra </strong> <br>
                        18 a 20hs<br>
                    </p>
                    <p> <strong> Folklore Inicial (niños) </strong><br>
                        Inés Conti<br>
                        18 a 19hs<br>
                    </p>
                    <p> <strong> Folklore Juveniles </strong> <br>
                        19 a 21hs<br>
                    </p>
                    <p> <strong> Técnicas y lenguaje del muralismo </strong> <br>
                        Juan Urquiaga<br>
                        18 a 20hs<br>
                    </p>
                    <p> <strong> Euskera - Idioma Vasco </strong> <br>
                        Alfredo Laborde<br>
                        19 a 20:30hs<br>

                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="far fa-calendar-alt"></i>
                    <h4>MIÉRCOLES:</h4>
                    <p> <strong> Bordado </strong> <br>
                        Rocío Centeno <br>
                        8:30 a 10:30hs<br>
                    </p>
                    <p> <strong> Danza Contemporánea (Arancelado) </strong> <br>
                        Tamara Campano   <br>
                        15:30 a 17hs <br>
                    </p>
                    <p> <strong>Orquesta </strong> <br>
                        Belén Altamirano     <br>
                        18 a 20hs  <br>
                    </p>
                    <p> <strong>Teatro Adultos (Arancelado) </strong> <br>
                        Jorge Pereyra         <br>
                        20:15 a 22hs<br>
                    </p>

                    <p> <strong> Cultura Hip Hop </strong> <br>
                        Adolescentes      <br>
                        Camila Otaegui       <br>
                        19 a 20hs<br>
                    </p>
                    <p> <strong> Cultura Hip Hop </strong> <br>
                        Adultos       <br>
                        20 a 21hs<br>
                    </p>
                    <p> <strong> Estimulación Cognitiva (Arancelado) </strong> <br>
                        Laura Caruso                  <br>
                        17:30 a 19hs<br>
                    </p>

                    <p> <strong> Apoyo escolar  inglés - Primaria </strong> <br>
                        17:30 a 18:30 <br>
                    </p>
                    <p> <strong> Apoyo escolar  inglés - Secundaria </strong> <br>
                        18:30 a 19:30 hs <br>
                    </p>
                    <p> <strong> Teatro de títeres (Est. Cognitiva) </strong> <br>
                        Soledad Lorenzo y Analía Mirasso <br>
                        19:45 a 21:15<br>
                    </p>
                </div>

            </div>


                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="far fa-calendar-alt"></i>
                    <h4>JUEVES: </h4>

                    <p> <strong> Danza Clásica (Arancelado) </strong> <br>
                        Tamara Campano <br>
                        14 a 15:30hs<br>
                    </p>
                    <p> <strong> Experimentación con plantas</strong><br>
                        Betina Fernández <br>
                        14:30 a 16:30hs<br>
                    </p>
                    <p> <strong> Huerta Urbana </strong> <br>
                        Vanesa Gassman     <br>
                        14 a 16hs    <br>
                    </p>
                    <p> <strong> Dibujo y Pintura (Niños) </strong> <br>
                        Maximiliano Soriano <br>
                        18:30 a 19:30hs<br>
                    </p>
                    <p> <strong> Folklore Adultos </strong> <br>
                        Ines Conti      <br>
                        18 a 19:30hs <br>
                    </p>
                    <p> <strong> Folklore Juveniles </strong> <br>
                        19:30 a 21hs<br>
                    </p>
                    <p> <strong> Desafiar la imagen (fotografía taller ludo/creativo) </strong> <br>
                        Ornella Ugalde <br>
                        19 a 21hs<br>
                    </p>
                    <p> <strong> Creación de cuadernos y libretas </strong> <br>
                        Daiana Oliver <br>
                         18 a 20hs<br>
                    </p>
                    <p> <strong> Alimentación Saludable </strong> <br>
                        Amalia Ghiraldi <br>
                        17 a 19hs<br>
                    </p>
                </div>


            </div>
            <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-left" data-aos-delay="100">
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                    <i class="far fa-calendar-alt"></i>
                    <h4>VIERNES:</h4>
                    <p> <strong> Amigos de la lírica (Arancelado)</strong><br>
                        Belén Altamirano<br>
                        14 a 16hs   <br>
                    </p>
                    <p> <strong> Danza Contemporánea (Arancelado)</strong><br>
                        Tamara Campano<br>
                        15:30 a 17hs  <br>
                    </p>
                    <p> <strong> IMAGO MUNDI<br>
                        Taller de exploración de la imagen gráfica. (grabado)</strong><br>
                        18 a 20hs<br>
                        Romina Saint Denis Lara  <br>
                    </p>
                </div>
            </div>
                    <div class="col-lg-6 mt-lg-4" data-aos="fade-left" data-aos-delay="100">
                        <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                    <p> <strong> Danza Vasca</strong><br>
                        18 a 19:30hs  <br>
                    </p>


                    <p> <strong> Modelando historias</strong><br>
                        Taller integral de cerámica y yoga<br>
                        Julia Sequeira<br>
                        18 a 20hs     <br>
                    </p>
                    <p> <strong> Esto es Cine</strong><br>
                        Tomas Torres<br>
                        18:30 a 20:30hs <br>
                    </p>

                </div>
            </div>

        </div>
    </div>
  </section>
  <!-- End Features Section -->

  <!-- Features (Talleres en delegaciones) -->
<section id="features" class="features mt-5">
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
  </section>
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
