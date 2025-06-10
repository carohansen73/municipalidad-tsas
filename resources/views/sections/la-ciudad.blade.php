@extends('layouts.app-tsas')

@include('layouts.navbar')

@section('content')


    {{-- <body id="page-top"> --}}

        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 ">
                <div class="row gx-4 gx-lg-5 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Bienvenidos a Tres Arroyos</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Donde hay lugar para todos</p>
                        <!-- <a class="btn btn-primary btn-xl" href="#about">Conocenos</a> -->
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">

                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <!-- <h2 class="text-white mt-0">We've got what you need!</h2> -->
                        <!-- <hr class="divider divider-light" /> -->
                        {{-- <div class="main-icon text-white fs-1 m-2">
                           <i class="fas fa-city"></i>
                        </div> --}}

                        <p class="text-white-75 mb-4">Desde el interior de la provincia, proyectamos nuestra fuerza
                            productiva, a costa del esfuerzo, trabajo continuo y un parque industrial reconocido en
                            todo el país, con más de 80 empresas radicadas, llevando a Tres Arroyos al mundo.
                        </p>
                        <!-- <a class="btn btn-light btn-xl" href="#services">Conocé más!</a> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <!-- <h2 class="text-center mt-0">Nosotros Somos</h2>
                <hr class="divider" /> -->
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="fas fa-seedling fs-1 text-primary"></i></div>

                            <!-- <h3 class="h4 mb-2">Sturdy Themes</h3> -->
                            <p class="text-muted mb-0">Somos reconocidos como la capital nacional del trigo y por eso
                                festejamos todos los años la <b>Fiesta Provincial del Trigo</b>.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="fas fa-tractor fs-1 text-primary"></i></div>

                            <p class="text-muted mb-0">Somos el <b>campo, la industria, el comercio y el trabajo </b> de
                                cada uno de nuestros vecinos.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="fas fa-tree fs-1 text-primary"></i></div>

                            <p class="text-muted mb-0">Somos un distrito hermoso para recorrer, nuestras <b> playas
                                extensas, pueblos rurales </b> , muchísima naturaleza e historias por conocer.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="fas fa-theater-masks fs-1 text-primary"></i></div>

                            <p class="text-muted mb-0">Tenemos <b> museos, teatro, </b> instituciones culturales,
                                arquitectura y monumentos esplendidos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container col-lg-8 px-4 px-lg-5 ">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-center">

                            {{-- <i class="bi-heart fs-xlarge text-primary"></i> --}}
                            <img class="img-fluid" src="{{asset("storage/secciones/la-ciudad/MdTsAs_isologo-07.png")}}" alt="..." />


                    </div>
                    <div class="col-lg-8">
                        <p>Somos cuna de <b>deportistas y clubes de alto nivel</b>, como también instituciones que
                        trabajan incansablemente por el bien común. Eso nos caracteriza, como tresarroyenses. <br>

                        Somos un distrito de <b>cooperativas y emprendedores</b>, el espíritu de trabajo articulado y de
                        comunidad está presente en nuestro gen tresarroyense. <br>

                        Somos todas las <b>colectividades</b>, que han hecho de nuestra ciudad su hogar para toda la vida.
                        Tenemos circuitos para que conozcas nuestras raíces a través de ellos.</p>
                    </div>

                </div>

                <!-- <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a> -->
            </div>
        </section>

          <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 col-sm-6">
                        <a class="portfolio-box" title="Project Name">
                            <img class="img-fluid" src="{{asset("storage/secciones/la-ciudad/ciudadanos.jpg")}}" alt="..." />

                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Somos</div>
                                <div class="project-name">140 años de historia
                                    construida por muchos
                                    vecinos ilustres.
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <a class="portfolio-box" title="Project Name">
                            <img class="img-fluid" src="{{asset("storage/secciones/la-ciudad/tierra.jpg")}}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Somos</div>
                                <div class="project-name">la tierra que inspiró
                                    el Martin Fierro.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <a class="portfolio-box" title="Project Name">
                            <img class="img-fluid" src="{{asset("storage/secciones/la-ciudad/cabanias.jpg")}}" alt="..." />

                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Somos</div>
                                <div class="project-name">Dardo Rocha
                                    y Salvador Cabañas…</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <a class="portfolio-box" title="Project Name">
                            <img class="img-fluid" src="{{asset("storage/secciones/la-ciudad/tsass.jpg")}}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Somos</div>
                                <div class="project-name">Tres Arroyos</div>
                            </div>
                        </a>
                    </div>



                </div>
            </div>
        </div>



<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

