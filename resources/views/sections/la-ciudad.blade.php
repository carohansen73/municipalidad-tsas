
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')
{{-- PORTADA --}}

<div id="la-ciudad">
    <div class="portada-foto text-md-left text-sm-center ">
        {{-- @if(isset($portada))
        @foreach($portada as $p)
        <img class="foto-portada" src="{{asset("storage/secciones/".$p->img)}}" alt="portada-de-la-seccion">
        @break
        @endforeach --}}
        <div class="background-portada">   </div>
        {{-- <img class="logos-portada" src="assets/img/sections-portadas/logos/logos.png" alt=""> --}}
        @foreach ($textos as $text)
            @if($text->seccion->nombre == "Empleo - Emprendedores")
                <h1>Oficina de Empleo y Capacitación</h1>
                @else
                <h1>{{$text->seccion->nombre}}</h1>
            @endif
        @endforeach
        {{-- @endif --}}
    </div>
</div>
    <!-- ======= borde colorido ======= -->
    <div class="container-border">
        <div class="row">
            <div class="col-4 border-5">
            </div>

            <div class="col-4 border-1">
            </div>
            <div class="col-4 border-6">
            </div>
        </div>
    </div>
    <!-- ======= fin borde colorido ======= -->
{{-- FIN PORTADA --}}



{{-- Bienvenidos a Tres Arroyos, donde hay lugar para todos
Desde el interior de la provincia, proyectamos nuestra fuerza productiva, a costa del esfuerzo, trabajo continuo y un parque industrial reconocido en todo el país,
con más de 80 empresas radicadas, llevando a Tres Arroyos al mundo.
Somos reconocidos como la capital nacional del trigo y por eso festejamos todos los años la Fiesta Provincial del Trigo.
Somos el campo, la industria, el comercio y el trabajo de cada uno de nuestros vecinos.
Somos un distrito hermoso para recorrer, nuestras playas extensas, pueblos rurales, muchísima naturaleza e historias por conocer.
 Tenemos museos, teatro, instituciones culturales, arquitectura y monumentos esplendidos.
Somos cuna de deportistas y clubes de alto nivel, como también instituciones que trabajan incansablemente por el bien común. Eso nos caracteriza, como tresarroyenses.
Somos un distrito de cooperativas y emprendedores, el espíritu de trabajo articulado y de comunidad está presente en nuestro gen tresarroyense.
Somos todas las colectividades, que han hecho de nuestra ciudad su hogar para toda la vida. Tenemos circuitos para que conozcas nuestras raíces a través de ellos.

Somos 140 años de historia construida por muchos vecinos ilustres.
Somos Dardo Rocha y Salvador Cabañas…
Somos la tierra que inspiró el Martin Fierro.
Somos Tres Arroyos --}}




<!-- ======= LISTADO BIBLIOTECAS  ======= -->
<section id="project-front" class="about mt-lg-5">
    <div class="container" data-aos="fade-up">
        <img src="{{asset("storage/secciones/la-ciudad/port.jpg")}}" class="img-fluid" alt="">
        <div class="front-title">
            <h1> <span class="title-detail" > Bienvenidos a </span> Tres Arroyos </h1>
            <p class="mb-0"> <span class="text-detail" > Donde hay lugar para todos</span> </p>
        </div>
    </div>
</section>


{{-- <section id="project-info"  class="p-0">
    <div class="project-container" data-aos="fade-up">
        <div>
        <p>
            Desde el interior de la provincia, proyectamos nuestra fuerza productiva, a costa del <strong>esfuerzo</strong>, trabajo continuo y un parque industrial reconocido en todo el país,
            con más de <strong>80</strong> empresas radicadas, llevando a Tres Arroyos al mundo. </p>
            <p> Somos reconocidos como la capital nacional del <strong>trigo</strong> y por eso festejamos todos los años la <strong>Fiesta Provincial del Trigo</strong>. </p>
            <p> Somos el <strong>campo</strong>, la industria, el comercio y el <strong>trabajo</strong> de cada uno de nuestros vecinos. </p>
            <p> Somos un distrito hermoso para recorrer, nuestras <strong>playas extensas</strong>, pueblos rurales, muchísima naturaleza e <strong> historias</strong> por conocer.
                Tenemos museos, teatro, instituciones culturales, arquitectura y monumentos esplendidos.</p>
            <p>Somos cuna de deportistas y clubes de alto nivel, como también instituciones que trabajan incansablemente por el bien común. Eso nos caracteriza, como tresarroyenses.</p>
            <p> <strong>Somos</strong> un distrito de cooperativas y emprendedores, el espíritu de trabajo articulado y de comunidad está presente en nuestro gen tresarroyense.</p>
            <p> Somos todas las colectividades, que han hecho de nuestra ciudad <strong> su  hogar </strong> para toda la vida. Tenemos circuitos para que conozcas <strong>nuestras raíces </strong>a través de ellos.
        </p>
    </div>
    </div>
</section> --}}


  <!-- ======= FIESTA DEL TRIGO - VIDEO (About Section) ======= -->
  <section id="about" class="about pb-2 ps-2">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">

            <img src="{{asset("storage/secciones/la-ciudad/3arroyos.jpg")}}" class="img-fluid" alt="">

          {{-- <img src="assets/img/about.jpg" class="img-fluid" alt=""> --}}
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
          <h3>Somos</h3>
          <p>
            Desde el interior de la provincia, proyectamos nuestra fuerza productiva, a costa del <strong>esfuerzo</strong>, trabajo continuo y un parque industrial reconocido en todo el país,
            con más de <strong>80</strong> empresas radicadas, llevando a Tres Arroyos al mundo. </p>
            <p> Somos reconocidos como la capital nacional del <strong>trigo</strong> y por eso festejamos todos los años la <strong>Fiesta Provincial del Trigo</strong>. </p>
            <p> Somos el <strong>campo</strong>, la industria, el comercio y el <strong>trabajo</strong> de cada uno de nuestros vecinos. </p>
        </div>
      </div>

    </div>
  </section>
  <!-- End About Section -->


  <!-- ======= FIESTA DEL TRIGO - VIDEO (About Section) ======= -->
  <section id="about" class="about pb-2 ps-2">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-left" data-aos-delay="100">




            <img src="{{asset("storage/secciones/la-ciudad/licensed-image.jpg")}}" class="img-fluid" alt="">



          {{-- <img src="assets/img/about.jpg" class="img-fluid" alt=""> --}}
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content" data-aos="fade-right" data-aos-delay="100">
            {{-- <h3>Circuitos turísticos</h3> --}}
            <p> Somos un distrito hermoso para recorrer, nuestras <strong>playas extensas</strong>, pueblos rurales, muchísima naturaleza e <strong> historias</strong> por conocer.
                Tenemos museos, teatro, instituciones culturales, arquitectura y monumentos esplendidos.</p>
            <p>Somos cuna de deportistas y clubes de alto nivel, como también instituciones que trabajan incansablemente por el bien común. Eso nos caracteriza, como tresarroyenses.</p>
            <p> <strong>Somos</strong> un distrito de cooperativas y emprendedores, el espíritu de trabajo articulado y de comunidad está presente en nuestro gen tresarroyense.</p>
            <p> Somos todas las colectividades, que han hecho de nuestra ciudad <strong> su  hogar </strong> para toda la vida. Tenemos circuitos para que conozcas <strong>nuestras raíces </strong>a través de ellos.
            </p>
        </div>
      </div>

    </div>
  </section>
  <!-- End About Section -->




<section id="project-squares" class="p-0 mt-5">
    {{-- <div class="container "> --}}
    {{-- <div class="container">
        <div class="col-lg-12">
            <div class="col-lg-6">
                <p>Somos 140 años de historia construida por muchos vecinos ilustres. </p>
            </div>
            <div class="col-lg-6">
                <p> Somos Dardo Rocha y Salvador Cabañas…</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <p>Somos la tierra que inspiró el Martin Fierro. </p>
            </div>
            <div class="col-lg-6">
                <p>Somos Tres Arroyos. </p>
            </div>
        </div>
    </div> --}}
    <div class="grid-container ">
        <div class="item item-1"> <div class="text-item"> <p >   <strong> Somos </strong> <br> 140 años de historia <br> construida por muchos  <br> vecinos ilustres. </p></div></div>
        <div class="item item-2"> <div class="text-item"> <p> <strong> Somos </strong> <br> Dardo Rocha <br> y Salvador Cabañas…</p></div></div>
        <div class="item item-3"> <div class="text-item"> <br><p><strong> Somos </strong> <br> la tierra que inspiró <br> el Martin Fierro.   <br></p></div></div>
        <div class="item item-4"> <div class="text-item"> <p ><strong> <br>Somos </strong> <br> Tres Arroyos. </p></div></div>

    </div>
{{-- </div> --}}

</section>


{{-- PORTADA --}}

