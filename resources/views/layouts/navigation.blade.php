<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    @if(auth()->check())
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">Usuario: {{auth()->user()->name}}</strong>
                                </span>
                            </span>
                        </a>
                    @endif
                    
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Cerrar sesion</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    SEC
                </div>
            </li>
            <li>
                <a href="{{ url('/') }}"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
            </li>
            {{--  @if(auth()->user()->role_id==2)  --}}
            <li>
                <a href="{{ route('competencia.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Competencias</span> </a>
            </li>    
            {{--  @endif
            @if(auth()->user()->role_id==2)              --}}
            <li>
                <a href="{{ route('curso.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Cursos</span> </a>
            </li>            
            {{--  @endif
            @if(auth()->user()->role_id==2)  --}}
            <li>
                <a href="{{ route('desempenho.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Desempeños</span> </a>
            </li>
            {{--  @endif  --}}
            <li>
                <a href="{{ route('evaluacion.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Evaluaciones</span> </a>
            </li>
            <li>
                <a href="{{ route('pregunta.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Preguntas</span> </a>
            </li>
            <li>
                <a href="{{ route('docente.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Docentes</span> </a>
            </li>
            <li>
                <a href="{{ route('alumno.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Alumnos</span> </a>
            </li>
            <li>
                <a href="{{ route('reporte.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Reporte</span> </a>
            </li>
        </ul>

    </div>
</nav>
