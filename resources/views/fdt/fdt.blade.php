
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





     <!-- ======= ENTRADAS  PROXIMAMENTE! ======= --> <!-- HABILITAR TMB BTN NAVBAR -->

     <section id="fdt-tickets" class="tickets">
        <div class="container" data-aos="zoom-in">
            <div class="text-center">
                <div class=" text-center">
                    {{-- <div class="bg-brushstroke bg-brushstroke-yl">
                        <p>Tickets</p>
                    </div> --}}
                </div>
                <div class=" content mt-5">

                    <p> <strong> ¡Conseguí tus tickets y viví la Fiesta! </strong>  </p>

                    <p> Ahora podés comprar las entradas para disfrutar en vivo de tus artistas favoritos, de forma online o presencial. </p>
                    <p><strong>Venta presencial:</strong>
                       (A partir del <strong>lunes 17 de febrero</strong>).
                       Acercate al Centro Cultural La Estación (Ituzaingó 320).
                     </p>

                     <p><strong>🕘 Horarios de venta presencial:</strong><br>
                        🔹 <strong>Del 17 al 19 de febrero:</strong> Horario corrido de 8 a 22 hs.<br>
                        🔹 <strong>A partir del 20 de febrero:</strong> De 8 a 12 y de 16 a 20 hs.
                     </p>
                        <strong> Consultas: </strong>
                            {{-- WhatsApp: 2983-387153 | 2983-431472 <br> --}}
                            WhatsApp: 2983-417777 <br>
                            Email: ftrigo@tresarroyos.gov.ar</p>
                        {{-- <p><strong> También podés comprar tus tickets online 👇 </strong> </p> --}}
                         <p style="color: #2f464c;"><strong> Venta online a partir del jueves 20/02. </strong> </p>
                    <div class="row d-flex justify-content-center">
                        <div class="col-auto">
                        <a class="gr-btn" href="https://tresarroyos.boleteriadigital.com.ar/" target="_blank">Boleteria online</a>
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
                        {{-- <img class="img-fluid" src="{{asset("storage/secciones/fdt/1.jpg")}}" alt="foto-1"> --}}

                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content " data-aos="fade-right" data-aos-delay="100">

                        @foreach($licitaciones as $lic)
                            {!! $lic->descripcion !!}
                        @endforeach



                    </div>


                </div>

                {{-- btns para cada pliego
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
                </div> --}}

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
