@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')
@section('content')

{{-- <section id="museos"> --}}

   {{-- <main id="main" class="margen-top-navbar"> --}}

    <div id="delegaciones" class="portada-foto text-md-left text-sm-center ">
        <img class="foto-portada" src="{{asset("storage/delegaciones/portada2.jpg")}}" alt="museo Mulazzi">
         <div class="background-portada">   </div>

        <h1 style="text-transform: uppercase;">Delegaciones</h1>
    </div>
        <!-- ======= borde colorido ======= -->
        <div class="container-border">
            <div class="row">
                <div class="col-4 border-4">
                </div>
                <div class="col-4 border-2">
                </div>
                <div class="col-4 border-1">
                </div>
            </div>
        </div><!-- ======= fin borde colorido ======= -->

     {{-- <a class="weatherwidget-io" href="https://forecast7.com/en/n38d38n60d28/tres-arroyos/" data-label_1="TRES ARROYOS" data-label_2="WEATHER" data-icons="Climacons Animated" data-days="3" data-theme="retro-sky" >TRES ARROYOS WEATHER</a>
     <script>
     !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
     </script> --}}

    <!-- ======= Team Section ======= -->


        {{-- VIDEOS --}}

            {{--
                 <section id="museo" class="team">
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
                </section>
                --}}


    {{-- end VIDEOS --}}




    <section id="seccion-gral" class="team"> <!-- ======= Team Section ======= -->
        <div class="container delegaciones" data-aos="fade-up">
            <div class="section-title">
                <p>Delegaciones</p>
                <h2>Conocé las distintas delegaciones que forman parte del partido de Tres Arroyos</h2>
            </div>
            <div class="row container-section-gral">
                @foreach($delegaciones as $del)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{$del->link}}">
                                <div class="seccion-gral-img">
                                    <img src="{{asset("storage/delegaciones/".$del->img)}}" class="img-fluid" alt="">
                                    <div class="seccion-gral-titulo">
                                        <h4>{{$del->nombre}} </h4>
                                    </div>
                                </div>
                            </a>
                            {{-- <div class="member-info">
                                <a href="{{$seccion->link}}"><h4>{{$seccion->nombre}}</h4>  </a>
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Team Section -->



<!-- End Team Section -->

</main>

</section>

