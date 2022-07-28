<nav x-data="{ open: false }">
    <div class="contNavbar">
        <div class="pos-f-t navbarPaciente">
            <div id="nav1">
                
                <div class="dropdown">
                    <i class="fa-solid fa-bars fa-2x boton-nav " id="username dropdownMenu2" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu2">
                        <a href="/perfil" class="dropdown-item menuoption">Ver perfil de {{ Auth::user()->name }}</a>
                        <a href="/sabermas" class="dropdown-item menuoption">Saber más</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="dropdown-item menuoption" href="/logout"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ ('Cerrar Sesión') }}
                            </a>
                        </form>
                    </ul>
                </div>
                    @if (Auth::user()->role == 1)
                    <a href="{{ route('diagnosticosPaciente') }}">
                        <h6>Diagnósticos</h6>
                        
                    @else
                    <a href="{{ route('asistePacientesMedico') }}">
                        <h6>Pacientes</h6>
                    @endif
                    </a>
    
            </div>
            <a href="{{ route('inicio') }}"><img src="{{url('/images/uaslp-vector-logo.png')}}" style="height:50px;" alt="Image"/></a>
            
        </div>
        <div class="lineaNav"></div>
    </div>
</nav>
