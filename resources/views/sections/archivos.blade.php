<!-- ======= ARCHIVOS  ======= -->
@if(isset($archivos) && (count($archivos) > 0))
    <section id="secciones-archivos">
        <div class="container " data-aos="fade-up">

            <div class="section-title">
                <p>Archivos</p>
                <h2>Accedé a la información que necesitás</h2>
            </div>

            <div class="container-listado-archivos row col-12 ps-3 ps-md-0">
                <p> <i class="fas fa-file-download"> <span>Descargas</span>  </i> </p>
                @foreach ($archivos as $archivo)

                <div class="col-lg-6 col-md-12">

                {{-- ver como recorro para q muestre separado por sub_seccion --}}
                    <div class="archivos-item">
                    <a href="{{url('/storage/archivos/'.$seccion.'/'.$archivo->nombre)}}" target="_blank">  {{ $archivo->nombre_agradable}} </a>
                </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@endif