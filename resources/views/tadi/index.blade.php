
@extends('layouts.app')
   <!-- barra de navegacion -->
   @include('layouts.tadi-navbar')

@section('content')

<main id="main" class="margen-top-navbar">



    <!-- ======= portada section ======= -->
    <section id="cta" class="cta portada-tadi">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>TaDi - Tres Arroyos Digital</h3>
          <p> Accedé a los diferentes trámites y servicios digitalmente.</p>
          <a class="cta-btn" href="tadi-registro">Ingresar a TaDi</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tres Arroyos Digital</h2>
          <ol>
            <li><a href="index">Home</a></li>
            <li>TaDi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


         <!-- ======= Services Section ======= -->
    <section id="consulta" class="services reclamos">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Consulta ciudadana</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-4">
              <div class="icon"><i class="bi bi-chat-left-dots-fill"></i></div>
              <h4><a href="nuevo-reclamo">Ingresar una Consulta/reclamo</a></h4>
              {{-- {* <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> *} --}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-4">
              <div class="icon"><i class="bi bi-search"></i></div>
              <h4><a href="">Ver el estado de una consulta</a></h4>
              {{-- {* <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p> *} --}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-4">
              <div class="icon"><i class="bi bi-pencil-square"></i></div>
              <h4><a href="">Ingresar una Denuncia</a></h4>
              {{-- {* <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> *} --}}
            </div>
          </div>
        </div>
      </div>
    </section>

{{--

    <section class="inner-page">
      <div class="container">
        <p>
        {{-- @if (isset($smarty.session.USER))
          <p> Bienvenido {($smarty.session.USER)}
        @endif --}}
          {{-- Example inner page template
        </p>
      </div>
    </section>  --}}



    <section class="login-section oculto">
        <div class="container">
            <form action="tadi-login" id="form-login-tadi" method="POST" role="form" class="form-box">
                <h2> Ingresá a TaDi</h2>
                @if (isset($mensaje) && !empty($mensaje))
                    <div class="alert alert-dismissible alert-danger">
                    {{$mensaje}}
                    </div>
                @endif
                <br>
                <div class="form-group mt-3 inputbox">
                    <i class="bi bi-person-fill"></i>
                    <input type="number"  name="dni" id="dni"  minlength="7" maxlength="9" autocomplete="off" required>
                    <label >
                    DNI
                    </label>
                    <div class="form-error-message dni oculto"></div>
                </div>

                <div class="form-group mt-3 inputbox">
                    <i class="bi bi-lock-fill"></i>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                    <label >
                    Password
                    </label>
                </div>
                <div class="text-center mt-3">
                    <button class="blue-button" id="tadi-register-button" type="submit">Ingresar</button>
                </div>
                <div class=" mt-3">
                    <a class="cta-btn" href="recuperar-password">¿Olvidaste tu contraseña?</a>
                    <p> ¿No tenés cuenta?   <a class="cta-btn" href="recuperar-password">Registrate</a></p>
                </div>
            </form>
        </div>
  </section>


  </main><!-- End #main -->
  <script src="assets/js/show-login.js"></script>
