
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}

<div id="colectividades">
    <div class="portada-foto text-md-left text-sm-center ">
        {{-- @if(isset($portada))
        @foreach($portada as $p)
        <img class="foto-portada" src="{{asset("storage/secciones/".$p->img)}}" alt="portada-de-la-seccion">
        @break
        @endforeach --}}
        <div class="background-portada">   </div>
        {{-- <img class="logos-portada" src="assets/img/sections-portadas/logos/logos.png" alt=""> --}}
        @foreach ($textos as $text)
            @if($text->seccion->nombre == "Empleo - Emprendedores")
                <h1>Oficina de Empleo y Capacitación</h1>
                @else
                <h1>{{$text->seccion->nombre}}</h1>
            @endif
        @endforeach
        {{-- @endif --}}
    </div>
</div>
    <!-- ======= borde colorido ======= -->
    <div class="container-border">
        <div class="row">
            <div class="col-4 border-1">
            </div>
            <div class="col-4 border-3">
            </div>
            <div class="col-4 border-6">
            </div>
        </div>
    </div>
    <!-- ======= fin borde colorido ======= -->
{{-- FIN PORTADA --}}

<!-- ======= Fiesta de Colectividades 2024 ======= -->
<div class="container p-4 section-information col-12 pt-5 mt-5"  data-aos="fade-up">
    <div class="">
        <div class="section-title ps-0 pb-2">
            <p >Fiesta de la colectividades 2024
            </p>
            <h2>14 y 15 de septiembre </h2>
        </div>
        <p>
            Ingresá  a la<a href="https://www.youtube.com/watch?v=k2gkSoRtnoM" target="_blank"> cuenta oficial de Youtube </a>  de las colectividades y enterate de todo lo que se viene en la próxima fiesta de las colectividades.
        </p>

        <div class="row">
            <div class=" col-lg-5 text-center justify-content-center mt-5 video-lg">
                <img src="{{asset("storage/secciones/fiesta-post.jpg")}}" class="img-fluid" alt="">
            </div>
            <div class=" col-lg-7 text-center justify-content-center mt-5 video-lg">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/k2gkSoRtnoM?si=fSm5HKgLgGGwxLi4&amp;controls=0&amp;start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- ======= END Fiesta de Colectividades 2024 ======= -->


<!-- ======= Descripcion colectividades ======= -->
<div class="container p-4 section-information col-12 pt-5"  data-aos="fade-up">
    <div class="">
        <div class="section-title ps-0 pb-2">
            <p >Comisión de Colectividades Extranjeras de Tres Arroyos
            </p>
        </div>
        <p>
            La CCETA inicia en 1980 y es una organización de segundo grado sin fines de lucro.
        </p>
        <p>
            Esta comisión promueve la protección y el resguardo del patrimonio tangible e intangible relacionado a las colectividades extranjeras presentes en Tres Arroyos.
        </p>
        <p>
            Las colectividades que integran la comisión son:
        </p>

        <section id="secciones-galeria" class="pt-0 mt-0 mb-1 pb-2" style="padding-top: 0px!important;">
            <div class="container " data-aos="fade-up">
                <div class="row">
                    {{-- @foreach($text->galeria as $imag) --}}

                        {{-- <div class="col-lg-4">   <img class="foto-portada" src="{{asset("storage/secciones/".$imag->img)}}" alt="foto-1"></div> --}}
                        <div class="col-lg-4">   <img class="foto-portada" src="{{asset("storage/secciones/banderas1.png")}}" alt="foto-1"></div>
                        <div class="col-lg-4">   <img class="foto-portada" src="{{asset("storage/secciones/banderas2.png")}}" alt="foto-1"></div>
                        <div class="col-lg-4">   <img class="foto-portada" src="{{asset("storage/secciones/banderas3.png")}}" alt="foto-1"></div>

                    {{-- @endforeach --}}
                </div>
            </div>
        </section>
        {{-- <p class="text-center">
        Siria / México / Bolivia / Dinamarca / Países Bajos / Venezuela  </p>
        <p class="text-center">Líbano / Italia / Francia / España / País Vasco / Israel </p> --}}

        </p>
        <div class="text-center justify-content-center mt-5 video-lg">
            <iframe  src="https://www.youtube.com/embed/tjCOIF5TLJI?si=J-M4_ui7R4ubZQ_q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</div>


  <!-- ======= FIESTA DEL TRIGO - VIDEO (About Section) ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">




            <iframe width="560" height="315" src="https://www.youtube.com/embed/3pABUx3B_zI?si=rWCjBiIIfWBB31-6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>



            {{-- <img src="assets/img/about.jpg" class="img-fluid" alt=""> --}}
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
    </section>
    <!-- End About Section -->
<br><br><br>



<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p>Galería de imágenes</p>
            <h2>Las colectividades siempre presentes</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Todos</li>
                <li data-filter=".filter-app">Actos</li>
                <li data-filter=".filter-card">Fiesta de las Colectividades</li>
                <li data-filter=".filter-web">Fiesta del Trigo</li>
            </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <img src="{{asset("storage/secciones/acto-malvinas.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                {{-- <h4>App 1</h4> --}}
                <p>Acto en Conmemoración a la Guerra de Malvinas</p>
                <div class="portfolio-links">
                    <a href="{{asset("storage/secciones/acto-malvinas.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Acto en Conmemoración a la Guerra de Malvinas"><i class="bx bx-plus"></i></a>
                    {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
                <img src="{{asset("storage/secciones/FDT-ActoInaugural.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                {{-- <h4>Web 3</h4> --}}
                <p>Fiesta del Trigo</p>
                <div class="portfolio-links">
                    <a href="{{asset("storage/secciones/FDT-ActoInaugural.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fiesta del Trigo"><i class="bx bx-plus"></i></a>
                    {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/inauguracion_plazoleta2.jpg")}}" class="img-fluid" alt="">

                    <div class="portfolio-info">
                    {{-- <h4>App 2</h4> --}}
                    <p>Acto por la inauguración de la plazoleta</p>
                    <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/inauguracion_plazoleta2.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Acto por la inauguración de la plazoleta"><i class="bx bx-plus"></i></a>
                        {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/inauguracion_plazoleta.jpg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>App 3</h4> --}}
                        <p>Acto por la inauguración de la plazoleta</p>
                        <div class="portfolio-links">
                            <a href="{{asset("storage/secciones/inauguracion_plazoleta.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Acto por la inauguración de la plazoleta"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
                <img src="{{asset("storage/secciones/fiesta-colectividades.jpg")}}" class="img-fluid" alt="">

                <div class="portfolio-info">
                {{-- <h4>Card 2</h4> --}}
                <p>Fiesta de las Colectividades</p>
                <div class="portfolio-links">
                    <a href="{{asset("storage/secciones/fiesta-colectividades.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fiesta de las Colectividades"><i class="bx bx-plus"></i></a>
                    {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
                </div>
            </div>
            </div>






            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/FDT-ActoInaugural2.jpg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    {{-- <h4>Web 2</h4> --}}
                    <p>Fiesta del Trigo</p>
                    <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/FDT-ActoInaugural2.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fiesta del Trigo"><i class="bx bx-plus"></i></a>
                        {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                    </div>
                    </div>
                </div>
                </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/fiesta-colectividades3.jpg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>Card 1</h4> --}}
                        <p>Fiesta de las Colectividades</p>
                        <div class="portfolio-links">
                            <a href="{{asset("storage/secciones/fiesta-colectividades3.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fiesta de las Colectividades"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/FDT-ActoInaugural.jpg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    {{-- <h4>Web 3</h4> --}}
                        <p>Fiesta del Trigo</p>
                        <div class="portfolio-links">
                            <a href="{{asset("storage/secciones/FDT-ActoInaugural.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fiesta del Trigo"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/fiesta-colectividades2.jpg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>Card 3</h4> --}}
                        <p>Fiesta de las Colectividades</p>
                        <div class="portfolio-links">
                            <a href="{{asset("storage/secciones/fiesta-colectividades2.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fiesta de las Colectividades"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
 <!-- End Portfolio Section -->

<!-- Features (Contacto) -->
<section id="features" class="features">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Redes y contacto</p>
        </div>
        <p> Facebook: Colectividades Tres Arroyos <br>
            Instagram: @colectividadestsas <br>
            Mail: colectsas@gmail.com<br>
            Youtube: Colectividades Extranjeras de Tres Arroyos <br>
        </p>
        <br>
        <h3>Contactos de las Colectividades:
        </h3>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                    <img class="foto-portada" src="{{asset("storage/secciones/espania.png")}}" alt="foto-1">
                    <h4> España:</h4>
                    <p>Instagram: Club Español  @clubesp.tsas <br>
                        Web: <a href="https://www.clubesptsas.com/" target="_blank"> https://www.clubesptsas.com/ </a><br>
                        Dirección: Hipólito Yrigoyen 468 <br>
                        Teléfono: 02983 43-3836 / 2983-603806<br>
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <img class="foto-portada" src="{{asset("storage/secciones/libano.png")}}" alt="foto-1">
                    <h4>Líbano</h4>
                    <p>Instagram: Sociedad Libanesa @sociedadlibanesatsas <br>
                        Dirección: Rivadavia 558<br>
                        Teléfono: 2983 44-4592<br>
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <img class="foto-portada" src="{{asset("storage/secciones/pais_vasco.png")}}" alt="foto-1">
                    <h4>País Vasco:</h4>
                    <p> Instagram: Centro Vasco Hiru Erreka @centro_vasco_hiruerreka <br>
                        Dirección: Pedro N Carrera 843 <br>
                        Teléfono: 2983 - 402013 <br>
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <img class="foto-portada" src="{{asset("storage/secciones/paises_bajos.png")}}" alt="foto-1">
                    <h4>Países Bajos: </h4>
                    <p> Instagram: Comisión Orange @paisesbajoscolectividad <br>
                        Dirección: Maipú 475
                    </p>
                  </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <img class="foto-portada" src="{{asset("storage/secciones/israel.png")}}" alt="foto-1">
                    <h4>Israel:</h4>
                    <p>
                        Teléfono: 2983-415932 -  Sara Fichman
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <img class="foto-portada" src="{{asset("storage/secciones/mexico.png")}}" alt="foto-1">
                    <h4>México: </h4>
                    <p>Instagram: Colectividad Mexicana @colectividadmexicanatsas</p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <img class="foto-portada" src="{{asset("storage/secciones/dinamarca.png")}}" alt="foto-1">
                    <h4>Dinamarca:</h4>
                    <p> Instagram: @sociedadprotestantedelsud <br>
                        Dirección: 9 de julio nº 392 <br>
                        Teléfono: 2983 463071 <br>
                        Sitio web: <a href="https://sociedadprotestantedelsud.com/"  target="_blank">https://sociedadprotestantedelsud.com/</a>
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <img class="foto-portada" src="{{asset("storage/secciones/francia.png")}}" alt="foto-1">
                    <h4> Francia:</h4>
                    <p>Instagram: Sociedad Francesa @sociedadfrancesa1894 <br>
                        Dirección: C. 1810 72<br>
                        Teléfono: 02983 42-6968
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <img class="foto-portada" src="{{asset("storage/secciones/siria.png")}}" alt="foto-1">
                    <h4>Siria: </h4>
                    <p> Facebook: Sociedad Siria de Tres Arroyos <br>
                        Dirección: Sargento Cabral 47 <br>
                        Teléfono: 2983-447735 <br>
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <img class="foto-portada" src="{{asset("storage/secciones/italia.png")}}" alt="foto-1">
                    <h4>Italia:</h4>
                    <p> Instagram: Sociedad Italiana de Socorros Mutuos @socitaltres
                        Dirección: Av. Moreno 137
                        Teléfono: 02983 42-5188
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <img class="foto-portada" src="{{asset("storage/secciones/venezuela.png")}}" alt="foto-1">
                    <h4>Venezuela:</h4>
                    <p> Instagram: Colectividad Venezolana @colectividad_venezolanatsas
                        Teléfono: 2983-386364 - Leithy Rojas
                    </p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <img class="foto-portada" src="{{asset("storage/secciones/bolivia.png")}}" alt="foto-1">
                    <h4>Bolivia:</h4>
                    <p>
                        Teléfono: 2983-695796 - Claudia Chaves
                    </p>
                </div>

            </div>

        </div>
    </div>
  </section>
  <!-- End Features Section -->
