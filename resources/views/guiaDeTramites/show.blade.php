
@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')
{{-- <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"  height="560" preserveAspectRatio="none" viewBox="0 0 1440 560">
    <g mask="url(&quot;#SvgjsMask1000&quot;)" fill="none">
        <rect width="1440" height="560" x="0" y="0" fill="#0e2a47"></rect>
        <path d="M 0,33 C 57.6,80.2 172.8,272.8 288,269 C 403.2,265.2 460.8,24 576,14 C 691.2,4 748.8,220.6 864,219 C 979.2,217.4 1036.8,7 1152,6 C 1267.2,5 1382.4,172.4 1440,214L1440 560L0 560z" fill="#184a7e"></path>
        <path d="M 0,477 C 96,441.2 288,300 480,298 C 672,296 768,454.2 960,467 C 1152,479.8 1344,383 1440,362L1440 560L0 560z" fill="#2264ab"></path>
    </g>
    <defs>
        <mask id="SvgjsMask1000">
            <rect width="1440" height="560" fill="#ffffff"></rect>
        </mask>
    </defs>
</svg> --}}

{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="rgba(13, 116, 189, 0.8)">
	<path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"/>
	<path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"/>
	<path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"/>
</svg> --}}

{{-- <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(13, 116, 189, 0.82)" offset="0%"></stop><stop stop-color="rgba(7, 56, 91, 0.79)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,40L34.3,40C68.6,40,137,40,206,36.7C274.3,33,343,27,411,31.7C480,37,549,53,617,61.7C685.7,70,754,70,823,61.7C891.4,53,960,37,1029,40C1097.1,43,1166,67,1234,70C1302.9,73,1371,57,1440,46.7C1508.6,37,1577,33,1646,26.7C1714.3,20,1783,10,1851,8.3C1920,7,1989,13,2057,16.7C2125.7,20,2194,20,2263,23.3C2331.4,27,2400,33,2469,45C2537.1,57,2606,73,2674,73.3C2742.9,73,2811,57,2880,55C2948.6,53,3017,67,3086,70C3154.3,73,3223,67,3291,58.3C3360,50,3429,40,3497,33.3C3565.7,27,3634,23,3703,33.3C3771.4,43,3840,67,3909,78.3C3977.1,90,4046,90,4114,90C4182.9,90,4251,90,4320,80C4388.6,70,4457,50,4526,40C4594.3,30,4663,30,4731,31.7C4800,33,4869,37,4903,38.3L4937.1,40L4937.1,100L4902.9,100C4868.6,100,4800,100,4731,100C4662.9,100,4594,100,4526,100C4457.1,100,4389,100,4320,100C4251.4,100,4183,100,4114,100C4045.7,100,3977,100,3909,100C3840,100,3771,100,3703,100C3634.3,100,3566,100,3497,100C3428.6,100,3360,100,3291,100C3222.9,100,3154,100,3086,100C3017.1,100,2949,100,2880,100C2811.4,100,2743,100,2674,100C2605.7,100,2537,100,2469,100C2400,100,2331,100,2263,100C2194.3,100,2126,100,2057,100C1988.6,100,1920,100,1851,100C1782.9,100,1714,100,1646,100C1577.1,100,1509,100,1440,100C1371.4,100,1303,100,1234,100C1165.7,100,1097,100,1029,100C960,100,891,100,823,100C754.3,100,686,100,617,100C548.6,100,480,100,411,100C342.9,100,274,100,206,100C137.1,100,69,100,34,100L0,100Z"></path></svg> --}}




<main id="main" class="margen-top-navbar">




    <!-- ======= Features Section ======= -->
    <section id="tramites" class="features">
        <div class="container" data-aos="fade-up">
            {{-- aca --}}
            <div class="section-title">

                <p>Guía de Trámites</p>
                <h2>  @foreach($tramite as $tram)  <i class="{{$tram->tipo->icono}}" style="font-size: 24px;"></i> @break @endforeach
                    @foreach($tipo as $t)  {{$t->tipo}} @endforeach
                </h2>
                {{-- <p><span style="font-size: 14px; color:#aaaaaa;">Buscá el trámite que deseas realizar por tema</span></p> --}}
            </div>
            <div class="row">
                @foreach($tramite as $tram)
                <div class="col-lg-12 item-tramite" data-aos="fade-left" data-aos-delay="100">

                    <a href="">
                        <div id="{{$tram->id}}" class="icon-box  div-tramite" data-aos="zoom-in" data-aos-delay="150">
                           <span class="icon-closed"><i class="fas fa-angle-right"></i></span>
                           <span class="icon-open display-none"><i class="fas fa-angle-down"></i></span>


                            <h4>{!! $tram->titulo !!}</h4>
                            <p>{!! $tram->descripcion !!}</p>
                        </div>
                    </a>

                    <div id="informacion-{{$tram->id}}" class="informacion-tramite display-none ms-lg-5">
                        <h6 class="ms-5"><strong>Lugar donde se realiza</strong></h6><p class="ms-5">{!! $tram->lugar !!}</p>
                        <h6 class="ms-5"><strong>Horario</strong></h6><p class="ms-5">{!! $tram->horario !!}</p>
                        <h6 class="ms-5"><strong>Quien puede realizarlo</strong></h6><p class="ms-5">{!! $tram->quien !!}</p>
                        <h6 class="ms-5"><strong>Requisitos</strong></h6><p class="ms-5">{!! $tram->requisitos !!}</p>
                        <h6 class="ms-5"><strong>Costo</strong></h6><p class="ms-5">{!! $tram->costo !!}</p>
                        <h6 class="ms-5"><strong>Contacto</strong></h6><p class="ms-5">{!! $tram->contacto !!}</p>
                        <h6 class="ms-5"><strong>Links de interés</strong></h6><p class="ms-5">{!! $tram->links !!}</p>
                    </div>


                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Features Section -->

</main><!-- End #main -->

<!-- Template ocultar-mostrar información JS File -->
<script src="{{ asset('assets/js/hide-show-information.js') }}"></script>

