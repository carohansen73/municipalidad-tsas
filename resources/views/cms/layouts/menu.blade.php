<li class="nav-item has-treeview {{ Request::is('noticias*','eventos*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-bell"></i>
        <p class="">
            Novedades
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">

        @can('noticias.index')
        <li class="nav-item">
            <a href="{{ route('noticias.index') }}" class="nav-link {{ Request::is('noticias*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-newspaper"></i>
                <p>Noticias</p>
            </a>
        </li>
        @endcan

        @can('eventos.index')
        <li class="nav-item">
            <a href="{{ route('eventos.index') }}" class="nav-link {{ Request::is('eventos*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>Eventos</p>
            </a>
        </li>
        @endcan
    </ul>
</li>


<li class="nav-item has-treeview {{ Request::is('talleres*','instituciones*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chalkboard-teacher"></i>
        <p class="">
            Actividades y Talleres
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">

        @can('talleres.index')
        <li class="nav-item">
            <a href="{{ route('talleres.index') }}" class="nav-link {{ Request::is('talleres*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-list"></i>
                <p>Talleres</p>
            </a>
        </li>
        @endcan

        @can('instituciones.index')
        <li class="nav-item">
            <a href="{{ route('instituciones.index') }}" class="nav-link {{ Request::is('instituciones*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-university"></i>
                <p>Instituciones</p>
            </a>
        </li>
        @endcan
    </ul>
</li>


@can('categorias.index')
    <li class="nav-item">
        <a href="{{ route('categorias.index') }}" class="nav-link {{ Request::is('categorias*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tags"></i>
        <p>Categorías</p>
    </a>
    </li>
@endcan
@can('seccionInformacion.index')
    <li class="nav-item">
        <a href="{{ route('seccionInformacion.index') }}" class="nav-link {{ Request::is('seccionInformacion*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-layer-group"></i>
        <p>Secciones</p>
    </a>
    </li>
@endcan
@can('archivos.index')
    <li class="nav-item">
        <a href="{{ route('archivos.index') }}" class="nav-link {{ Request::is('archivos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-folder-open"></i>
        <p>Archivos</p>
    </a>
    </li>
@endcan


<li class="nav-item has-treeview {{ Request::is('reporteEconomico*','situacionFinanciera*','boletinOficial*','avisoOficial*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-balance-scale"></i>
        <p class="">
            Transparencia
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">

        @can('reporteEconomico.index')
        <li class="nav-item">
            <a href="{{ route('reporteEconomico.index') }}" class="nav-link {{ Request::is('reporteEconomico*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-chart-line"></i>
                <p>Reporte Económico</p>
            </a>
        </li>
        @endcan

        @can('situacionFinanciera.index')
        <li class="nav-item">
            <a href="{{ route('situacionFinanciera.index') }}" class="nav-link {{ Request::is('situacionFinanciera*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                <p>Situación Financiera</p>
            </a>
        </li>
        @endcan

        @can('boletinOficial.index')
        <li class="nav-item">
            <a href="{{ route('boletinOficial.index') }}" class="nav-link {{ Request::is('boletinOficial*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>Boletín Oficial</p>
            </a>
        </li>
        @endcan

        @can('avisoOficial.index')
        <li class="nav-item">
            <a href="{{ route('avisoOficial.index') }}" class="nav-link {{ Request::is('avisoOficial*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-bullhorn"></i>
                <p>Aviso Oficial</p>
            </a>
        </li>
        @endcan
    </ul>
</li>


<li class="nav-item has-treeview {{ Request::is('lineUps*','tickets*','licitaciones*','grillas*','convocatorias*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-star"></i>
        <p class="">
            Fiesta del Trigo
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">

        @can('lineUps.index')
        <li class="nav-item">
            <a href="{{ route('lineUps.index') }}" class="nav-link {{ Request::is('lineUps*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-music"></i>
                <p>Line Up</p>
            </a>
        </li>
        @endcan

        @can('tickets.index')
        <li class="nav-item">
            <a href="{{ route('tickets.index') }}" class="nav-link {{ Request::is('tickets*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-ticket-alt"></i>
                <p> Tickets </p>
            </a>
        </li>
        @endcan

        @can('licitaciones.index')
        <li class="nav-item">
            <a href="{{ route('licitaciones.index') }}" class="nav-link {{ Request::is('licitaciones*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-gavel"></i>
                <p> Licitaciones </p>
            </a>
        </li>
        @endcan

        @can('grillas.index')
        <li class="nav-item">
            <a href="{{ route('grillas.index') }}"
            class="nav-link {{ Request::is('grillas*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>Grilla</p>
            </a>
        </li>
        @endcan

        @can('convocatorias.index')
        <li class="nav-item">
            <a href="{{ route('convocatorias.index') }}"
            class="nav-link {{ Request::is('convocatorias*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-clipboard-list"></i>
                <p>Convocatorias</p>
            </a>
        </li>
        @endcan
    </ul>
</li>


@can('sorteo.index')
<li class="nav-item">
    <a href="{{ route('sorteo.index') }}"
       class="nav-link {{ Request::is('sorteo*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-fish"></i>
        <p>Sorteo Corvina Negra</p>
    </a>
</li>
@endcan


<li class="nav-item has-treeview {{ Request::is('user*','rols*','permisos*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user-cog"></i>
        <p class="">
            Administración
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">

        @can('user.index')
        <li class="nav-item">
            <a href="{{ route('user.index') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>Usuarios</p>
            </a>
        </li>
        @endcan

        @can('rols.index')
        <li class="nav-item">
            <a href="{{ route('rols.index') }}" class="nav-link {{ Request::is('rols*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-shield"></i>
                <p>Roles</p>
            </a>
        </li>
        @endcan

        @role('Admin')
        <li class="nav-item">
            <a href="{{ route('permisos.create') }}" class="nav-link {{ Request::is('permisos*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-key"></i>
                <p>Permisos</p>
            </a>
        </li>
        @endrole
    </ul>
</li>
