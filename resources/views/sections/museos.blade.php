
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')

{{-- <section id="museos"> --}}



   <main id="main" class="margen-top-navbar">






     {{-- <a class="weatherwidget-io" href="https://forecast7.com/en/n38d38n60d28/tres-arroyos/" data-label_1="TRES ARROYOS" data-label_2="WEATHER" data-icons="Climacons Animated" data-days="3" data-theme="retro-sky" >TRES ARROYOS WEATHER</a>
     <script>
     !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
     </script> --}}



      <!-- ======= Team Section ======= -->
     <section id="museo" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <p>Museos</p>
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
                    <h4>{{$museo->nombre}}</h4>

                   Referente:   <span> @if($museo->referente) {{$museo->referente}} @else - @endif </span>
                   Telefono/wsp:<span>   {{$museo->wsp}}</span>
                   Email:<span> @if($museo->email) {{$museo->email}} @else - @endif</span>
                   Dirección:<span> {{$museo->direccion}}</span>

                </div>
                </div>
            </div>
          @endforeach

          {{-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div> --}}

        </div>

      </div>

    </section>

    <section class="mapa">
        <iframe src="https://www.google.com/maps/d/embed?mid=1py8p76MKM8J5PEnz1ueRuM87lJHVxvI&ehbc=2E312F&noprof=1"  height="480"></iframe>
    </section>



<!-- End Team Section -->

</main>

</section>

