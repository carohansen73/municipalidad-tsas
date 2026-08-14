
@extends('fdt.fdt-layout-app')
<!-- barra de navegacion -->
@include('fdt.fdt-nav')

@section('content')


{{-- PORTADA --}}
<div id="fiesta-del-trigo">

    {{-- <div class="hero-wrapper"> --}}

        {{-- <div class="hero-sticky"> --}}
            <div id="fdt">
                <div class="portada-foto text-md-left text-sm-center ">
                </div>
            </div>


            {{-- Scroll trigger --}}
            <div class="marquee-section">
                <div class="marquee-track">
                    <p class="mb-0 pe-4 me-5">
                        <span class="pe-2"> Fiesta Provincial del Trigo </span> <span class="pe-2"> • </span>
                        <span class="pe-2">  5, 6, 7 y 8 de marzo </span> <span class="pe-2"> • </span>
                        <span class="pe-2"> Tres Arroyos </span>
                    </p>
                    <p class="mb-0 pe-4 me-5">
                        <span class="pe-2"> Fiesta Provincial del Trigo </span> <span class="pe-2"> • </span>
                        <span class="pe-2">  5, 6, 7 y 8 de marzo </span> <span class="pe-2"> • </span>
                        <span class="pe-2"> Tres Arroyos </span>
                    </p>
                </div>
            </div>
        {{-- </div>
    </div> --}}

{{-- VIVI LA EXPERIENCIA --}}

    <section class="experiencia-section">
        <div class="experiencia-noise"></div>
        <div class="experiencia-content container" data-aos="fade-up">
            <div class="text-center">
                <div class="bg-brushstroke experiencia-title">
                    <p> VIVÍ LA EXPERIENCIA</p>
                </div>
            </div>
            <div class="experiencia-video mt-2">
                <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fmunicipalidaddetresarroyos%2Fvideos%2F1562791877764376%2F&show_text=false&width=560&t=0"
                 style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true">
                </iframe>
            </div>
        </div>
    </section>



    {{-- LINE UP --}}



        <!-- ======= Portfolio Section ======= -->
        <section id="fdt-line-up" class="portfolio">
            <div class="container">

                <div class=" text-center">
                    <div class="bg-brushstroke bg-brushstroke-gr" id="line-up">
                        <p>Line up</p>
                    </div>
                </div>

                <div class="content p-3"  data-aos="fade-up">

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


     <!-- ======= ENTRADAS  PROXIMAMENTE! ======= --> <!-- HABILITAR TMB BTN NAVBAR -->
    <section id="fdt-tickets" class="tickets">
        <div class="container" >
            {{-- data-aos="zoom-in" --}}
            <div class="text-center">
                <div class="title">
                    <img src="{{asset("storage/fdt/h1-tickets.jpg")}}" class="img-fluid" alt="">
                </div>
                <div class="content">
                    <p> {!! $tickets->descripcion !!} </p>
                </div>
            </div>
        </div>
        <div class="container my-4">
            <div class="row justify-content-center">

                <!-- Card 1 -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow card-presencial">
                        <img src="{{asset("storage/fdt/entradas-presencial.jpg")}}" class="card-img-top" alt="venta presencial">

                        <div class="card-body pt-4 pb-4">
                            {{-- <h3 class="card-title">Venta presencial</h3> --}}
                            <p class="card-text">
                                <i class="far fa-calendar-alt me-1"></i>
                               A partir del {{ \Carbon\Carbon::parse($tickets->fecha_inicio_presencial)->format('d-m-Y') }}
                            </p>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt me-1"></i>
                                {!! $tickets->lugar_presencial !!}
                            </p>
                            <p class="card-text mb-0">
                               <i class="far fa-clock me-1"></i>
                                Horarios: <br>
                            </p>
                                <p class="card-text ms-5">
                                {!! $tickets->horarios_presencial !!}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow card-online">
                        <img src="{{asset("storage/fdt/entradas-online.jpg")}}" class="card-img-top" alt="venta online">
                        <div class="card-body d-flex flex-column pt-4 pb-4">
                              <p class="card-text">
                                <i class="far fa-calendar-alt me-1"></i>
                               A partir del {{ \Carbon\Carbon::parse($tickets->fecha_inicio_online)->format('d-m-Y H:i') }}
                            </p>
                            <p class="card-text small mb-4">
                                Comprá tus entradas de forma rápida y segura desde cualquier dispositivo.
                            </p>
                            <div class="row d-flex justify-content-center mt-auto">
                                <div class="col-12">
                                <a class="gr-btn w-100 text-center text-uppercase" href="https://tresarroyos.boleteriadigital.com.ar/" target="_blank">Boleteria online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 - Contacto -->
                <div class="col-md-8 mb-4">
                    <div class="card shadow text-center h-100 card-contacto">
                        <div class="card-body py-4">
                            <h3 class="card-title text-uppercase mb-5">
                                Contacto
                            </h3>
                            <div class="row justify-content-around mt-4">
                                <!-- WhatsApp -->
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <a href="https://wa.me/549{{ preg_replace('/\D/', '', $tickets->whatsapp) }}"
                                    target="_blank"
                                    class="text-decoration-none">
                                        <div class="contact-icon bg-success text-white mx-auto mb-2">
                                            <i class="fab fa-whatsapp"></i>
                                        </div>
                                        <p class="mb-0 fw-semibold">
                                            WhatsApp
                                        </p>
                                        <p class="text-muted">
                                            {{ $tickets->whatsapp }}
                                        </p>
                                    </a>
                                </div>
                                <!-- Email -->
                                <div class="col-12 col-md-4">
                                    <a href="mailto:{{ $tickets->email }}"
                                    class="text-decoration-none">

                                        <div class="contact-icon bg-primary text-white mx-auto mb-2">
                                            <i class="far fa-envelope"></i>
                                        </div>

                                        <p class="mb-0 fw-semibold">
                                            Email
                                        </p>

                                        <p class="text-muted">
                                            {{ $tickets->email }}
                                        </p>
                                    </a>
                                </div>

                            </div>

                        </div>
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

    <!-- ======= END GRILLA  ======= -->




    <!-- ======= Licitaciones  ======= -->
    <section id="fdt-licitaciones" class="about">
        <div class="container" data-aos="fade-up">

            <div class=" text-center">
                <div class="bg-brushstroke bg-brushstroke-gr">
                    <p>Licitaciones</p>
                </div>
            </div>

            <div class="content p-3">
                <div class="row  mt-3">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img class="img-fluid" src="{{asset("storage/fdt/1.png")}}" alt="foto-1">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content " data-aos="fade-right" data-aos-delay="100">
                        @foreach($licitaciones as $lic)
                            {!! $lic->descripcion !!}
                            <div class="row d-flex  mt-2">
                                @foreach ($lic->archivos as $archivo)
                                    <div class="col-auto">
                                        <a class="gr-btn"  href="{{ asset('storage/' . $archivo->archivo) }}" target="_blank">{{ $archivo->titulo }} </a>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Licitaciones -->




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



</div>   <!-- ======= fin id fiesta-del-trigo  ======= -->


<!-- Template ocultar-mostrar información JS File -->
<script src="{{ asset('assets/js/hide-ig-divs.js') }}"></script>
