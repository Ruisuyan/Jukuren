<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Example user</strong>
                            </span> <span class="text-muted text-xs block">Example menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ isActiveRoute('main') }}">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
            </li>
            <li>
                <a href="{{ route('competencias.index') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Competencias</span> </a>
            </li>
            <li>
                <a href="{{ route('cursos.index') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Cursos</span> </a>
            </li>
            <li>
                <a href="{{ route('desempenhos.index') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Desempeños</span> </a>
            </li>
            <li>
                <a href="{{ route('docentes.index') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Docentes</span> </a>
            </li>
            <li>
                <a href="{{ route('alumnos.index') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Alumnos</span> </a>
            </li>
            <li>
                <a href="{{ route('evaluaciones.index') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Evaluaciones</span> </a>
            </li>

        </ul>

    </div>
</nav>
