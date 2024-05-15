
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}

<div id="bibliotecas">
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
            <div class="col-4 border-5">
            </div>

            <div class="col-4 border-1">
            </div>
            <div class="col-4 border-6">
            </div>
        </div>
    </div>
    <!-- ======= fin borde colorido ======= -->
{{-- FIN PORTADA --}}




<!-- ======= LISTADO BIBLIOTECAS  ======= -->
<section id="about" class="about mt-lg-5">
    <div class="container content" data-aos="fade-up">
        <h3>LISTADO DE BIBLIOTECAS POPULARES Y BARRIALES</h3>
        <div class="row pt-4">

            <div class="col-lg-6 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <ul>
                <li><i class="ri-check-double-line"></i>  Biblioteca Popular Hugo Delgiorgio  <br> <span style="color: #848484;"> 20 de abril 1180 - Barrio Benito Machado</span></li>
                <li><i class="ri-check-double-line"></i> Biblioteca Popular La Tranquera <br> <span style="color: #848484;"> Bolívar 1634 - Barrio Ruta 3 Sur</span> </li>
                <li><i class="ri-check-double-line"></i> Biblioteca Popular “Hugo Arturo Uslengui” <br><span style="color: #848484;"> Brown 1200 - Barrio Boca</span> </li>
                <li><i class="ri-check-double-line"></i> Biblioteca Popular José Ingenieros <br><span style="color: #848484;"> Bolívar 132 - 02983 43-1791</span></li>
                <li><i class="ri-check-double-line"></i> Biblioteca Popular Braille y Parlante Ilusiones <br><span style="color: #848484;"> Bolívar 128 </span></li>
            </ul>
            </div>
            <div class="col-lg-6  pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">


                <ul>
                <li><i class="ri-check-double-line"></i>Biblioteca Popular D.F. Sarmiento <br><span style="color: #848484;"> Av. Moreno 334 - 02983 43-0721 </span> </li>
                <li><i class="ri-check-double-line"></i> Biblioteca Popular Vicente P. Cacuri <br><span style="color: #848484;"> Hipólito Yrigoyen 165 · 02983 43-4209</span> </li>
                <li><i class="ri-check-double-line"></i> Biblioteca Popular Dr. José Campano <br><span style="color: #848484;"> Hipólito Yrigoyen 252 · 02983 42-6802</span></li>
                <li><i class="ri-check-double-line"></i> Biblioteca Popular Ing. Luis Meister <br><span style="color: #848484;"> Berutti 710 · 2983-348492</span></li>
                <li><i class="ri-check-double-line"></i> Biblioteca Junta Vecinal Barrio Villa Italia <br><span style="color: #848484;"> Víctor Manuel 686 - Barrio Villa Italia</span></li>
                <li><i class="ri-check-double-line"></i> Biblioteca del CRESTA <br><span style="color: #848484;"> Maipú 270
                                                                                - <a href=" http://www.cresta.edu.ar/biblioteca/" target="_blank"> Ir al sitio web </a> </span></li>


                </ul>

            </div>
        </div>

    </div>
</section>
  <!-- End LISTADO BIBLIOTECAS -->



 <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      {{-- <div class="section-title">
        <h2>Las colectividades siempre presentes</h2>
        <p>Tres Arroyos</p>
      </div> --}}

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Todas</li>
                <li data-filter=".filter-app">Sarmiento</li>
                <li data-filter=".filter-card">Cacuri</li>
                <li data-filter=".filter-web">Campano</li>
            </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/bibliotecas/cacuri1.jpg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <p>Biblioteca cacuri</p>
                        {{-- <p>Card</p> --}}
                        <div class="portfolio-links">
                            <a href="{{asset("storage/secciones/bibliotecas/cacuri1.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/bibliotecas/campano1.jpg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <p>Biblioteca Campano</p>
                        <div class="portfolio-links">
                            <a href="{{asset("storage/secciones/bibliotecas/campano1.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <img src="{{asset("storage/secciones/bibliotecas/sarmiento4.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <p>Biblioteca Sarmiento</p>
                <div class="portfolio-links">
                    <a href="{{asset("storage/secciones/bibliotecas/sarmiento4.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/bibliotecas/campano2.jpg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <p>Biblioteca Campano</p>
                        <div class="portfolio-links">
                            <a href="{{asset("storage/secciones/bibliotecas/campano2.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                <img src="{{asset("storage/secciones/bibliotecas/sarmiento2.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <p>Biblioteca Sarmiento</p>
                    <div class="portfolio-links">
                    <a href="{{asset("storage/secciones/bibliotecas/sarmiento2.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/bibliotecas/sarmiento3.jpg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <p>Biblioteca Sarmiento</p>
                        <div class="portfolio-links">
                            <a href="{{asset("storage/secciones/bibliotecas/sarmiento3.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
                <img src="{{asset("storage/secciones/bibliotecas/cacuri2.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <p>Biblioteca cacuri</p>
                <div class="portfolio-links">
                    <a href="{{asset("storage/secciones/bibliotecas/cacuri2.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item ">
                <div class="portfolio-wrap">
                <img src="{{asset("storage/secciones/bibliotecas/joseingenieros.jpg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <p>Biblioteca José Ingenieros</p>
                    <div class="portfolio-links">
                    <a href="{{asset("storage/secciones/bibliotecas/joseingenieros.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/bibliotecas/cacuri4.jpg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <p>Biblioteca cacuri</p>
                        <div class="portfolio-links">
                            <a href="{{asset("storage/secciones/bibliotecas/cacuri4.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/bibliotecas/campano3.jpg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <p>Biblioteca Campano</p>
                        <div class="portfolio-links">
                            <a href="{{asset("storage/secciones/bibliotecas/campano3.jpg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
 <!-- End Portfolio Section -->


<!-- ======= Historia 1er biblioteca  ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Un poco de historia</h3>
<br>

                <p>
                    La biblioteca mas antigua de la ciudad, es la Biblioteca Popular Domingo F. Sarmiento, fundada en 1899 bajo el nombre de "Centro de Comercio". <br>
                    En el año 1914 adquirió su actual denominación. <br> Es la segunda más longeva del país luego de una biblioteca de la provincia de San Juan.
                </p>
                {{-- <img src="{{asset("storage/secciones/bibliotecas/sarmiento-antes.jpeg")}}" class="img-fluid" alt=""> --}}
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="{{asset("storage/secciones/bibliotecas/sarmiento-antes.jpeg")}}" class="img-fluid" alt="">
                {{-- <img src="{{asset("storage/secciones/bibliotecas/sarmiento-antes2.png")}}" class="img-fluid" alt=""> --}}
            </div>
        </div>

    </div>
</section>
  <!-- End Historia 1er biblioteca -->
