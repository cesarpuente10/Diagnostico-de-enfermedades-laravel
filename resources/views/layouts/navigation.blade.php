<nav x-data="{ open: false }">
    <div class="contNavbar">
        <div class="pos-f-t navbarPaciente">
            <div id="nav1">
                
                <div class="dropdown">
                    <i class="fa-solid fa-bars fa-2x boton-nav " id="username dropdownMenu2" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu2">
                        <a href="/perfil" class="dropdown-item menuoption">Ver perfil de {{ Auth::user()->name }}</a>
                        <a href="/sabermas" class="dropdown-item menuoption" data-bs-toggle="modal" data-bs-target="#exampleModal">Saber más</a>
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
                <div class="dropdown notifications">
                <i class="fa-solid fa-bell fa-xl"> <!--<span class="badge">1</span>--></i> 
                </div>
                    @if (Auth::user()->role == 1)
                    <a href="{{ route('diagnosticosPaciente') }}">
                        <h6 class="fa-xl">Diagnósticos</h6>
                        
                    @else
                    <a href="{{ route('asistePacientesMedico') }}">
                        <h6 class="fa-xl">Pacientes</h6>
                    @endif
                    </a>
                    
            </div>
            <a href="{{ route('inicio') }}"><img src="{{url('/images/uaslp-vector-logo.png')}}" style="height:50px;" alt="Image"/></a>
            
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
