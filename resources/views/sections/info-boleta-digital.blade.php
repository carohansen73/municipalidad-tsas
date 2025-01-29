@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')



    <section id="municipio mt-4">

        <main id="main" >

            <div id="boleta-digital">
                <div class="portada text-md-left text-sm-center ">
                    <div class="background-portada">   </div>
                </div>
            </div>

                <section class="team">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <p >Sumate a la Boleta Digital: Simple, rápido y sustentable</p>
                        </div>

                        {{-- <h4 class="a-blue"> <strong> UN CAMBIO NECESARIO </strong> </h4> --}}

                        <p> Cada año para imprimir las tasas municipales utilizamos <strong>1100</strong> resmas de papel, lo que equivale a <strong>550.000</strong> hojas impresas.
                            Cada resma pesa 2,3 kg. Para producir <strong> 1000 </strong>kg. de papel se requiere talar <strong> 15 </strong> árboles y <strong>150.000</strong> litros de agua.
                            Con este cambio, reducimos el impacto ambiental y modernizamos nuestros procesos."
                        </p>

                        <div class="container mb-5">
                            <div class="row d-flex justify-content-center mt-4">

                                <div class=" col-md-3 col-12 d-flex flex-column align-items-center mb-2">
                                    <div class="column text-center">
                                        <div class=" d-flex align-items-stretch justify-content-center p-4 icon-png">
                                            <img src="assets/img/boleta-digital/doc.png" class="img-fluid icono" alt="">
                                        </div>
                                        <div class="row">
                                            <div class="col-5 ">
                                                <div class="fs-4 fw-bold"> 1.100  </div>
                                                <div> Resmas </div>
                                            </div>
                                            <div class="col-2 ">
                                                <div class="fs-4 fw-bold">  = </div>
                                            </div>
                                            <div class="col-5 ">
                                                <div class="fs-4 fw-bold"> 2.530 </div>
                                                <div> Kg. de papel </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-1 d-none d-md-flex flex-column align-items-center  mb-2">
                                    <div class="column text-center">
                                        <div class=" d-flex align-items-stretch justify-content-center icon-png mt-5">
                                            <img src="assets/img/boleta-digital/arrow.png" class="img-fluid icono mt-2" alt="">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-2 col-5 d-flex flex-column align-items-center mb-2">
                                    <div class="column text-center align-items-stretch">
                                        <div class=" d-flex align-items-stretch justify-content-center p-4 icon-png">
                                            <img src="assets/img/boleta-digital/tree.png" class="img-fluid icono" alt="">
                                        </div>
                                        <div class="fs-4 fw-bold "> 38 </div>
                                        <div> Arboles </div>
                                    </div>
                                </div>

                                <div class="col-md-1 col-2 d-flex flex-column align-items-center mb-2">
                                    <div class="column text-center align-items-stretch">
                                        <div class="align-items-center ">
                                            <div class="fs-4 fw-bold " style="margin-top: 50px;"> +

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 col-5 d-flex flex-column align-items-center mb-2">
                                    <div class="column text-center">
                                        <div class=" d-flex align-items-stretch justify-content-center p-4 icon-png">
                                            <img src="assets/img/boleta-digital/water.png" class="img-fluid icono" alt="">
                                        </div>
                                        <div class="fs-4 fw-bold"> 380.000 </div>
                                        <div> Lts. de agua </div>
                                    </div>
                                </div>

                                <div class="col-1 d-none d-md-flex flex-column align-items-center mb-2">
                                    <div class="column text-center align-items-stretch">
                                        <div class="align-items-center ">
                                            <div class="fs-4 fw-bold " style="margin-top: 50px;">
                                                |

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 col-12 d-flex flex-column align-items-center mb-2">
                                    <div class="column text-center">
                                        <div class=" d-flex align-items-stretch justify-content-center p-4 icon-png">
                                            <img src="assets/img/boleta-digital/shade.png" class="img-fluid icono" alt="">
                                        </div>
                                        <div class="fs-4 fw-bold"> 1.520 </div>
                                        <div>m2 de sombra </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </section>
                {{-- <section style="background:whitesmoke;">
                    <div class="container " data-aos="fade-up">


                        <div class="">
                            <h4 class="a-blue mb-4"> <strong> ¿QUE TENÉS QUE HACER?</strong> </h4>
                            <div class="container ">
                                <div class=" col-12">
                                    <video style="width: 100%;"  src="assets/img/boleta-digital/InstructivoPortal480.mp4" autoplay="autoplay" loop="loop" controls>
                                        Tu navegador no admite el elemento <code>video</code>.
                                    </video>
                                </div>
                            </div>
                        </div>


                    </div>
                </section> --}}
                <section style="background:whitesmoke;">
                    <div class="container mb-5" data-aos="fade-up">


                            {{-- <h4 class="a-blue mb-4"> <strong> ¿QUE TENÉS QUE HACER? </strong> </h4> --}}
                        <div class="row col-lg-12 mb-lg-5 mb-3 ">
                            <div class="col-lg-3">
                                <div class="instructivo_icono pb-2"> <i class="bi bi-info-circle"></i> </div>
                                <h4 class="a-blue mb-2"> <strong> PASO A PASO </strong> </h4>
                                <div class="instructivo_descripcion p-2">  Seguí el instructivo y accedé a tus a tus boletas online. </div>
                            </div>

                            <div class="col-lg-9">


                                {{-- Acordeon bootstrap --}}
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                <strong> <span class="span-style-a pe-2"> Paso 1: </span> Ingresá al Portal </strong>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse ">
                                            <div class="accordion-body ps-md-5 ms-md-5">
                                                Ingresa al <a href="https://autogestion.tresarroyos.gov.ar/" target="_blank"> Portal de Autogestión </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                <strong>    <span class="span-style-a  pe-2">    Paso 2: </span> Registrate   </strong>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                            <div class="accordion-body ps-md-5 ms-md-5">
                                                Haz clic en "Registrarme" y completa el registro con tu CUIL/CUIT (sin espacios ni guiones). <br>
                                                Asegúrate de utilizar un <strong> correo electrónico válido</strong>, ya que este será utilizado para validar tu cuenta.<br>
                                                Ingresa tu número de celular, sin el 0 ni el 15.<br>
                                                Ingresa la clave que utilizarás para acceder al portal y repítela.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                <strong>    <span class="span-style-a pe-2">    Paso 3: </span> Valida tu cuenta    </strong>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                            <div class="accordion-body ps-md-5 ms-md-5">
                                                El sistema enviará un correo electrónico de confirmación. Haz clic en el enlace de confirmación para que puedas ingresar al portal utilizando el CUIT/CUIL y la clave que registraste. <br>
                                                Si tienes inconvenientes, comunícate con computos@tresarroyos.gov.ar, indicando tus datos (CUIL/CUIT, correo electrónico y nombre completo).
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                                <strong>    <span class="span-style-a pe-2">    Paso 4: </span> Agregá tus imponibles    </strong>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                            <div class="accordion-body ps-md-5 ms-md-5">
                                                Añade los imponibles (inmuebles, roados, comercios, contribuyentes y cuentas de cementerio) que desees consultar. <br>
                                                También puedes suscribirte a la boleta digital desde el menú <strong>Trámites > Boleta Digital > Alta.</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Fin Acordeon bootstrap --}}
                            </div>
                        </div>










                    </div>
                </section>
















                <section class="team">
                    <div class="container" data-aos="fade-up">




                        <div class=" mt-5">

                            <img src="assets/img/boleta-digital/protege.jpg" class="img-fluid " alt="">
                        </div>
                        {{-- <h4 class="a-blue"> <strong> BENEFICIOS PARA VOS Y EL PLANETA </strong> </h4>

                        <p> Ahorro de tiempo al no esperar la boleta en formato físico. </p>
                        <p> Contribución a una gestión más sustentable.</p> --}}

                    </div>
                </section>

















    </main><!-- End #main -->






</section>

