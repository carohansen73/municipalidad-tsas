
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.tadi-navbar')

@section('content')

  <main id="main" class="margen-top-navbar">
   <!-- ======= Consultas/reclamos Section ======= -->
   <section id="consulta" class="services reclamos">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Seccion</h2>
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
</main><!-- End #main -->


