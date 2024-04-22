@extends('layouts.app')
<!-- barra de navegacion -->
@include('layouts.navbar')

@section('content')


{{-- PORTADA --}}

<section  class="team">
    <div class="container " data-aos="fade-up">
        <main id="main" class="margen-top-navbar">

        <div class="section-title pb-2">
            <p>Eventos</p>
            {{-- <h2></h2> --}}
        </div>

        <!-- ======= borde colorido ======= -->
        <div class="container-border">
            <div class="row">
                <div class="col-4 border-1">
                </div>
                <div class="col-4 border-4">
                </div>
                <div class="col-4 border-6">
                </div>
            </div>
        </div><!-- ======= fin borde colorido ======= -->
    </div>
    {{-- FIN PORTADA --}}




        {{-- PROXIMOS EVENTOS -->  (CULTURA / DEPORTES)--}}
        @if(isset($eventos) && (count($eventos) > 0))


            <!-- ======= Team Section ======= -->
            <section id="eventos" class="team eventos">
                <div class="container pb-0" data-aos="fade-up">
                    {{-- <div class="section-title">
                        <p> Próximos eventos</p>
                    </div> --}}

                    {{-- <div class="row">
                        @foreach($eventos as $evento)
                            <div class="col-lg-3 col-md-6 align-items-stretch">

                                <div class="member" data-aos="fade-up" data-aos-delay="200">
                                    <div class="member-img">
                                        <img src="{{asset("storage/eventos/".$evento->img)}}" class="img-fluid" alt="">
                                        <div class="social">
                                            <a> <button type="button" class="btn btn-modal-evento" data-bs-toggle="modal" data-bs-target="#exampleModal4" data-imagenevento="{{$evento->img}}"
                                                data-bs-whatever="@mdo">Ver</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> --}}



                    <div class="row">
                        @foreach($eventos as $evento)
                            <div class="col-lg-3 col-md-6 align-items-stretch">

                                <div class="member" data-aos="fade-up" data-aos-delay="200">
                                    <div class="member-img">
                                        <img src="{{asset("storage/eventos/".$evento->img)}}" class="img-fluid" alt="">
                                        <div class="social">
                                            <a> <button type="button" class="btn btn-modal-evento" data-bs-toggle="modal" data-bs-target="#exampleModal4" data-imagenevento="{{$evento->img}}" data-seccion="{{$evento->seccion->path}}"
                                                data-bs-whatever="@mdo">Ver</button>
                                            </a>
                                        </div>
                                    </div>
                                    {{-- <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    </div> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
                <!-- ======= Modal para ver el flyer ======= -->
                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('')}}" class="modalimg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End eventos  Section -->
        @endif
    {{-- </div> --}}
    </section>

  <!-- Template ocultar-mostrar información JS File -->
  <script src="{{ asset('assets/js/modalevento.js') }}"></script>
