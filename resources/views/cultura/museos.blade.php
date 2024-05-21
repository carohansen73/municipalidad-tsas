@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')
@section('content')

{{-- <section id="museos"> --}}

    <div id="museos">
        <div class="portada-foto text-md-left text-sm-center ">
            <div class="background-portada">   </div>
                {{-- <h1>Museos</h1> --}}
        </div>
    </div>
        <!-- ======= borde colorido ======= -->
        <div class="container-border">
            <div class="row">
                <div class="col-4 border-1">
                </div>
                {{-- <div class="col-4 border-4">
                </div> --}}
                <div class="col-4 border-6">
                </div>
                <div class="col-4 border-5">
                </div>
            </div>
        </div><!-- ======= fin borde colorido ======= -->

     {{-- <a class="weatherwidget-io" href="https://forecast7.com/en/n38d38n60d28/tres-arroyos/" data-label_1="TRES ARROYOS" data-label_2="WEATHER" data-icons="Climacons Animated" data-days="3" data-theme="retro-sky" >TRES ARROYOS WEATHER</a>
     <script>
     !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
     </script> --}}

    <!-- ======= Team Section ======= -->
    <section id="museo" class="team">
        <div class="container mb-5" data-aos="fade-up">

            <div class="section-title">
                <p >Museos</p>
                <h2>Descubrí los museos del partido de Tres Arroyos</h2>
            </div>

            <div class="row">
                @foreach($museos as $museo)

                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <a href="{{$museo->video}}" target="_blank">
                            <video width="100%" height="100%" muted>
                                <source src="assets/img/museos/{{$museo->portada}}" type="video/mp4">
                                {{-- <source src="ruta_del_video.webm" type="video/webm"> --}}
                                <!-- Texto alternativo -->
                              </video>
                            </a>
                            {{-- <img src="assets/img/museos/{{$museo->portada}}" class="img-fluid" alt=""> --}}
                            {{-- <div class="social">
                                @if($museo->fb)
                                    <a href="https://www.facebook.com/{{$museo->fb}}" target="_blank"><i class="bi bi-facebook"></i></a>
                                @endif
                                @if($museo->ig)
                                    <a href="https://www.instagram.com/{{$museo->ig}}" target="_blank"><i class="bi bi-instagram"></i></a>
                                @endif
                                @if($museo->sitio_web)
                                    <a href="{{$museo->sitio_web}}" target="_blank"><i class="bi bi-globe"></i></a>
                                @endif
                            </div> --}}
                        </div>
                        <div class="member-info">
                            <h4 style="color: #000">{{$museo->nombre}}</h4>

                            @if($museo->referente) Referente: </strong> <span>{!! $museo->referente !!} </span>@endif
                            @if($museo->wsp)Telefono/wsp:<span>   {{$museo->wsp}}</span> @endif
                            @if($museo->email)Email:<span> {{$museo->email}} </span> @endif
                            @if($museo->direccion)Dirección:<span> {!! $museo->direccion !!}</span> @endif

                            Redes Sociales:
                            @if($museo->fb)
                                <span><a href="https://www.facebook.com/{{$museo->fb}}" target="_blank"><i class="bi bi-facebook"></i> {{$museo->fb}} </a> </span>
                            @endif
                            @if($museo->ig)
                                <span><a href="https://www.instagram.com/{{$museo->ig}}" target="_blank"><i class="bi bi-instagram"></i> {{$museo->ig}} </a> </span>
                            @endif
                            @if($museo->sitio_web)
                                <span><a href="{{$museo->sitio_web}}" target="_blank"><i class="bi bi-globe"></i> {{$museo->sitio_web}} </a> </span>
                            @endif

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- End container -->



        {{-- VIDEOS --}}

            <div class="videos p-3">
                <div class="container" data-aos="fade-up">
                    <div class="section-title mt-5 ">
                        <p style="color: #d63384">Videos</p>
                        <h2> Mirá más videos en <a href="https://www.youtube.com/@museoyfototecareta" target="_blank"> youtube- @museoyfototecareta -</a> </h2>
                    </div>

                    <section id="hero" class="d-flex align-items-center justify-content-center pb-5">

                        <video  id="video" src="assets/img/museos/MUBATA.mp4" autoplay="autoplay" loop="loop" muted="muted">
                            Tu navegador no admite el elemento <code>video</code>.
                        </video>
                    </section>
                </div>
            </div>


    {{-- end VIDEOS --}}


    </section>

    <section id="museo" class="team">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <p style="color: #d63384">Ubicación</p>
                {{-- <h2>Descubrí los museos del partido de Tres Arroyos</h2> --}}
            </div>
            <div class="mapa">


                <iframe src="https://www.google.com/maps/d/embed?mid=1py8p76MKM8J5PEnz1ueRuM87lJHVxvI&ehbc=2E312F&noprof=1"  height="480"></iframe>
            </div>
        </div>
    </section>



<!-- End Team Section -->

</main>

</section>
  <!-- Modal para ver evento -->
  <script src="{{ asset('assets/js/play-video.js') }}"></script>

