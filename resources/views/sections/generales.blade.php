
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}
{{-- CULTURA Y EDUCACION --}}
    @if($nombreSeccion == "cultura y educacion")

        <div id="cultura" class="portada-foto text-md-left text-sm-center ">
            <img class="foto-portada" src="assets/img/sections-portadas/cultura/cultura.jpg" alt="portada-de-la-seccion">
            <div class="background-portada">   </div>
            <img class="logos-portada" src="assets/img/sections-portadas/logos/logos.png" alt="">
            <h1>{{$nombreSeccion}}</h1>
        </div>

{{-- OTROS --}}
    @else
        <div  class="portada">

            <div class="portada-seccion ps-5">
                <div class="section-title">
                    <p style="color: rgb(140, 187, 221);">{{$nombreSeccion}}</p>
                </div>
            </div>
            <img src="assets/img/sections-background/city-removebg-preview.png" alt="" srcset="">

        </div>
    @endif

    <!-- ======= borde colorido ======= -->
    <div class="container-border">
        <div class="row">
            <div class="col-4 border-1">
            </div>
            <div class="col-4 border-2">
            </div>
            <div class="col-4 border-3">
            </div>
        </div>
    </div><!-- ======= fin borde colorido ======= -->

    {{-- CARDS CON DIFERENTES ENTIDADES --}}
    <section id="municipio">
        <main id="main" class="margen-top-navbar">

            {{-- CULTURA Y EDUCACION / entidades --}}
            @if($nombreSeccion == "cultura y educacion")
                <section class="team mb-5">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <p style="color: #d63384">Cultura</p>
                        </div>

                        <div class="row container-section-gral mb-5">
                            @foreach($secciones as $seccion)
                                @if($seccion->perteneceA->nombre == 'Cultura')
                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4">
                                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                                            <a href="{{$seccion->link}}">
                                            <div class="seccion-gral-img">
                                                <img src="assets/img/sections-portadas/{{$seccion->portada}}" class="img-fluid" alt="">
                                            </div>
                                            </a>
                                        <div class="member-info">
                                            @if($nombreSeccion == "cultura y educacion")
                                                <h4 style="color: #d63384">
                                            @else
                                                <h4>
                                            @endif
                                            {{$seccion->nombre}}</h4>
                                            {{-- <span>Chief Executive Officer</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        {{-- educacion --}}
                        <div class="section-title">
                            <p style="color: #662483">Educación</p>
                        </div>
                        <div class="row container-section-gral mb-5">
                            @foreach($secciones as $seccion)
                                @if($seccion->perteneceA->nombre == 'Educacion')
                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4">
                                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                                            <a href="{{$seccion->nombre}}">
                                            <div class="seccion-gral-img">
                                                <img src="assets/img/sections-portadas/{{$seccion->portada}}" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                        <div class="member-info">
                                            @if($nombreSeccion == "cultura y educacion")
                                                <h4 style="color: #662483">
                                            @else
                                                <h4>
                                            @endif
                                            {{$seccion->nombre}}</h4>
                                            {{-- <span>Chief Executive Officer</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section><!-- End Team Section -->
            @endif





        {{-- OTRAS SECCIONES!! / entidades -----  (VER COMO ACOMODO EL CODIGO P NO REPETIR)--}}
        @if($nombreSeccion != "cultura y educacion")
            <section class="team"> <!-- ======= Team Section ======= -->
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <p>{{$nombreSeccion}}</p>
                    </div>
                    <div class="row container-section-gral">
                        @foreach($secciones as $seccion)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <a href="{{$seccion->link}}">
                                        <div class="seccion-gral-img">
                                                <img src="assets/img/sections-portadas/{{$seccion->portada}}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                    <div class="member-info">
                                        <a href="{{$seccion->link}}"><h4>{{$seccion->nombre}}</h4>  </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section><!-- End Team Section -->
        @endif



    </main><!-- End #main -->



{{-- CULTURA Y EDUCACION --> PROXIMOS EVENTOS --}}
    @if($nombreSeccion == "cultura y educacion")

       <!-- ======= borde colorido ======= -->
       <div class="container-border">
        <div class="row">
            <div class="col-4 border-1">
            </div>
            <div class="col-4 border-4">
            </div>
            <div class="col-4 border-3">
            </div>
        </div>
    </div><!-- ======= fin borde colorido ======= -->
       <!-- ======= Team Section ======= -->
       <section id="cultura-eventos" class="team">
        <div class="container" data-aos="fade-up">

          <div class="section-title">

            <p> Próximos eventos</p>
                {{-- <h2>Descubrí los museos del partido de Tres Arroyos</h2> --}}
          </div>

          <div class="row">
              {{-- @foreach($museos as $museo)

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                      <img src="assets/img/museos/{{$museo->portada}}" class="img-fluid" alt="">
                      <div class="social">

                      <a href="https://www.facebook.com/{{$museo->fb}}" target="_blank"><i class="bi bi-facebook"></i></a>
                      <a href="https://www.instagram.com/{{$museo->ig}}" target="_blank"><i class="bi bi-instagram"></i></a>

                      </div>
                  </div>
                  <div class="member-info">
                      <h4>{{$museo->nombre}}</h4>

                     Referente:   <span> @if($museo->referente) {{$museo->referente}} @else - @endif </span>
                     Telefono/wsp:<span>   {{$museo->wsp}}</span>
                     Email:<span> @if($museo->email) {{$museo->email}} @else - @endif</span>
                     Dirección:<span> {{$museo->direccion}}</span>

                  </div>
                  </div>
              </div>
            @endforeach --}}

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="assets/img/noticias/dos.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                {{-- <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                </div> --}}
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="assets/img/noticias/jojo.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                {{-- <div class="member-info">
                  <h4>Se viene “Jo Jo Jolgorio” en el Patio Cervecero</h4>

                </div> --}}
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="400">
                <div class="member-img">
                  <img src="assets/img/noticias/tres.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                {{-- <div class="member-info">
                  <h4>Se viene “Jo Jo Jolgorio” en el Patio Cervecero</h4>
                  <span>Accountant</span>
                </div> --}}
              </div>
            </div>

          </div>

        </div>

      </section>
        <!-- ======= borde colorido ======= -->
        <div class="container-border">
            <div class="row">
                <div class="col-4 border-1">
                </div>
                <div class="col-4 border-4">
                </div>
                <div class="col-4 border-3">
                </div>
            </div>
        </div><!-- ======= fin borde colorido ======= -->
  <!-- End cultura-eventos Section -->

    {{-- Noticias correspondientes a cultura - educación --}}
    @endif




</section>

