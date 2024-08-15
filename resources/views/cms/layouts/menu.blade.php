@can('noticias.index')
    <li class="nav-item">
        <a href="{{ route('noticias.index') }}" class="nav-link {{ Request::is('noticias*') ? 'active' : '' }}">
            <p>Noticias</p>
        </a>
    </li>
@endcan
@can('eventos.index')
<li class="nav-item">
    <a href="{{ route('eventos.index') }}" class="nav-link {{ Request::is('eventos*') ? 'active' : '' }}">
        <p>Eventos</p>
    </a>
</li>
@endcan
@can('categorias.index')
<li class="nav-item">
    <a href="{{ route('categorias.index') }}" class="nav-link {{ Request::is('categorias*') ? 'active' : '' }}">
        <p>Categorias</p>
    </a>
</li>
@endcan
@can('seccionInformacion.index')
<li class="nav-item">
    <a href="{{ route('seccionInformacion.index') }}" class="nav-link {{ Request::is('seccionInformacion*') ? 'active' : '' }}">
        <p>Secciones</p>
    </a>
</li>
@endcan
@can('archivos.index')
<li class="nav-item">
    <a href="{{ route('archivos.index') }}" class="nav-link {{ Request::is('archivos*') ? 'active' : '' }}">
        <p>Archivos</p>
    </a>
</li>
@endcan
@can('reporteEconomico.index')
<li class="nav-item">
    <a href="{{ route('reporteEconomico.index') }}" class="nav-link {{ Request::is('reporteEconomico*') ? 'active' : '' }}">
        <p>Reporte Economico</p>
    </a>
</li>
@endcan

@can('situacionFinanciera.index')
<li class="nav-item">
    <a href="{{ route('situacionFinanciera.index') }}"  class="nav-link {{ Request::is('situacionFinanciera*') ? 'active' : '' }}">
        <p>Situacion Financiera</p>
    </a>
</li>
@endcan

@can('boletinOficial.index')
<li class="nav-item">
    <a href="{{ route('boletinOficial.index') }}" class="nav-link {{ Request::is('boletinOficial*') ? 'active' : '' }}">
        <p>Boletin Oficial</p>
    </a>
</li>
@endcan

@can('avisoOficial.index')
<li class="nav-item">
    <a href="{{ route('avisoOficial.index') }}"  class="nav-link {{ Request::is('avisoOficial*') ? 'active' : '' }}">
        <p>Aviso Oficial</p>
    </a>
</li>
@endcan

{{-- @can('user.index') --}}
<li class="nav-item">
    <a href="{{ route('user.index') }}"  class="nav-link {{ Request::is('usuaios*') ? 'active' : '' }}">
        <p>Usuarios</p>
    </a>
</li>
{{-- @endcan --}}

{{-- @can('rols.index') --}}
<li class="nav-item">
    <a href="{{ route('rols.index') }}" class="nav-link {{ Request::is('rols*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>
{{-- @endcan --}}
