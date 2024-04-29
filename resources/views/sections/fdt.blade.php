
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}


    <div id="portada-secciones" class="portada-foto text-md-left text-sm-center ">
        @foreach($portada as $p)
        <img class="foto-portada" src="{{asset("storage/secciones/".$p->img)}}" alt="portada-de-la-seccion">
        @break
        @endforeach
        <div class="background-portada">   </div>
        {{-- <img class="logos-portada" src="assets/img/sections-portadas/logos/logos.png" alt=""> --}}
        @foreach ($textos as $text)
            @if($text->seccion->nombre == "Empleo - Emprendedores")
                <h1>Oficina de Empleo y Capacitación</h1>
                @else
                <h1>{{$text->seccion->nombre}}</h1>
            @endif
        @endforeach
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


<div class="container p-4 section-information col-10" data-aos="fade-up">
    <div class="">
        <div class="section-title ps-0 pb-2">
            <p >Fiesta Provincial del Trigo</p>
        </div>
        <p>
            La Fiesta Provincial del Trigo es el evento cultural más importante del distrito, donde diversos artistas de la danza y de la música muestran sus habilidades en el escenario Mayor, el Juan Pesalaccia.
        </p>
        <p>
            La fiesta no solo cuenta con gran actividad Cultural, sino también comercial y gastronómica, permitiendo disfrutar a los asistentes de extensos paseos de compras, puestos de emprendedores y artesanos, fogones, patios de comida y cervezas artesanales.
        </p>
        <p>
            Además de las muestras y actividades de diferentes áreas del municipio, como son Las direcciones de Deportes, Cultura, Turismo, Desarrollo Social y Comercio, entre otras que aprovechan el evento para presentar sus propuestas.
        </p>
        <p>
            En la edición número 55 de este 2024, fueron  6 días con más de 30 artistas pasando por el escenario, tanto locales como nacionales y con una concurrencia de gente de entre 120.000 a 130.000 personas.
        </p>
        <p>
            Este año se contó con la presencia de Javier Calamaro, Virus, Jorge Rojas, Rodrigo Tapari, BM y para el cierre La Delio Valdez. Con más de ___ entradas vendidas y otra gran cantidad de personas disfrutando desde el predio.
        </p>
    </div>
</div>


  <!-- ======= FIESTA DEL TRIGO - VIDEO (About Section) ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">




            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/C31NOxkp51o/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px); height:800px;">
            </blockquote>
            <script async src="//www.instagram.com/embed.js"></script>



            {{-- <img src="assets/img/about.jpg" class="img-fluid" alt=""> --}}
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Te mostramos lo que fué la 55º edición de la Fiesta Provincial del Trigo</h3>
            <p class="fst-italic">
              La fiesta de nuestras raíces, la más importante del sudoeste bonaerense se disfruta en Tres Arroyos.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Gastronomía</li>
              <li><i class="ri-check-double-line"></i> cerveza artesanal</li>
              <li><i class="ri-check-double-line"></i> emprendedores</li>
              <li><i class="ri-check-double-line"></i> artesanos.</li>
              <li><i class="ri-check-double-line"></i> Artistas nacionales y locales</li>
              <li><i class="ri-check-double-line"></i> comercios.</li>
              <li><i class="ri-check-double-line"></i> exposiciones.</li>
              <li><i class="ri-check-double-line"></i> premios.</li>
              <li><i class="ri-check-double-line"></i> parque de juegos.</li>
              <li><i class="ri-check-double-line"></i> espectáculos para toda la familia.</li>
            </ul>
            <p>
                Noches inolvidables se vieven en la Fiesta Provincial del Trigo, junto a cientos de vecinos y vecinas tresarroyenses y turistas
                que vienen a disfrutar de las espectaculares presentaciones en el escenario mayor, la gastronomia local, los patios de compras y de juegos
                 que presenta la fiesta más importante del sudoeste.
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->
<br><br><br>


<section id="secciones-galeria" class="pt-0 mt-0" style="padding-top: 0px!important;">
    <div class="container " data-aos="fade-up">
        <div class="row">
            {{-- @foreach($text->galeria as $imag) --}}

                <div class="col-lg-4 mb-3">   <img class="foto-portada" src="{{asset("storage/secciones/fdt/1.jpg")}}" alt="foto-1"></div>
                <div class="col-lg-4 mb-3">   <img class="foto-portada" src="{{asset("storage/secciones/fdt/2.jpg" )}}" alt="foto-1"></div>
                <div class="col-lg-4 mb-3">   <img class="foto-portada" src="{{asset("storage/secciones/fdt/3.jpg")}}" alt="foto-1"></div>
                <div class="col-lg-4 mb-3">   <img class="foto-portada" src="{{asset("storage/secciones/fdt/4.jpg")}}" alt="foto-1"></div>
                <div class="col-lg-4 mb-3">   <img class="foto-portada" src="{{asset("storage/secciones/fdt/5.jpg")}}" alt="foto-1"></div>
                <div class="col-lg-4 mb-3">   <img class="foto-portada" src="{{asset("storage/secciones/fdt/6.jpg")}}" alt="foto-1"></div>

            {{-- @endforeach --}}
        </div>
    </div>
</section>







 <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Lo que la gran fiesta nos dejó...</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Artistas</strong> nacionales, locales y regionales</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="130000" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Personas</strong> asistieron a la Fiesta del Trigo</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Dias</strong> repletos de personas que vinieron a disfrutar de este gran evento</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Entradas vendidas</strong> mas cientos de personas que pudieron disfrutar de los shows de manera gratuita</p>
                  </div>
                </div>
              </div>
            </div> <!-- End .content-->
          </div>
        </div>

      </div>
    </section>
    <!-- End Counts Section -->

<!-- Template ocultar-mostrar información JS File -->
<script src="{{ asset('assets/js/hide-ig-divs.js') }}"></script>
