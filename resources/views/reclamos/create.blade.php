
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.tadi-navbar')

@section('content')

  <main id="main" class="margen-top-navbar">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Consultas / Reclamos</h2>
          <ol>
            <li><a href="tadi">TADi</a></li>
            <li>Consultas</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Cta Section ======= -->
    <section class="formularios">
        <div class="container" data-aos="fade-up">




            <div class="col-lg-8 mt-5 mt-lg-0">
            @if (isset($mensaje) && !empty($mensaje))
                <div class="alert alert-dismissible alert-info">
                 {{$mensaje}}
                </div>
            @endif

            <form action="ingresar-reclamo" method="POST" role="form" class="">
                @csrf
                <h2> Ingrese su consulta / reclamo</h2>
                <div class="row">
                    <div class="col-md-6 form-group mt-3">
                        <label>Nombre:</label>
                        <input type="text" name="nombre" class="form-control" @if (isset($usuario)) value="{{$usuario->nombre}}"@endif placeholder="Nombre" required>
                    </div>
                    <div class="col-md-6 form-group mt-3">
                        <label>Apellido:</label>
                        <input type="text" name="apellido" class="form-control" @if (isset($usuario)) value="{{$usuario->apellido}}" @endif placeholder="Apellido" required>
                    </div>
                </div>
                <div class="form-group mt-3 ">
                    <label>DNI:</label>
                    <input type="number" name="dni" class="form-control"  @if (isset($usuario)) value="{{$usuario->dni}}" @endif placeholder="DNI" required>
                    {{-- {!! Field::text('dni', $usuario->dni, ['label' => 'DNI *','maxlength' => 80]) !!} --}}
                    <div class="form-error-message dni oculto"></div>
                </div>
                <div class="form-group mt-3 ">
                    <label>Localidad:</label>
                    <input type="text" name="localidad" class="form-control" placeholder="Localidad" required>
                    {{-- {!! Field::text('localidad', null, ['label' => 'Localidad','maxlength' => 200]) !!} --}}
                </div>
                <div class="form-group mt-3 ">
                    <label>Motivo:</label>
                    <input type="text" name="titulo" class="form-control" placeholder="Motivo">
                    {{-- {!! Field::text('titulo', null, ['label' => 'Motivo del reclamo','maxlength' => 200]) !!} --}}
                </div>
                <div class="form-group mt-3 ">
                    <label>Area:</label>

                    <select name="area" class="form-control">
                      <option value="">--Seleccione una opción--</option>
                      <option value="Bromatologia">Bromatologia</option>
                      <option value="Desarrollo social">Desarrollo social</option>
                      <option value="Gestion Ambiental">Gestión Ambiental</option>
                      <option value="Obras publicas">Obras públicas</option>
                      <option value="Salud y prevencion">Salud y prevención</option>
                      <option value="Seguridad">Seguridad</option>
                      <option value="Otro">Otro</option>
                    </select>
                    {{-- {!! Field::select('area', ['' => 'Bromatologia', '' => 'Gestion Amniental', '' => 'Desarrollo social'
                    , '' => 'Seguridad'  , '' => 'Obras publicas' , '' => 'Salud y prevencion' , 'Otro' => 'otro' ], null,
                    ['empty' => 'Seleccione una opcion', 'label' => 'area *']) !!} --}}
                </div>
                <div class="form-group mt-3 ">
                    <label>Consulta/Reclamo:</label>
                    <input type="textarea" name="descripcion" class="form-control" placeholder="Ingrese el reclamo/consulta" required>
                    {{-- {!! Field::text('descripcion', null, ['label' => 'Reclamo/consulta','maxlength' => 800]) !!} --}}
                </div>
                <div class="text-center mt-3"><button class="register-button" id="tadi-register-button" type="submit">Confirmar</button></div>
            </form>

          </div>

       </div>
    </section><!-- End Cta Section -->

    {{-- <section class="inner-page">
      <div class="container">


      </div>
    </section> --}}

  </main><!-- End #main -->





