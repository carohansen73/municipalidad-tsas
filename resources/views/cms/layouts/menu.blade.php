<li class="nav-item">
    <a href="{{ route('noticias.index') }}"
       class="nav-link {{ Request::is('noticias*') ? 'active' : '' }}">
        <p>Noticias</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('eventos.index') }}"
       class="nav-link {{ Request::is('eventos*') ? 'active' : '' }}">
        <p>Eventos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('categorias.index') }}"
       class="nav-link {{ Request::is('categorias*') ? 'active' : '' }}">
        <p>Categorias</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('seccionInformacions.index') }}"
       class="nav-link {{ Request::is('seccionInformacions*') ? 'active' : '' }}">
        <p>Secciones</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('archivos.index') }}"
       class="nav-link {{ Request::is('archivos*') ? 'active' : '' }}">
        <p>Archivos</p>
    </a>
</li>
