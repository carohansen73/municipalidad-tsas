
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}

{{-- <div id="juventud">
    <div class="portada-foto text-md-left text-sm-center ">
        <div class="background-portada">   </div>
        @foreach ($textos as $text)
            <h1>{{$text->seccion->nombre}}</h1>
        @endforeach
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
    </div> --}}
    <!-- ======= fin borde colorido ======= -->

{{-- FIN PORTADA --}}





<!-- ======= FIESTA DEL TRIGO - VIDEO (About Section) ======= -->
<div id="juventud">
<section  class="about">
    <div class="container" data-aos="fade-up">
        <main id="main" class="margen-top-navbar">
            <div class="section-title">
                <p>Dirección de Políticas para la Juventud</p>
                {{-- <h2>Dictados en el CCE</h2> --}}
            </div>
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 d-flex justify-content-center" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{asset("storage/secciones/juventud/descarga.jpg")}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-2 content d-flex justify-content-center" data-aos="fade-right" data-aos-delay="100">
                   <div>
                        <br>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Brandsen 181</li>
                            <li><i class="bi bi-alarm"></i> Horario: 07:00 a 17:00 hs. </li>
                            <li><i class="bi bi-phone"></i> Teléfono: 2983-456538</li>
                            <li><i class="fas fa-at"></i> Correo: direccionjuventudtsas@gmail.com</li>
                            <li><i class="bi bi-instagram"></i> Instagram: direccionjuventudtsas</li>
                            <iconify-icon icon="pepicons-print:clock"  style="color: #665252"></iconify-icon>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>
</div>
<!-- End About Section -->

<!-- Features (Talleres) -->
<div id="juventud">
<section  class="features mt-5">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Programas</p>
            {{-- <h2>Dictados en el CCE</h2> --}}
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                    <i class="bi bi-hand-thumbs-up"></i>
                    <h4> Acompañar Juventudes:</h4>
                    <p> Buscamos acompañar el compromiso de los jóvenes promoviendo actividades que sean un medio para lograr un objetivo como grupo. Si están interesados pueden contactarnos por WhatsApp o redes.

                       <br>
                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bi bi-chat-right-text"></i>
                    <h4> Jóvenes emprendedores:</h4>
                    <p> Contamos con un grupo de WhatsApp donde avisamos las charlas que se realizarán (ya dimos el taller de educación financiera en conjunto con la oficina de empleo y el banco nación).
                        Si están interesados pueden consultarnos por WhatsApp.
                       <br>
                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bi bi-music-note-list"></i>
                    <h4>Maravillosa música:</h4>
                    <p> Se trata de un concurso de bandas juveniles de la Provincia de Buenos Aires. Cuenta con 2 categorías para participar: estudiantil
                        (13 a 25 años con al menos un integrante en secundaria) o libre (13 a 35 años). INSCRIPCIONES ABIERTAS. Para más info acercarse a la dirección o comunicarse por WhatsApp.
                       <br>
                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-recycle"></i>
                    <h4>Promotores ambientales: </h4>
                    <p> En conjunto con la subsecretaria de gestión ambiental invitamos a los jóvenes a sumarse con el fin de promover el cambio del distrito siendo ellos los protagonistas
                        del cuidado del ambiente. Para más info comunicarse al 2983-648571 o 2983-456538.
                       <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- End Features Section -->

<!-- Features (Talleres) -->
<div id="juventud">
    <section  class="features mt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <p>Talleres</p>
                {{-- <h2>Dictados en el CCE</h2> --}}
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                        <i class="fas fa-mobile-alt"></i>
                        <h4> Conectando generaciones: </h4>
                        <p>  El punto digital brindará el taller destinado a adultos mayores en el que aprenderán desde 0 manejo de celular, aplicaciones tecnológicas y uso de homebanking.
                            (Comienza el Miércoles 05/06 a las 10:00, pueden inscribirse llamando al 2983456538.

                        <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class="fas fa-icons"></i>
                        <h4> Canva para artesanas y emprendedoras: </h4>
                        <p>
                            Canva para artesanas y emprendedoras en conjunto con el frente de mujeres y diversidades (Martes de 09:00 a 10:30 o Jueves de 15:00 a 16:30). Para más información comunicarse al 2983-609374.
                        <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class="fas fa-shield-alt"></i>
                        <h4>Cibercuidados para adolescentes:</h4>
                        <p> Acercamos la propuesta a las instituciones educativas interesadas.
                        <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class="fas fa-shield-alt"></i>
                        <h4>Cibercuidados para padres</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Features Section -->



<!-- Features (Talleres) -->
<section id="features" class="features mt-5">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>La Dirección de Juventud</p>
            {{-- <h2>Dictados en el CCE</h2> --}}
        </div>
        <p>  La Dirección cuenta con un espacio llamado <strong>“Punto Digital”. </strong>
            Tiene por objetivo democratizar el acceso a las Tecnologías de la Información y la Comunicación (TIC), a través de dispositivos de acceso libre y gratuito a internet,
             capacitaciones, talleres, asistencia en trámites y actividades culturales. <br>
            En la Dirección también se realiza el <strong>examen teórico para la licencia de conducir</strong> de 07:00 a 14:00 hs.
            Pueden solicitar sus turnos comunicándose por WhatsApp o acercándose (Brandsen 181).

           <br>
        </p>

    </div>
</section>
<!-- End Features Section -->








   <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <p>Programas y talleres</p>
        {{-- <p>Tres Arroyos</p> --}}
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Todos</li>
            <li data-filter=".filter-acomp">Acompañar Juventudes</li>
            <li data-filter=".filter-inspiran">Jovenes que Inspiran</li>
            <li data-filter=".filter-niniez">Decisión niñez</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-acomp">
          <div class="portfolio-wrap">
            <img src="{{asset("storage/secciones/juventud/acompaniar_juventudes.jfif")}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              {{-- <h4>Talleres</h4> --}}
              {{-- <p>App</p> --}}
              <div class="portfolio-links">
                <a href="{{asset("storage/secciones/juventud/acompaniar_juventudes.jfif")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/p/C67a7GpJevw/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-acomp">
            <div class="portfolio-wrap">
                <img src="{{asset("storage/secciones/juventud/acompaniar_juventudes2.jfif")}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                {{-- <h4>Muestras</h4> --}}
                {{-- <p>App</p> --}}
                <div class="portfolio-links">
                  <a href="{{asset("storage/secciones/juventud/acompaniar_juventudes2.jfif")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                  <a href="https://www.instagram.com/p/C67a7GpJevw/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-acomp">
          <div class="portfolio-wrap">
            <img src="{{asset("storage/secciones/juventud/acompaniar_juventudes3.jfif")}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              {{-- <h4>Presentacion</h4> --}}
              {{-- <p>Web</p> --}}
              <div class="portfolio-links">
                <a href="{{asset("storage/secciones/juventud/acompaniar_juventudes3.jfif")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/p/C67a7GpJevw/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-acomp">
          <div class="portfolio-wrap">
            <img src="{{asset("storage/secciones/juventud/acompaniar_juventudes4.jfif")}}" class="img-fluid" alt="">

            <div class="portfolio-info">
              {{-- <h4>App 2</h4> --}}

              <div class="portfolio-links">
                <a href="{{asset("storage/secciones/juventud/acompaniar_juventudes4.jfif")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/p/C67a7GpJevw/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-inspiran">
          <div class="portfolio-wrap">
            <img src="{{asset("storage/secciones/juventud/jovenes_inspiran.jfif")}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              {{-- <h4>Web 2</h4>
              <p>Web</p> --}}
              <div class="portfolio-links">
                <a href="{{asset("storage/secciones/juventud/jovenes_inspiran.jfif")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/p/C8YBJx4p88p/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-inspiran">
          <div class="portfolio-wrap">
            <img src="{{asset("storage/secciones/juventud/jovenes_inspiran2.jfif")}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset("storage/secciones/juventud/jovenes_inspiran2.jfif")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/p/C8YBJx4p88p/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-inspiran">
          <div class="portfolio-wrap">
            <img src="{{asset("storage/secciones/juventud/jovenes_inspiran3.jfif")}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset("storage/secciones/juventud/jovenes_inspiran3.jfif")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="https://www.instagram.com/p/C8YBJx4p88p/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-niniez">
            <div class="portfolio-wrap">
              <img src="{{asset("storage/secciones/juventud/decision_ninies.jfif")}}" class="img-fluid" alt="">

              <div class="portfolio-info">
                {{-- <h4>Card 2</h4>
                <p>Card</p> --}}
                <div class="portfolio-links">
                  <a href="{{asset("storage/secciones/juventud/decision_ninies.jfif")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                  <a href="https://www.instagram.com/p/C8moG7fpKyb/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>


      </div>

    </div>
  </section>
 <!-- End Portfolio Section -->


