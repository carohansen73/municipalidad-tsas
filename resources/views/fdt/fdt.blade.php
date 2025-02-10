
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

                <div class="content p-3">

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">*</li>
                                @if(isset($fechas) && (count($fechas) > 0) )
                                    @foreach($fechas as $fecha)
                                        <li data-filter=".filter-{{ \Carbon\Carbon::parse($fecha)->format('Ymd') }}">{{ \Carbon\Carbon::parse($fecha)->format('d M') }}</li>
                                    @endforeach
                                @endif

                            {{-- <li data-filter=".filter-deportes">Deportes</li>
                            <li data-filter=".filter-card">Fiesta de las Colectividades</li>
                            <li data-filter=".filter-web">Fiesta del Trigo</li> --}}
                        </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        @if(isset($lineUp) && (count($lineUp) > 0))
                            @foreach($lineUp as $evento)
                                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ \Carbon\Carbon::parse($evento->fecha)->format('Ymd') }}">
                                    <div class="portfolio-wrap">
                                        <img src="{{asset("storage/fdt/".$evento->img)}}" class="img-fluid" alt="">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="{{asset("storage/fdt/".$evento->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                                                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
      </section>
     <!-- End Portfolio Section -->




     <!-- ======= ENTRADAS  ======= -->
     <section id="fdt-tickets" class="impact">
        <div class="container" data-aos="zoom-in">
            <div class="text-center">
                <div class=" text-center">
                    <div class="bg-brushstroke bg-brushstroke-yl">
                        <p>Tickets</p>
                    </div>
                </div>
                <div class=" content p-3">

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
        </div>
    </section>
    <!-- ======= FIN ENTRADAS  ======= -->









    <!-- ======= GRILLA  - PROXIMAMENTE! ======= -->
    {{-- <section id="fdt-grilla" class="impact">
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

    </section> --}}

    <!-- ======= GRILLA  ======= -->







    <!-- ======= Licitaciones  ======= -->
    <section id="fdt-licitaciones" class="about">
        <div class="container" data-aos="fade-up">

            <div class=" text-center">
                <div class="bg-brushstroke bg-brushstroke-yl">
                    <p>Licitaciones</p>
                </div>
            </div>

            <div class="content p-3">
                <div class="row  mt-3">
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
        </div>
    </section>
    <!-- End Licitaciones -->
      <!-- ======= CONVOCATORIAS  ======= -->
      {{-- <section id="fdt-convocatorias" class="impact">
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
                            <div class="accordion-body ps-md-5 row ms-0 me-0 justify-content-around">

                                <div class="col-lg-6 pt-3">
                                {!! $detalle->descripcion !!}
                                <div class="col-auto mt-2">
                                    <a class="yl-btn" href="https://play.google.com/store/apps/details?id=com.GDAMiTresa.Ciudadano" target="_blank">Inscripción online</a>
                                </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{asset("storage/fdt/convoc1.jpeg")}}" class="img-fluid" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section> --}}
      <!-- End convocatorias -->

            <!-- ======= CONVOCATORIAS  ======= -->
            <section id="fdt-convocatorias" class="impact">
                <div class="container" data-aos="fade-up">

                    <div class=" text-center">
                        <div class="bg-brushstroke bg-brushstroke-yl">
                            <p>Convocatorias</p>
                        </div>
                    </div>

                    <div class="content mt-3">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            @foreach($convocatorias as $detalle)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{$detalle->id}}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$detalle->id}}" aria-expanded="true" aria-controls="panelsStayOpen-{{$detalle->id}}">
                                        <p class="text-uppercase mb-0"> <strong >  {!! $detalle->titulo !!} </strong> </p>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse{{$detalle->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$detalle->id}}" data-bs-parent="#accordionPanelsStayOpenExample">
                                    <div class="accordion-body ps-md-5 row ms-0 me-0 justify-content-around">

                                        <div class="col-lg-6 pt-3">
                                            {!! $detalle->descripcion !!}

                                            @if($detalle->telefono)
                                                <p class="d-flex align-items-center mb-0">
                                                   <a class="btn-wsp" href="https://wa.me/549{{ str_replace('-', '', $detalle->telefono) }}?text=Hola,%20quiero%20más%20información%20sobre%20la%20convocatoria." target="_blank">
                                                        <span style="font-size: 20px; padding-right:6px; color: #FFF;"> <i class="bx bxl-whatsapp"></i></span>
                                                         <span class="detail">
                                                        {{$detalle->telefono}}
                                                        </span>
                                                    </a>
                                                </p>
                                            @endif

                                            @if($detalle->email)
                                                <p class="d-flex align-items-center mb-2">
                                                    <a class="btn-email" href="mailto:ftrigo@tresarroyos.gov.ar?subject=Consulta%20sobre%20convocatoria&body=Hola,%20quisiera%20saber%20más%20sobre...">
                                                    <span style="font-size: 20px; padding-right:6px; color: #FFF;"><i class="bi bi-envelope"></i></span>
                                                  <span class="detail"> {{$detalle->email}} </span>
                                                    </a>
                                                </p>
                                            @endif

                                            <div class="col-auto mt-2 mb-2">
                                                @if ($detalle->archivo)
                                                    <a class="yl-btn ms-0"  href="{{url('/storage/fdt/'.$detalle->archivo)}}" target="_blank">  Más info. </a>
                                                @endif
                                                @if ($detalle->link)
                                                    <a class="yl-btn" href="{{$detalle->link}}" target="_blank">Inscripción online</a>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <img src="{{asset("storage/fdt/".$detalle->img)}}" class="img-fluid" alt="{{$detalle->titulo}}">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </section>
              <!-- End convocatorias -->









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
