@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')
@section('content')

{{-- <section id="museos"> --}}

   <main id="main">

    <div id="cultura" class="portada-foto text-md-left text-sm-center ">
        <img class="foto-portada" src="assets/img/museos/mulazzi-portada3.jpg" alt="museo Mulazzi">
        {{-- <div class="background-portada">   </div> --}}

        <h1>Museos</h1>
    </div>
        <!-- ======= borde colorido ======= -->
        <div class="container-border">
            <div class="row">
                <div class="col-4 border-4">
                </div>
                <div class="col-4 border-2">
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
                <p style="color: #d63384">Museos</p>
                <h2>Descubrí los museos del partido de Tres Arroyos</h2>
            </div>

            <div class="row">
                @foreach($museos as $museo)

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/museos/{{$museo->portada}}" class="img-fluid" alt="">
                            <div class="social">
                            {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                            <a href="https://www.facebook.com/{{$museo->fb}}" target="_blank"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/{{$museo->ig}}" target="_blank"><i class="bi bi-instagram"></i></a>
                            {{-- <a href=""><i class="bi bi-linkedin"></i></a> --}}
                            </div>
                        </div>
                        <div class="member-info">
                                <h4 style="color: #d63384">{{$museo->nombre}}</h4>

                            Referente:   <span> @if($museo->referente) {{$museo->referente}} @else - @endif </span>
                            Telefono/wsp:<span>   {{$museo->wsp}}</span>
                            Email:<span> @if($museo->email) {{$museo->email}} @else - @endif</span>
                            Dirección:<span> {{$museo->direccion}}</span>

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

