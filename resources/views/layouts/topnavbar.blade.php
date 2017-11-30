<div class="row border-bottom">
    <nav class="navbar navbar-default navbar-static-top">
            {{--  <div class="container">  --}}
                @auth               
                <div class="navbar-header">
                    {{--  <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>                      --}}
                </div>
                @endauth
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        {{--  &nbsp;  --}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @else
                            <li class="dropdown">
                                {{--  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>  --}}
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                {{--  <ul class="dropdown-menu">
                                    <li>
                                        
                                    </li>
                                </ul>  --}}
                            </li>
                        @endguest
                    </ul>
                </div>
            {{--  </div>  --}}
        </nav>
</div>
