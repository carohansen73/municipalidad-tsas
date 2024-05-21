
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')
{{-- PORTADA --}}

<div id="la-ciudad">
    <div class="portada-foto text-md-left text-sm-center ">
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


<!-- ======= About Us Section ======= -->
<section id="about" class="about-impact">

    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>  Bienvenidos a <span class="title-detail" > Tres Arroyos </span></h2>
            <p class="fst-italic">Donde hay lugar para todos</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-6 ">
                {{-- <h3> <span class="title-detail" > Somos </span></h3> --}}
                <img src="{{asset("storage/secciones/la-ciudad/3arroyos.jpg")}}" class="img-fluid rounded-4 mb-4" alt="">

                <p>Somos cuna de deportistas y clubes de alto nivel, como también instituciones que trabajan incansablemente por el bien común. Eso nos caracteriza, como tresarroyenses.</p>
                <p> <strong>Somos</strong> un distrito de cooperativas y emprendedores, el espíritu de trabajo articulado y de comunidad está presente en nuestro gen tresarroyense.</p>
                <p> Somos todas las colectividades, que han hecho de nuestra ciudad <strong> su  hogar </strong> para toda la vida. Tenemos circuitos para que conozcas <strong>nuestras raíces </strong>a través de ellos.
                </p>
            </div>
            <div class="col-lg-6 ">
                <div class="content ps-0 ps-lg-5">
                    {{-- <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                    </p>
                    <ul>
                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul> --}}
                    <p>
                    Desde el interior de la provincia, proyectamos nuestra fuerza productiva, a costa del <strong>esfuerzo</strong>, trabajo continuo y un parque industrial reconocido en todo el país,
                    con más de <strong>80</strong> empresas radicadas, llevando a Tres Arroyos al mundo. </p>
                    <p> Somos reconocidos como la capital nacional del <strong>trigo</strong> y por eso festejamos todos los años la <strong>Fiesta Provincial del Trigo</strong>. </p>
                    <p> Somos el <strong>campo</strong>, la industria, el comercio y el <strong>trabajo</strong> de cada uno de nuestros vecinos. </p>
                    <p> Somos un distrito hermoso para recorrer, nuestras <strong>playas extensas</strong>, pueblos rurales, muchísima naturaleza e <strong> historias</strong> por conocer.
                        Tenemos museos, teatro, instituciones culturales, arquitectura y monumentos esplendidos.</p>
                    <div class="position-relative mt-4">
                    <img src="{{asset("storage/secciones/la-ciudad/licensed-image.jpg")}}" class="img-fluid rounded-4" alt="">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->











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
        <div class="item item-1 order-lg-1 order-sm-2 "> <div class="text-item"> <p >   <strong> Somos </strong> <br> 140 años de historia <br> construida por muchos  <br> vecinos ilustres. </p></div></div>
        <div class="item item-2 order-2 order-sm-3 "> <div class="text-item"> <p> <strong> Somos </strong> <br> Dardo Rocha <br> y Salvador Cabañas…</p></div></div>
        <div class="item item-3 order-3 order-sm-1 "> <div class="text-item"> <br><p><strong> Somos </strong> <br> la tierra que inspiró <br> el Martin Fierro.   <br></p></div></div>
        <div class="item item-4 order-4 order-sm-4 "> <div class="text-item"> <p ><strong> <br>Somos <br> Tres Arroyos.</strong>  </p></div></div>

    </div>
{{-- </div> --}}

</section>


{{-- PORTADA --}}

