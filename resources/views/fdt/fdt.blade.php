
@extends('fdt.fdt-layout-app')
<!-- barra de navegacion -->
@include('fdt.fdt-nav')

@section('content')


{{-- PORTADA --}}
<div id="fiesta-del-trigo">

    <div id="fdt">
        <div class="portada-foto text-md-left text-sm-center ">
        </div>
    </div>

    {{--
    <section id="fdt-descripcion" class="fdt-descripcion">

        <img class="foto-portada" src="{{asset("storage/secciones/fdt/1.jpg")}}" alt="foto-1">

    </section> --}}



    {{-- LINE UP --}}



        <!-- ======= Portfolio Section ======= -->
    <section id="fdt-line-up" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class=" text-center">
                <div class="bg-brushstroke bg-brushstroke-gr">
                    <p>Line up</p>
                </div>
            </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">*</li>
                <li data-filter=".filter-app">07 mar</li>
                <li data-filter=".filter-card">08 mar</li>
                <li data-filter=".filter-web">09 mar</li>
            </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <img src="{{asset("storage/fdt/3.png")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                {{-- <h4>Talleres</h4> --}}
                {{-- <p>App</p> --}}
                <div class="portfolio-links">
                    <a href="{{asset("storage/fdt/3.png")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                    {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                <img src="{{asset("storage/fdt/2.png")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    {{-- <h4>Muestras</h4> --}}
                    {{-- <p>App</p> --}}
                    <div class="portfolio-links">
                    <a href="{{asset("storage/fdt/2.png")}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                    {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
                <img src="{{asset("storage/fdt/3.png")}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                {{-- <h4>Presentacion</h4> --}}
                {{-- <p>Web</p> --}}
                <div class="portfolio-links">
                    <a href="{{asset("storage/fdt/3.png")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <img src="{{asset("storage/fdt/2.png")}}" class="img-fluid" alt="">

                <div class="portfolio-info">
                {{-- <h4>App 2</h4> --}}

                <div class="portfolio-links">
                    <a href="{{asset("storage/fdt/2.png")}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                </div>
                </div>
            </div>
            </div>


        </div>

        </div>
    </section>
    <!-- End LINE UP -->





    <!-- ======= GRILLA  ======= -->
    <section id="fdt-grilla" class="impact">
        <div class="container" data-aos="fade-up">

            <div class=" text-center">
                <div class="bg-brushstroke bg-brushstroke-yl">
                    <p>Grilla</p>
                </div>
            </div>

            <div class=" content">

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    @foreach($detalles as $detalle)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{$detalle->id}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$detalle->id}}" aria-expanded="true" aria-controls="panelsStayOpen-{{$detalle->id}}">
                                <strong>  {!! $detalle->titulo !!} </strong>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapse{{$detalle->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$detalle->id}}" data-bs-parent="#accordionPanelsStayOpenExample">
                            <div class="accordion-body ps-md-5 ">
                                {!! $detalle->descripcion !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>

    <!-- ======= GRILLA  ======= -->







    <!-- ======= Licitaciones  ======= -->
    <section id="fdt-licitaciones" class="about">
        <div class="container" data-aos="fade-up">

            <div class=" text-center">
                <div class="bg-brushstroke bg-brushstroke-yl">
                    <p>Licitaciones</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">

                    <img class="img-fluid" src="{{asset("storage/fdt/1.png")}}" alt="foto-1">
                    {{-- <img class="img-fluid" src="{{asset("storage/secciones/fdt/1.jpg")}}" alt="foto-1"> --}}

                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content " data-aos="fade-right" data-aos-delay="100">

                    @foreach($licitaciones as $lic)
                        {!! $lic->descripcion !!}
                    @endforeach



                </div>


            </div>

            <div class="row d-flex justify-content-center mt-2">
                <div class="col-auto">
                <a class="gr-btn" href="https://mitresa.gobdigital.com.ar/web/default" target="_blank"> Fogones </a>
                </div>
                <div class="col-auto">
                <a class="gr-btn" href="https://play.google.com/store/apps/details?id=com.GDAMiTresa.Ciudadano" target="_blank">Carros gastronómicos </a>
                </div>
                <div class="col-auto">
                    <a class="gr-btn" href="https://mitresa.gobdigital.com.ar/web/default" target="_blank">Kioscos </a>
                    </div>
                    <div class="col-auto">
                    <a class="gr-btn" href="https://play.google.com/store/apps/details?id=com.GDAMiTresa.Ciudadano" target="_blank">Cervecros locales </a>
                    </div>
                    <div class="col-auto">
                        <a class="gr-btn" href="https://play.google.com/store/apps/details?id=com.GDAMiTresa.Ciudadano" target="_blank">Carros cerveceros</a>
                        </div>

            </div>

    </div>
    </section>
    <!-- End Licitaciones -->


     <!-- ======= ENTRADAS  ======= -->
 <section id="fdt-tickets" class="impact">
    <div class="container" data-aos="zoom-in">
        <div class="text-center">
            <div class=" text-center">
                <div class="bg-brushstroke bg-brushstroke-yl">
                    <p>Tickets</p>
                </div>
            </div>
            {{-- <h3>Tickets</h3> --}}
            <p> Ahora podes adquirir lso tickets para presenciar los shows de tus artistas favoritos de manera online o presencial.</p>
            <p> Para adquirirlas de manera presencial presentate en el centro cultural "La Estación", en Ituzaingó 210, de 9 a 13 horas y de 17 a 20 horas. <br>
                Consultas por Whatsapp al 2983 387153, al 2983-431472 y a ftrigo@tresarroyos.gov.ar</p>
            <div class="row d-flex justify-content-center">
                <div class="col-auto">
                <a class="yl-btn" href="https://mitresa.gobdigital.com.ar/web/default" target="_blank">Tickets</a>
                </div>
                {{-- <div class="col-auto">
                <a class="cta-btn" href="https://play.google.com/store/apps/details?id=com.GDAMiTresa.Ciudadano" target="_blank">Descargá la App </a>
                </div> --}}

            </div>
        </div>
    </div>
</section>
<!-- ======= FIN ENTRADAS  ======= -->




    <!-- ======= INSCRIPCIONES  ======= -->
    <section id="fdt-inscripciones" class="impact">
        <div class="container" data-aos="fade-up">

            <div class=" text-center">
                <div class="bg-brushstroke bg-brushstroke-yl">
                    <p>Convocatorias</p>
                </div>
            </div>

            <div class=" content">

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    @foreach($inscripciones as $detalle)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{$detalle->id}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$detalle->id}}" aria-expanded="true" aria-controls="panelsStayOpen-{{$detalle->id}}">
                                <strong>  {!! $detalle->titulo !!} </strong>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapse{{$detalle->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$detalle->id}}" data-bs-parent="#accordionPanelsStayOpenExample">
                            <div class="accordion-body ps-md-5 ">
                                {!! $detalle->descripcion !!}
                                <div class="col-auto mt-2">
                                    <a class="yl-btn" href="https://play.google.com/store/apps/details?id=com.GDAMiTresa.Ciudadano" target="_blank">Inscripción online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>

    <!-- ======= GRILLA  ======= -->














{{-- El coordinador de la Fiesta Provincial del Trigo, Miguel Lopez de Ipiña, ratificó las licitaciones correspondientes al Patio Cervecero y Patio de Tierra, carros gastronómicos, fogones y kioscos. <br><br>

El miércoles 21 de febrero 19 horas será el turno de los cerveceros locales, carros cerveceros y carros gastronómicos; el mismo día a las 20 horas será para fogones y el jueves 22 de febrero a las 20 horas, el turno de los kioscos.<br><br>

Los pliegos se encuentran en  Ituzaingó 210 de 9 a 13 horas y de 17 a 20 horas. Consultas por Whatsapp al 2983 387153, al 2983-431472 y a ftrigo@tresarroyos.gov.ar <br><br>
<ul>
    <li>
        <strong> Cervecros locales </strong> <br>
        En patio cervecero y Patio de Tierra. Miercoles 21 de febrero - 19hs. <br>
        Pliego:  $47.000 <br>
        Canon: $330.000
    </li>
    <li>
        <strong> Carros gastronómicos </strong> <br>
        En patio cervecero y Patio de Tierra. Miercoles 21 de febrero - 19hs. <br>
        Pliego:  $47.000 <br>
        Canon: $425.000
    </li>
    <li>
        <strong> Carros cerveceros </strong> <br>
        En patio cervecero y Patio de Tierra. Miercoles 21 de febrero - 19hs. <br>
        Pliego:  $47.000 <br>
        Canon: $425.000
    </li>
    <li>
        <strong> Kioscos </strong> <br>
        En patio cervecero y Patio de Tierra. Jueves 22 de febrero - 20hs. <br>
        Pliego:  $36.000 <br>
        Canon: $330.000
    </li>
<ul> --}}







</div>   <!-- ======= fin id fiesta-del-trigo  ======= -->

















<!-- Template ocultar-mostrar información JS File -->
<script src="{{ asset('assets/js/hide-ig-divs.js') }}"></script>
