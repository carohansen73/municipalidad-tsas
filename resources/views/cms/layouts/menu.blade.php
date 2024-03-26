<li class="nav-item">
    <a href="{{ route('noticias.index') }}"
       class="nav-link {{ Request::is('noticias*') ? 'active' : '' }}">
        <p>Noticias</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('categorias.index') }}"
       class="nav-link {{ Request::is('categorias*') ? 'active' : '' }}">
        <p>Categorias</p>
    </a>
</li>
