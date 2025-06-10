
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}

<div id="juventud">
    <div class="portada-foto text-md-left text-sm-center ">
        <div class="background-portada">   </div>

        @foreach ($textos as $text)
            @if($text->seccion->nombre == "Empleo - Emprendedores")
                <h1>Oficina de Empleo y Capacitación</h1>
                @else
                <h1>{{$text->seccion->nombre}}</h1>
            @endif
        @endforeach
        {{-- <h1>Dirección de Políticas para la Juventud</h1> --}}

    </div>
</div>

{{--
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





<!-- ======= (About Section) ======= -->
<div id="juventud">
<section  class="about bg-grey">
    <div class="container" data-aos="fade-up">
        <main id="main" >
            <div class="section-title">
                <p style="color: #444444;">Dirección de Políticas para la Juventud</p>

            </div>
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 d-flex justify-content-end pe-5" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{asset("storage/secciones/juventud/descarga.jpg")}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-2 content d-flex justify-content-start align-items-center ps-5" data-aos="fade-right" data-aos-delay="100">
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

                <p>  La Dirección cuenta con un espacio llamado <strong>“Punto Digital”. </strong>
                    que tiene por objetivo democratizar el acceso a las Tecnologías de la Información y la Comunicación (TIC),
                    a través de dispositivos de acceso libre y gratuito a internet, capacitaciones, talleres, asistencia
                    en trámites como por ejemplo la validación de identidad en Mi Argentina y actividades culturales. <br>

                    Además, posee una <b> plataforma de aprendizaje virtual (PAV) </b> donde los vecinos y vecinas pueden acceder a
                    <b> cursos gratuitos con certificación.
                        <a class="" href="https://cursos.argentina.gob.ar/" target="_blank">https://cursos.argentina.gob.ar/</a>
                    </b>
                    <br>
                    En el área también se realiza el <strong> examen teórico para la licencia de conducir</strong>.
                    Pueden solicitar sus turnos por la <strong> App MiTresa o WhatsApp 2983-456538</strong>.
                    <br>
                    El horario de atención es de 07:00 a 15:00 hs y para trámites de Mi Argentina de 08:00 a 14:30 hs




                   <br>
                </p>
            </div>
        </main>
    </div>
</section>
</div>
<!-- End About Section -->


 <!-- ======= FIESTA DEL TRIGO - VIDEO (About Section) ======= -->
 <section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">

                <img src="{{asset("storage/secciones/juventud/jea.jpg")}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3 style="color: rgb(13, 116, 189);">JUVENTUD EN ACCIÓN (J.E.A)</h3>
                <p class="fst-italic"> ¡Llegó tu momento de decidir! </p>

                <p> Por primera vez en Tres Arroyos, vas a poder ser parte de un programa donde  <strong> vos y otros jóvenes </strong> van a tener la oportunidad de  <strong> proponer ideas,
                    decidir en qué se usan los recursos públicos</strong> y aportar soluciones reales para mejorar la vida en tu ciudad. 💡🌎
                </p>
                <p> No importa si estás en una institución o no,  <strong>¡acá lo que importa es tu voz y tus ganas de cambiar las cosas! </strong> 🙌</p>
                <p>
                ⚡️ Si tenés ideas, proyectos o simplemente querés ser parte de algo grande...
                </p>
                <p> 👉 <strong> <a class="" href="https://forms.gle/mXLy941nSqmsaYP39" target="_blank">Inscribite acá y sumate</a></strong> </p>

                <p> 🎥 ¿Querés saber cómo presentar tu propuesta? Mirá estos videos: </p>
                <ul>
                    <li> <a class="" href="https://www.youtube.com/watch?v=MbfIjmTLxhw" target="_blank">Cómo hacer un video pitch</a></strong> </li>
                    <li> <a class="" href="https://www.youtube.com/watch?v=Nu-bbrdYrpY" target="_blank">Estrategias de marketing para tu proyecto</a></strong> </li>
                </ul>
                <p> <strong>¡Animate a participar y hacé la diferencia! 💥</strong> </p>
            </div>
        </div>

        <div class="row d-flex  mt-2">
            <div class="col-auto">
                <a class="btn btn-sm blue-button" href={{url('/storage/secciones/juventud/BasesYCondiciones-JEA.pdf')}} target="_blank">Bases y condiciones</a>
            </div>
            <div class="col-auto">
                <a class="btn  btn-sm blue-button" href={{url('/storage/secciones/juventud/nominaDeJovenes-JEA.docx')}} target="_blank">Nómina de jóvenes</a>
            </div>
            <div class="col-auto">
                <a class="btn  btn-sm blue-button" href={{url('/storage/secciones/juventud/PlantillaPresupuesto-JEA.docx')}} target="_blank">Plantilla presupuesto</a>
            </div>
            <div class="col-auto">
                <a class="btn  btn-sm blue-button" href={{url('/storage/secciones/juventud/Modelo-JEA.docx')}} target="_blank">Modelo JEA</a>
            </div>
        </div>

        {{-- <div class="row"> --}}
            <div  class="portfolio mt-4">
                <div class="container" data-aos="fade-up">
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-3 col-md-6 portfolio-item ">
                    <div class="portfolio-wrap">
                        <img src="{{asset("storage/secciones/juventud/jead.jpeg")}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset("storage/secciones/juventud/jead.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                                {{-- <a href="https://www.instagram.com/p/C67a7GpJevw/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item ">
                    <div class="portfolio-wrap">
                        <img src="{{asset("storage/secciones/juventud/jead2.jpeg")}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset("storage/secciones/juventud/jead2.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item ">
                    <div class="portfolio-wrap">
                        <img src="{{asset("storage/secciones/juventud/jead3.jpeg")}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset("storage/secciones/juventud/jead3.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item ">
                    <div class="portfolio-wrap">
                        <img src="{{asset("storage/secciones/juventud/jead4.jpeg")}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset("storage/secciones/juventud/jead4.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

  </div>
</section>
<!-- End About Section -->




<!-- Features (Talleres) -->
<div id="juventud">
<section  class="features pt-5 bg-grey">
    <div class="container" data-aos="fade-up">
        <div class="section-title pb-1">
            <p>Programas</p>
            {{-- <h2>Dictados en el CCE</h2> --}}
        </div>

        <div class="row justify-content-center">
             <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fab fa-periscope"></i>
                    <h4> Dirección abierta para la juventud:</h4>
                    <p> A partir del mes de Mayo, la Dirección abrirá 2 sábados por mes para que los jóvenes y sus familias
                        puedan acercarse a conocer el espacio y disfrutar de los juegos disponibles como: Xbox 360, play 5,
                        uno, etc.
                       <br>
                    </p>
                </div>
            </div>

                  <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-rainbow"></i>
                    <h4> Primavera segura:</h4>
                    <p>Trabajamos en conjunto con UCESTA (Unión de Centros de Estudiantes de Tres Arroyos) y áreas municipales
                        para concientizar a la juventud previo a la fecha. Entrega de kit y charla en instituciones educativas.
                        Presencia en Claromecó (predancing y noche) con puesto de hidratación.
                       <br>
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                    <i class="bi bi-hand-thumbs-up"></i>
                    <h4> Acompañar Juventudes:</h4>
                    <p> Buscamos acompañar el compromiso de los jóvenes promoviendo actividades que sean un medio para lograr
                        un objetivo como grupo. Si están interesados pueden contactarnos por WhatsApp o redes.

                       <br>
                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="far fa-star"></i>
                    <h4>Jóvenes que inspiran: </h4>
                    <p> Programa destinado a visibilizar en redes distintos logros de nuestros jóvenes que se encuentren tanto en el distrito como cualquier lugar del país.
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
                    <i class="fas fa-umbrella-beach"></i>
                    <h4>A Toda Playa:</h4>
                    <p> Punto de encuentro gratuito con música, juegos y biblioteca móvil en las localidades balnearias del Distrito (Reta, Claromecó y Orense).
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
    <section  class="features pt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title pb-1">
                <p>Talleres</p>
                {{-- <h2>Dictados en el CCE</h2> --}}
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5 " data-aos="zoom-in" data-aos-delay="150">
                        <i class="fas fa-mobile-alt"></i>
                        <h4> Conectando generaciones: </h4>
                        <p>  El punto digital brinda el taller destinado a adultos mayores en el que aprenderán desde 0
                            manejo de celular, aplicaciones tecnológicas y uso de homebanking. Los interesados pueden
                            comunicarse por WhatsApp 2983-456538.
                        <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class="fas fa-shield-alt"></i>
                        <h4>Cibercuidados para adolescentes:</h4>
                        <p> La finalidad es prevenir y reflexionar sobre problemáticas y conductas que se dan en las redes sociales y los juegos en línea.
                            Se profundiza sobre 3 temas: ciberacoso, sexting y grooming.
                        <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class="fas fa-shield-alt"></i>
                        <h4>Cibercuidados para padres</h4>
                        <p>El objetivo de la propuesta es acercar conocimientos sobre distintas plataformas, prácticas y problemáticas que surgen alrededor del uso de dispositivos,
                            la navegación en internet y redes sociales de los jóvenes. También, buscamos brindar herramientas de prevención para que puedan detectar actitudes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class="fas fa-hand-paper"></i>
                        <h4>Ludopatía:</h4>
                        <p> En conjunto con el área de prevención de adicciones se llevará adelante un taller de prevención dirigido a todas las escuelas secundarias.
                            Se realizarán 2 encuentros con parte teórica y práctica a los que asistirán integrantes de cada centro de estudiantes
                            y referentes de los equipos de orientación escolar.
                            A su vez, se les entregarán kits para que puedan replicar la propuesta en cada establecimiento.
                        <br>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<!-- End Features Section -->


<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio bg-grey">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p>Programas, talleres y eventos</p>
            {{-- <p>Tres Arroyos</p> --}}
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">*</li>
                <li data-filter=".filter-acomp">Acompañar Juventudes</li>
                <li data-filter=".filter-inspiran">Jovenes que Inspiran</li>
                <li data-filter=".filter-tj">Tresa joven</li>
                <li data-filter=".filter-atp">A Toda Playa</li>
            </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">




            <div class="col-lg-4 col-md-6 portfolio-item filter-acomp">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/acompaniar_juventudes.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    {{-- <h4>Talleres</h4> --}}
                    {{-- <p>App</p> --}}
                    <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/acompaniar_juventudes.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/p/C67a7GpJevw/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-acomp">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/acompaniar_juventudes2.jpeg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    {{-- <h4>Muestras</h4> --}}
                    {{-- <p>App</p> --}}
                    <div class="portfolio-links">
                    <a href="{{asset("storage/secciones/juventud/acompaniar_juventudes2.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                    <a href="https://www.instagram.com/p/C67a7GpJevw/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-acomp">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/acompaniar_juventudes3.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>Presentacion</h4> --}}
                        {{-- <p>Web</p> --}}
                        <div class="portfolio-links">
                            <a href="{{asset("storage/secciones/juventud/acompaniar_juventudes3.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            <a href="https://www.instagram.com/p/C67a7GpJevw/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-acomp">
            <div class="portfolio-wrap">
                <img src="{{asset("storage/secciones/juventud/acompaniar_juventudes4.jpeg")}}" class="img-fluid" alt="">

                <div class="portfolio-info">
                {{-- <h4>App 2</h4> --}}

                <div class="portfolio-links">
                    <a href="{{asset("storage/secciones/juventud/acompaniar_juventudes4.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    <a href="https://www.instagram.com/p/C67a7GpJevw/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-inspiran">
            <div class="portfolio-wrap">
                <img src="{{asset("storage/secciones/juventud/jovenes_inspiran.jpeg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <div class="portfolio-links">
                    <a href="{{asset("storage/secciones/juventud/jovenes_inspiran.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    <a href="https://www.instagram.com/p/C8YBJx4p88p/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-inspiran">
            <div class="portfolio-wrap">
                <img src="{{asset("storage/secciones/juventud/jovenes_inspiran2.jpeg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <div class="portfolio-links">
                    <a href="{{asset("storage/secciones/juventud/jovenes_inspiran2.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                    <a href="https://www.instagram.com/p/C8YBJx4p88p/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-inspiran">
            <div class="portfolio-wrap">
                <img src="{{asset("storage/secciones/juventud/jovenes_inspiran3.jpeg")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <div class="portfolio-links">
                    <a href="{{asset("storage/secciones/juventud/jovenes_inspiran3.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    <a href="https://www.instagram.com/p/C8YBJx4p88p/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-atp">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/j1.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/j1.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/p/DEVR10hRVX-/?img_index=1" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-atp">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/j2.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/j2.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/p/DEVR10hRVX-/?img_index=1" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-atp">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/j3.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/j3.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/p/DEVR10hRVX-/?img_index=1" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-atp">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/j4.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/j4.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/p/DEVR10hRVX-/?img_index=1" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-atp">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/j5.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/j5.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/p/DEVR10hRVX-/?img_index=1" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-atp">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/j6.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/j6.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/p/DEVR10hRVX-/?img_index=1" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-tj">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/tj_1.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>Muestras</h4> --}}
                        {{-- <p>App</p> --}}
                        <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/tj_1.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/direccionjuventudtsas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-tj">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/tj_2.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>Muestras</h4> --}}
                        {{-- <p>App</p> --}}
                        <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/tj_2.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/direccionjuventudtsas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-tj">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/tj_3.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>Muestras</h4> --}}
                        {{-- <p>App</p> --}}
                        <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/tj_3.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/direccionjuventudtsas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-tj">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/tj_4.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>Muestras</h4> --}}
                        {{-- <p>App</p> --}}
                        <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/tj_4.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/direccionjuventudtsas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-tj">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/tj_5.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>Muestras</h4> --}}
                        {{-- <p>App</p> --}}
                        <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/tj_5.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/direccionjuventudtsas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-tj">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/tj_6.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>Muestras</h4> --}}
                        {{-- <p>App</p> --}}
                        <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/tj_6.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/direccionjuventudtsas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-tj">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/tj_7.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>Muestras</h4> --}}
                        {{-- <p>App</p> --}}
                        <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/tj_7.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/direccionjuventudtsas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-tj">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/tj_8.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>Muestras</h4> --}}
                        {{-- <p>App</p> --}}
                        <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/tj_8.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/direccionjuventudtsas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-tj">
                <div class="portfolio-wrap">
                    <img src="{{asset("storage/secciones/juventud/tj_9.jpeg")}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>Muestras</h4> --}}
                        {{-- <p>App</p> --}}
                        <div class="portfolio-links">
                        <a href="{{asset("storage/secciones/juventud/tj_9.jpeg")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                        <a href="https://www.instagram.com/direccionjuventudtsas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>
<!-- End Portfolio Section -->


