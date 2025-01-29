@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')



    <section id="municipio mt-4">

        <main id="main" >

            <div id="tresa-estudia">
                <div class="portada text-md-left text-sm-center ">
                    <div class="background-portada">   </div>
                </div>
            </div>

            <section class="team">
                <div class="container" data-aos="fade-up">



                    <div class="row container-section-gral">
                        @foreach($ciudades as $ciudad)

                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center mb-lg-4">
                                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                                        <a href="{{ url('/tresa-estudia#'.$ciudad->nombre) }}">
                                        <div class="seccion-gral-img">
                                            <img src="{{asset("storage/ciudadUniversitaria/$ciudad->nombre/".$ciudad->portada)}}" class="img-fluid" alt="{{$ciudad->nombre}}">
                                        </div>
                                        </a>
                                        <div class="member-info">

                                            <h4 style="color:#F6A21A;">{{$ciudad->nombre}}</h4>
                                            {{-- <span>Chief Executive Officer</span> --}}
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>

                </div>
            </section>


            @foreach($ciudades as $ciudad)
                <section style="background:whitesmoke;" id="{{$ciudad->nombre}}">
                    <div class="container mb-5" data-aos="fade-up">
                        <div class=" section-title">
                            <p style="color:#F6A21A;"> {{$ciudad->nombre}} </p>
                        </div>
                            {{-- <h4 class="a-blue mb-4"> <strong> ¿QUE TENÉS QUE HACER? </strong> </h4> --}}
                        <div class="row col-lg-12 mb-lg-5 mb-3 ">
                            <div class="col-lg-6">
                                {{-- <div class="instructivo_icono pb-2"> <i class="bi bi-info-circle"></i> </div> --}}

                                <div class="instructivo_descripcion p-2">
                                    <p>  {!!$ciudad->descripcion!!} </p>
                                </div>



                            </div><!-- /col-6 -->

                            <div class="col-lg-6">
                                <img src="{{asset("storage/ciudadUniversitaria/$ciudad->nombre/".$ciudad->portada)}}" class="img-fluid" style="border-radius:5px;" alt="{{$ciudad->nombre}}">
                            </div>


                            <section id="about" class="about">
                            <div class=" content">
                                {{-- Acordeon bootstrap --}}
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    @foreach($ciudad->detalles as $detalle)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{$detalle->id}}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$detalle->id}}" aria-expanded="true" aria-controls="panelsStayOpen-{{$detalle->id}}">
                                                <strong>  {!! $detalle->titulo !!} </strong>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapse{{$detalle->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$detalle->id}}" data-bs-parent="#accordionPanelsStayOpenExample">
                                            <div class="accordion-body ps-md-5 ">
                                                {!! $detalle->descripcion !!}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                {{-- Fin Acordeon bootstrap --}}
                            </div>
                        </section>

                        <!-- ======= GALERIA - Portfolio Section ======= -->
                        <section id="portfolio" class="portfolio pt-0 pb-0">
                            <div class="container" data-aos="fade-up">




                                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


                                    @foreach($ciudad->fotos as $foto)
                                    @if(isset($foto))

                                            <div class="col-lg-4 col-md-6 portfolio-item ">
                                                <div class="portfolio-wrap">
                                                    <img src="{{asset("storage/ciudadUniversitaria/$ciudad->nombre/".$foto->url_foto)}}" class="img-fluid" alt="{{$ciudad->nombre}}">
                                                    <div class="portfolio-info">
                                                        {{-- <h4>{{$evento->nombre}}</h4> --}}
                                                        {{-- <p>{{$evento->categoria->nombre}}</p> --}}
                                                        <div class="portfolio-links">
                                                            <a href="{{asset("storage/ciudadUniversitaria/$ciudad->nombre/".$foto->url_foto)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$ciudad->nombre}}"><i class="bx bx-plus"></i></a>
                                                            {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endif
                                        @endforeach


                                </div>

                            </div>
                        </section>
                        <!-- End Galeria -->





                        </div><!-- /row -->
                    </div><!-- /container -->
                </section>

            @endforeach




    </main><!-- End #main -->






</section>

