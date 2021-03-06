<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    @if(auth()->check())
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs">
                                @if(is_null(auth()->user()->role_id))
                                    <strong class="font-bold">{{'Invitado: '.auth()->user()->name}}</strong>
                                @else                                    
                                    <strong class="font-bold">{{auth()->user()->role->nombre.': '.auth()->user()->name}}</strong>
                                @endif                                    
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
            @if(auth()->user()->role_id==1)
                <li>
                    <a href="{{ route('usuario.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Usuarios</span> </a>
                </li>
            @endif
            @if(auth()->user()->role_id==5)
            <li>
                <a href="{{ route('alumno.myEvaluations') }}"><i class="fa fa-cog"></i> <span class="nav-label">Mis evaluaciones</span> </a>
            </li>    
            @endif
            @if(auth()->user()->role_id==2)
                <li>
                    <a href="{{ route('docente.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Docentes</span> </a>
                </li>
                <li>
                    <a href="{{ route('alumno.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Alumnos</span> </a>
                </li>
                <li>
                    <a href="{{ route('competencia.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Competencias</span> </a>
                </li>
                <li>
                    <a href="{{ route('desempenho.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Desempeños</span> </a>
                </li>
                <li>
                    <a href="{{ route('ciclo.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Ciclo</span> </a>
                </li>
                <li>
                    <a href="{{ route('curso.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Cursos</span> </a>
                </li> 
                <li>
                    <a href="{{ route('horario.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Horario</span> </a>
                </li>  
                
            @endif
            @if(auth()->user()->role_id==3 or auth()->user()->role_id==2)
            <li class="bold">
                <a data-toggle="collapse" href="#collapse1"><i class="fa fa-cog"></i>Reportes</a>
                <div id="collapse1" class="panel-collapse collapse">
                    <ul> 
                        @if(auth()->user()->role_id==3)                 
                            <li class="bold"><a href="{{route('reporte.scheduleSelectGet')}}">Por horario</a></li>
                        @endif
                        @if(auth()->user()->role_id==2)
                            <li class="bold"><a href="{{route('reporte.studentParametersGet')}}">Por alumno</a></li>
                        @endif
                    </ul>
                </div>
            </li>
            @endif             
            
            @if(auth()->user()->role_id==3)
            <li>
                <a href="{{ route('evaluacion.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Evaluaciones</span> </a>
            </li>
            <li>
                <a href="{{ route('pregunta.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Preguntas</span> </a>
            </li>
            {{--  <li>
                <a href="{{ route('cuestionario.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Cuestionarios</span> </a>
            </li>  --}}
            @endif
        </ul>
    </div>
</nav>
