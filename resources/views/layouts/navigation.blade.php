<nav x-data="{ open: false }">
    <div class="contNavbar">
        <div class="pos-f-t navbarPaciente">
            <div id="nav1">
                
                <div class="dropdown">
                    <i class="fa-solid fa-bars fa-2x boton-nav " id="username dropdownMenu2" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu2">
                        @if (Auth::user()->role == 2)
                            <a href="/perfilm/{{ Auth::user()->id }}" class="dropdown-item menuoption">Ver perfil de {{ Auth::user()->name }}</a>
                        @elseif (Auth::user()->role == 1)
                        <a href="/perfilp/{{ Auth::user()->id }}" class="dropdown-item menuoption">Ver perfil de {{ Auth::user()->name }}</a>
                        @endif
                        <button class="dropdown-item menuoption" data-bs-toggle="modal" data-bs-target="#exampleModal">Saber más</button>
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
                        <a href ="/diagnosticospaciente/{{ Auth::user()->id }}">
                            <h6 class="fa-xl">Diagnósticos</h6>
                        </a>
                        <a href ="{{ route('asistenciaspaciente') }}">
                            <h6 class="fa-xl">Asistencias</h6>
                        </a>
                    @elseif(Auth::user()->role == 2)
                    <a href="{{ route('verpacientes') }}">
                        <h6 class="fa-xl">Pacientes</h6>
                    @endif
                    </a>
                    
            </div>
            <a href="{{ route('inicio') }}"><i class="fa-solid fa-house-chimney fa-2x"></i></a>
            
        </div>
        <div class="lineaNav"></div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h1>SISTEMA WEB PARA REGISTRO DE PACIENTES CON ENFERMEDADES NEURO-MUSCULARES.</h1>
            <p>El Sistema Web Para Registro De Pacientes Con Enfermedades Neuro-musculares
                está diseñado para que usuarios con enfermedades neuromusculares obtengan un
                diagnóstico preventivo para este conjunto de enfermedades, puede realizarse un
                diagnóstico por cuenta propia o con asistencia de un médico que ya cuente con el
                sistema.</p>
        </div>
      </div>
    </div>
  </div>

</nav>
