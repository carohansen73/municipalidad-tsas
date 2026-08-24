@extends('layouts.app-tsas')

@include('layouts.navbar')

@section('content')


    {{-- <body id="page-top"> --}}

        <!-- Masthead-->
        <header class="masthead" id="masthead-corvina">
            <div class="container px-4 px-lg-5 ">
                <div class="row gx-4 gx-lg-5 align-items-center justify-content-center text-center">
                    <div class="d-flex  col-lg-10 align-items-center justify-content-center">
                        <div class="col-lg-8  pt-5 mt-3 ">
                            <h2 class="mont text-white font-weight-bold mb-1">PARTICIPÁ DEL SORTEO <h2>
                            {{-- <h1 class="mont text-white font-weight-bold"> <span class="mont text-highlight">24 HORAS DE LA CORVINA NEGRA</span> </h1> --}}
                            <h1 class="mont text-white font-weight-bold"> <span class="mont text-highlight">6 HORAS A LA CORVINA DE MAYOR PESO</span> </h1>
                            <p class="mont text-white-75 mt-3 mb-1">EXCLUSIVO PARA EMPLEADOS MUNICIPALES</p>
                            <hr class="divider" />
                        </div>
                        {{-- <div class="col-lg-6 logo-img">
                            <img src="{{asset("assets/img/corvina/logo.png")}}" alt="concurso de las 24hs de la Corvina Negra" >
                        </div> --}}

                    </div>

                </div>
            </div>
        </header>

          <!-- About-->
        <section class="page-section p-3 pt-5 mt-5" id="about-corvina">
            <div class="container pt-4 px-lg-5">
                <div class=" text-center">
                    <h2 class="mt-0 mont">¡Inscribite y participá del sorteo!</h2>
                    <hr class="divider" />
                </div>

                <div class="row gx-4 gx-lg-5 align-items-center">


                    <div class="col-lg-6 col-xl-6 p-2 order-1 order-lg-2">

                        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                            <div class="col-lg-12">
                                <p class="text-muted ">Sorteamos <strong>inscripciones </strong> entre los que se registren. Completá el formulario y ya estás participando.</p>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        {{ $errors->first() }}
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}<br>
                                        <strong>N° de inscripción:</strong> {{ session('numero_inscripcion') }}
                                    </div>
                                @endif

                                <form action="{{ route('sorteo.register') }}" method="POST">
                                    @csrf
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Ingrese su nombre y apellido..." required />
                                        <label for="nombre">Nombre y apellido</label>
                                    </div>
                                    <!-- DNI input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="dni" name="dni" type="number"  placeholder="Ingrese su dni..." required />
                                        <label for="dni">DNI</label>
                                    </div>

                                    <!-- Legajo input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="legajo" name="legajo" type="number"  placeholder="Ingrese su legajo..."  />
                                        <label for="legajo">Legajo </label>
                                    </div>

                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-success btn-xl" id="submitButton" type="submit">Participar</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                       <!-- Imagen / Flyer -->
                    <div class="col-lg-6 text-center p-2 order-2 order-lg-1">
                        <img src="{{asset("assets/img/corvina/6h.jpg")}}" alt="concurso de las 24hs de la Corvina Negra" >
                    </div>
                </div>
            </div>
        </section>

        @if(session('alert_type'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        icon: "{{ session('alert_type') }}",
                        title: "{{ session('alert_title') }}",
                        html: "{!! session('alert_message') !!}",
                        confirmButtonText: 'Aceptar'
                    });
                });
            </script>
        @endif

{{--
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
 --}}


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js" integrity="sha384-4uF2RacCiYCSiOxfdJJQXtOOklQXFFrEsRCguJZTQOMzXnaCxfnbcW/UyJtmQI2G" crossorigin="anonymous"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

