<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    {{-- <title>{{ config('app.name') }}</title> --}}
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap4-toggle/3.6.1/bootstrap4-toggle.min.css"
          integrity="sha512-EzrsULyNzUc4xnMaqTrB4EpGvudqpetxG/WNjCpG6ZyyAGxeB6OBF9o246+mwx3l/9Cn838iLIcrxpPHTiygAA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- iCheck -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
          integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
          crossorigin="anonymous"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
          integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
          crossorigin="anonymous"/> --}}

          {{-- template estilo --}}
          <base href="{BASE_URL}">
          <meta charset="utf-8">
          <meta content="width=device-width, initial-scale=1.0" name="viewport">

          <title>Municipalidad TsAs</title>
          <meta content="" name="description">
          <meta content="" name="keywords">

          <!-- Favicons -->
          <link href="../assets/img/logo.png" rel="icon">
          <link href="../assets/img/logo.png" rel="apple-touch-icon">

          <!-- Google Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

          <!-- Vendor CSS Files -->
          <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
          <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
          <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
          <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
          <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
          <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
          <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

           <!-- Bootstrap Icons -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

        <!-- Estilo del Template -->
        {{-- @stack('page_css')
        <link href="../assets/css/style.css" rel="stylesheet"> --}}
         {{-- @stack('css/style.css') --}}

         <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        {{-- <link rel="stylesheet" href="css/style.css"> --}}

         {{-- @yield('css') --}}
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    <!-- barra de navegacion -->
    {{-- @include('layouts.navbar') --}}



<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        {{-- <section class="content"> --}}
            @yield('content')
        {{-- </section> --}}
    </div>


    {{-- Sub-footer --}}
    <div class="container telefonos-utiles mt-5">
        <div class="row">
            <div class="col-lg-4 col-4">
                <div class="row telefono">
                    <div class="col-auto telefono-icono">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="col-auto">
                        <p>Bomberos</p>
                        <span>100</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-4">
                <div class="row telefono">
                    <div class="col-auto telefono-icono">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="col-auto">
                        <div><p>Policia</p></div>
                        <div><span>101</span></div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-4">
                <div class="row telefono">
                    <div class="col-auto telefono-icono">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="col-auto">
                        <p>Atención al vecino</p>
                        <span>147</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- Fin Sub-footer  --}}



  <!-- ======= Footer ======= -->
   <!-- ======= borde colorido ======= -->
   <div class="container-border">
    <div class="row p-0">
        <div class="col-4 border-2">
        </div>
        <div class="col-4 border-5">
        </div>
        <div class="col-4 border-4">
        </div>

    </div>
</div><!-- ======= fin borde colorido ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Municipalidad de TsAs<span>.</span></h3>
              <p>
                Av. Rivadavia 1 - Tres Arroyos <br>
                <strong>Tel:</strong> (02983) 439200 <br> <strong>Consultas frecuentes:</strong> (02983) 15600000<br>
                <strong>Email:</strong> reclamos@tresarroyos.gov.ar<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links mas visitados</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <!--li><i class="bx bx-chevron-right"></i> <a href="#">Conocenos un poco</a></li-->
              <li><i class="bx bx-chevron-right"></i> <a href="https://centrodesaludtsas.com.ar/" target="_blank">Salud</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://turismo.tresarroyos.gov.ar/" target="_blank">Turismo</a></li>
              <!--li><i class="bx bx-chevron-right"></i> <a href="#">Multas</a></li-->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestros Servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">TaDi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Portal de Autogestion</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gobierno Abierto</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Multas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Reclamos</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Suscribite a nuestro boletín de noticias</h4>
            <p></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script  src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script  src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script  src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script  src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script  src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script  src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script  src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>



</body>

</html>
