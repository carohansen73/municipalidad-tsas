<!DOCTYPE html>
<html>
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-N26BR9CS5F"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-N26BR9CS5F');
        </script>
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
        {{--ARRIBA--}}
        <base href="{BASE_URL}">
        {{--ABAJO--}}
        {{-- <base href="{{ env('APP_URL') }}/"> --}}
        {{----}}
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="_token" content="{{ csrf_token() }}">
        <title>Municipalidad TsAs</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Swiper carousels -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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



        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fdt.css') }}">

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
        <!-- barra de navegacion -->
        {{-- @include('fdt.fdt-navbar') --}}



    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            {{-- <section class="content"> --}}
                @yield('content')
            {{-- </section> --}}
        </div>


        {{-- Sub-footer --}}
        <div class="container telefonos-utiles mt-5">
            <div class="row">
                <div class="col-lg-3 col-3">
                    <div class="row telefono">
                        <div class="col-auto telefono-icono bomberos">
                            <img src="{{asset("assets/img/logos/bomberos.png")}}">
                            {{-- <i class="fas fa-phone"></i> --}}
                        </div>
                        <div class="col-auto  text-center">
                            <p>Bomberos</p>
                            <span style="color: #db3232;">100</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-3">
                    <div class="row telefono">
                        <div class="col-auto telefono-icono policia">
                            <img src="{{asset("assets/img/logos/police2.png")}}">
                        </div>
                        <div class="col-auto  text-center">
                            <div><p>Policia</p></div>
                            <div><span style="color: rgb(13, 116, 189);">101</span></div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-3">
                    <div class="col d-flex justify-content-center ">
                        <div class="telefono">
                            <div class="col-auto telefono-icono ambulancia">
                                <img src="{{asset("assets/img/logos/ambulancia.png")}}">
                            </div>
                            <div class="col-auto text-center">
                                <p>Ambulancia</p>
                                <p><span style="color: #53c04d;">107</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-3">
                    <div class="row telefono">
                        <div class="col-auto telefono-icono atencion">
                            <img src="{{asset("assets/img/logos/atencion.png")}}">
                        </div>
                        <div class="col-auto  text-center">
                            <p>Atención al vecino</p>
                            <span style="color: #7b319bb8;">147</span>
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
                    <img src="{{asset("assets/img/logos/tsas-manual.png")}}" alt="" class="img-fluid">
                    <br>
                    <p>
                        Av. Rivadavia 1 - Tres Arroyos <br>
                        <strong>Tel:</strong> (02983) 439200 <br> <strong>Consultas frecuentes:</strong> (02983) 15600000<br>
                        <strong>Email:</strong> reclamos@tresarroyos.gov.ar<br>
                    </p>
                    <div class="social-links mt-3">
                         <a href="https://twitter.com/TresArroyosMun" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/municipalidaddetresarroyos" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/municipalidadtresarroyos/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="https://whatsapp.com/channel/0029VaNtxbS77qVaO8CjH32K" target="_blank" class="youtube"><i class="bx bxl-whatsapp"></i></a>
                        {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                    </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Links mas visitados</h4>
                    <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                    <!--li><i class="bx bx-chevron-right"></i> <a href="#">Conocenos un poco</a></li-->
                    <li><i class="bx bx-chevron-right"></i> <a href="https://centrodesaludtsas.com.ar/" target="_blank">Salud</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="https://centrodesalud.com.ar/noticia/anotate-para-donar" target="_blank">Doná sangre</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="https://tresarroyos.itconsultsa.com/login" target="_blank">Telemedicina</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="https://resultados.ibta.com.ar/shift/lis/ibta/elis/s01.iu.web.Login.cls?config=HOSPITAL" target="_blank">Laboratorio - resultados</a></li>


                    {{-- <li><i class="bx bx-chevron-right"></i> <a href="https://turismo.tresarroyos.gov.ar/" target="_blank">Turismo</a></li> --}}

                    <!--li><i class="bx bx-chevron-right"></i> <a href="#">Multas</a></li-->
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nuestros Servicios</h4>
                    <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="https://mitresa.gobdigital.com.ar/ciudadano/login">MiTresa</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="https://autogestion.tresarroyos.gov.ar/">Portal de Autogestion</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/transparencia-fiscal">Gobierno Abierto</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="https://mitresa.gobdigital.com.ar/ciudadano/login">Multas</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="https://mitresa.gobdigital.com.ar/ciudadano/login">Reclamos</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 ">
                    <div class="footer-links">
                        <h4>Uso interno</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://docs.google.com/forms/d/e/1FAIpQLSdBlTfCFQKjt6NCLKJsBUvWyJdQc_odUCCUd-gMFKZ5zGr9RQ/viewform?usp=sharing">Gestión playas 2024/2025</a></li>
                        </ul>
                    </div>
                    <div class="footer-newsletter">

                        <h4>Suscribite a nuestro canal de difusión</h4>

                        <div class="canal-difusion pb-4">
                            <a href="https://whatsapp.com/channel/0029VaNtxbS77qVaO8CjH32K" target="_blank" > Suscribirme </a>
                        </div>
                    </div>
                    {{-- <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form> --}}


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
                Creado por <a href="/">Centro de Computos</a>
            </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="https://whatsapp.com/channel/0029VaNtxbS77qVaO8CjH32K" target="_blank" class="back-to-top d-flex align-items-center justify-content-center" style="margin-bottom: 96px;"><i class="bx bxl-whatsapp"></i></a>
        <a href="https://www.instagram.com/municipalidadtresarroyos/" target="_blank" class="back-to-top d-flex align-items-center justify-content-center mb-5"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.facebook.com/municipalidaddetresarroyos" target="_blank" class="back-to-top d-flex align-items-center justify-content-center"><i class="bx bxl-facebook"></i></a>

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

        <!-- Swiper js -->
        {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> --}}

    </body>

</html>
