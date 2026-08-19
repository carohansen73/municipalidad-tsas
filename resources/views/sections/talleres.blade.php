@extends('layouts.app')

@include('layouts.navbar')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/talleres.css') }}?v={{ @filemtime(public_path('assets/css/talleres.css')) }}">
@endsection

@section('content')

<main id="main-talleres" class="talleres-page margen-top-navbar">

    <section class="talleres-banner-section">
        <img
            src="{{ asset('assets/img/sections-portadas/talleres/talleres.jpg') }}"
            alt="Actividades y Talleres — para adultos mayores, adultos, jóvenes e infantiles"
            class="talleres-banner-img"

        >
        <div style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(23,22,20,.55) 0%,rgba(23,22,20,.75) 100%);"></div>

        <div class="talleres-banner-contenido">
            <div class="talleres-banner-subtitulo">Adultos mayores - adultos - juveniles - infantiles</div>
            <h1 class="talleres-banner-titulo">Actividades</h1> <br>
             <h1 class="talleres-banner-titulo">  y </h1> <br>
                <h1 class="talleres-banner-titulo"> Talleres</h1>
            <p style="color:rgba(255,255,255,.82);font-size:clamp(16px,1.5vw,20px);max-width:56ch;margin:22px 0 0;line-height:1.55;"> Talleres, cursos y actividades gratuitas y aranceladas que dicta la Municipalidad
            en distintas instituciones de la ciudad.</p>
        </div>

    </section>

    <div class="talleres-container">


        {{-- ===================== BUSCADOR ===================== --}}
        <form class="talleres-buscador" role="search" id="talleres-buscador-form" onsubmit="return false;">
            <label for="talleres-buscador-input" class="talleres-label">Buscar taller o actividad</label>
            <div class="talleres-buscador-caja">
                <i class="fas fa-search" aria-hidden="true"></i>
                <input
                    type="search"
                    id="talleres-buscador-input"
                    name="buscar"
                    class="talleres-input"
                    placeholder="Buscar por nombre, actividad o categoría..."
                    data-talleres-buscador
                >
            </div>
        </form>

        {{-- Botón "Filtros" — solo visible en mobile/tablet, abre el modal de abajo --}}
        <button
            type="button"
            class="talleres-filtros-trigger"
            id="talleres-filtros-trigger"
            aria-haspopup="dialog"
            aria-controls="talleres-filtros-modal"
        >
            <i class="bi bi-funnel" aria-hidden="true"></i>
            <span>Filtros</span>
        </button>

        <div class="talleres-layout">

            {{--
                ===================== FILTROS =====================
                Desktop (>=900px): sidebar fija a la izquierda, siempre visible, tal cual estaba.
                Mobile (<900px): el mismo elemento se convierte en un modal full-screen
                (oculto por default, lo abre #talleres-filtros-trigger).
            --}}
            <aside class="talleres-sidebar" id="talleres-filtros-modal" data-talleres-filtros aria-label="Filtrar actividades" role="dialog" aria-modal="true" hidden>

                <div class="talleres-sidebar-header">
                    <h2 class="talleres-sidebar-titulo">Filtrar actividades</h2>
                    <button type="button" class="btn-close" id="talleres-filtros-cerrar" aria-label="Cerrar filtros"></button>
                </div>

                <div class="talleres-sidebar-body">

                    <div class="filtro-grupo">
                        <h3 class="filtro-grupo-titulo">Edad o público</h3>
                        <ul class="filtro-opciones">
                            <li>
                                <label class="filtro-opcion">
                                    <input type="radio" name="publico" value="" data-filtro="publico" checked>
                                    <span>Todos</span>
                                </label>
                            </li>
                            @foreach ($publicos as $publico)
                                <li>
                                    <label class="filtro-opcion">
                                        <input type="radio" name="publico" value="{{ $publico->slug }}" data-filtro="publico">
                                        <span>{{ $publico->nombre }}</span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="filtro-grupo">
                        <h3 class="filtro-grupo-titulo">Día</h3>
                        <ul class="filtro-opciones">
                            <li>
                                <label class="filtro-opcion">
                                    <input type="radio" name="dia" value="" data-filtro="dia" checked>
                                    <span>Todos</span>
                                </label>
                            </li>
                            @foreach ($diasSemana as $valor => $etiqueta)
                                <li>
                                    <label class="filtro-opcion">
                                        <input type="radio" name="dia" value="{{ $valor }}" data-filtro="dia">
                                        <span>{{ $etiqueta }}</span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="filtro-grupo">
                        <h3 class="filtro-grupo-titulo">Categoría</h3>
                        <ul class="filtro-opciones">
                            <li>
                                <label class="filtro-opcion">
                                    <input type="radio" name="categoria" value="" data-filtro="categoria" checked>
                                    <span>Todas</span>
                                </label>
                            </li>
                            @foreach ($categorias as $categoria)
                                <li>
                                    <label class="filtro-opcion">
                                        <input type="radio" name="categoria" value="{{ $categoria->id }}" data-filtro="categoria">
                                        <span>{{ $categoria->nombre }}</span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>

                <div class="talleres-sidebar-footer">
                    <button type="button" class="talleres-sidebar-aplicar" id="talleres-filtros-aplicar">Filtrar</button>
                </div>

            </aside>

            {{-- ===================== LISTADO POR FRANJA HORARIA ===================== --}}
            @php
                $franjasInfo = [
                    'manana' => ['icono' => 'bi bi-sunrise-fill', 'titulo' => 'Mañana'],
                    'tarde' => ['icono' => 'bi bi-sun-fill', 'titulo' => 'Tarde'],
                    'vespertino' => ['icono' => 'bi bi-moon-stars-fill', 'titulo' => 'Vespertino / Noche'],
                ];

                $hayResultados = count($franjas['manana']) > 0
                    || count($franjas['tarde']) > 0
                    || count($franjas['vespertino']) > 0;
            @endphp

            <div id="talleres-resultados" data-talleres-resultados>

                {{-- Filtros aplicados (solo mobile) — se llenan con JS al confirmar el modal --}}
                <div class="talleres-chips" id="talleres-chips" hidden></div>

                @if (!$hayResultados)
                    <p class="talleres-sin-resultados">Por el momento no hay talleres cargados.</p>
                @else
                    <p class="talleres-sin-resultados" id="talleres-sin-coincidencias" hidden>
                        No encontramos actividades con esa búsqueda o esos filtros. Probá con otros criterios.
                    </p>
                @endif

                @foreach ($franjasInfo as $clave => $info)
                    @continue(count($franjas[$clave]) === 0)

                    <section class="talleres-franja talleres-franja--{{ $clave }}" aria-labelledby="franja-{{ $clave }}" data-franja="{{ $clave }}">

                        <h2 id="franja-{{ $clave }}" class="talleres-franja-titulo">
                            <i class="{{ $info['icono'] }}" aria-hidden="true"></i>{{ $info['titulo'] }}
                        </h2>

                        <ul class="talleres-lista">
                            @foreach ($franjas[$clave] as $item)
                                @php
                                    $actividad = $item['actividad'];
                                    $horarios = $item['horarios'];
                                    $taller = $actividad->taller;
                                    $categoria = $taller->categoria;
                                    $publicoTaller = $taller->publico;
                                    $institucion = $actividad->institucion;
                                    $dias = $horarios->pluck('dia_semana')->unique();
                                    $tieneDetalle = $taller->descripcion || $actividad->instructor || $actividad->requisitos || $actividad->contacto_inscripcion;

                                    // Hora de inicio más temprana por día (los horarios ya vienen
                                    // ordenados ascendente), para poder reordenar las cards en JS
                                    // según el día que esté filtrado en cada momento.
                                    $horaPorDia = [];
                                    foreach ($horarios as $horario) {
                                        if (!isset($horaPorDia[$horario->dia_semana])) {
                                            $horaPorDia[$horario->dia_semana] = $horario->hora_inicio->format('H:i');
                                        }
                                    }
                                @endphp
                                <li
                                    class="taller-card"
                                    data-taller-id="{{ $taller->id }}"
                                    data-actividad-id="{{ $actividad->id }}"
                                    data-nombre="{{ mb_strtolower($taller->nombre, 'UTF-8') }}"
                                    data-buscar="{{ mb_strtolower($taller->nombre . ' ' . $categoria->nombre . ' ' . $institucion->nombre, 'UTF-8') }}"
                                    data-categoria-id="{{ $categoria->id }}"
                                    data-publico-slug="{{ $publicoTaller->slug }}"
                                    data-dias="{{ $dias->implode(',') }}"
                                    data-horarios="{{ json_encode($horaPorDia) }}"
                                    data-franja="{{ $clave }}"
                                >
                                    <div class="taller-card-imagen">
                                        @if ($actividad->imagen)
                                            <img src="{{ asset('storage/' . $actividad->imagen) }}" alt="Foto de {{ $taller->nombre }}">
                                        @else
                                            <i class="{{ $categoria->icono ?? 'fas fa-users' }}" aria-hidden="true"></i>
                                        @endif
                                    </div>

                                    <div class="taller-card-info">
                                        <h3 class="taller-card-nombre">{{ $taller->nombre }}</h3>

                                        <div class="taller-card-pills">
                                            <span class="taller-pill taller-pill-categoria">
                                                <i class="{{ $categoria->icono ?? 'fas fa-tag' }}" aria-hidden="true"></i>
                                                <span>{{ $categoria->nombre }}</span>
                                            </span>
                                            <span class="taller-pill taller-pill-publico">
                                                <i class="fas fa-user-friends" aria-hidden="true"></i>
                                                <span>{{ $publicoTaller->nombre }}</span>
                                            </span>
                                        </div>

                                        <ul class="taller-card-datos">
                                            <li>
                                                <i class="fas fa-clock" aria-hidden="true"></i>
                                                <span>
                                                    <strong>Horario:</strong>
                                                    @foreach ($horarios as $horario)
                                                        {{ ucfirst($horario->dia_semana) }}
                                                        {{ $horario->hora_inicio->format('H:i') }}@if ($horario->hora_fin) a {{ $horario->hora_fin->format('H:i') }}@endif
                                                        {{ !$loop->last ? ' · ' : '' }}
                                                    @endforeach
                                                </span>
                                            </li>
                                            <li>
                                                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                                <span>
                                                    <strong>Lugar:</strong>
                                                    {{ $institucion->nombre }}@if ($institucion->direccion) ({{ $institucion->direccion }})@endif
                                                </span>
                                            </li>
                                            <li>
                                                <i class="fas fa-ticket-alt" aria-hidden="true"></i>
                                                <span>
                                                    <strong>Modalidad:</strong>
                                                    @if ($actividad->modalidad === 'gratuita')
                                                        <span class="taller-badge taller-badge-gratuita">Gratuita</span>
                                                    @else
                                                        <span class="taller-badge taller-badge-arancelada">
                                                            Arancelada
                                                            @if ($actividad->costo)
                                                                (${{ number_format($actividad->costo, 0, ',', '.') }})
                                                            @endif
                                                        </span>
                                                    @endif
                                                </span>
                                            </li>
                                        </ul>

                                        @if ($tieneDetalle)
                                            <details class="taller-card-detalle">
                                                <summary class="taller-card-boton">
                                                    <span class="txt-cerrado">Ver más</span>
                                                    <span class="txt-abierto">Ver menos</span>
                                                </summary>
                                                <div class="taller-card-detalle-contenido">
                                                    @if ($taller->descripcion)
                                                        <p>{{ $taller->descripcion }}</p>
                                                    @endif
                                                    @if ($actividad->instructor)
                                                        <p><strong>Instructor/a:</strong> {{ $actividad->instructor }}</p>
                                                    @endif
                                                    @if ($actividad->requisitos)
                                                        <p><strong>Requisitos:</strong> {{ $actividad->requisitos }}</p>
                                                    @endif
                                                    @if ($actividad->contacto_inscripcion)
                                                        <p><strong>Contacto para inscribirse:</strong> {{ $actividad->contacto_inscripcion }}</p>
                                                    @endif
                                                </div>
                                            </details>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                    </section>
                @endforeach

            </div>

        </div>

    </div>
</main>

@endsection

@section('js')
    <script src="{{ asset('assets/js/talleres.js') }}?v={{ @filemtime(public_path('assets/js/talleres.js')) }}"></script>
@endsection
