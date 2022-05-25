    <!--Este usuario es paciente, por lo tanto, la opoción junto al botón de menú debe ser "Diagnósticos"-->

    <!--Esta pantalla es parte del flujo del paciente, cuando presiona el botón de "Ver más" en la 
    sección de "médicos disponibles" Genera lista de los médicos para solicitar una asistencia-->
    <!--la información que manejará es el ID del médico, nombre, número de pacientes. El botón "ir a perfil completo"
    redirecciona al perfil del paciente-->

<x-app-layout>
    
<div class="contenedor" id="uno">
        <div class="contenido">
            <h1>Médicos</h1>
            <table class="table table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Paciente</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <th scope="row">1</th>
                        <td>Nombre del médico</td>
                        <td><div class="collapse" id="collapseExample">
                        <div class="card card-body drop">
                            <p>
                            <i class="fa-solid fa-user-doctor fa-4x"></i>
                            </p>
                            <div class="lineaCont"></div>
                            <div class = "contenidoDrop">
                                <a href="">
                                    <p> Ir a perfil completo</p> 
                                </a>
                                <p> Número de Pacientes:</p>
                            </div>
                            <div class="lineaCont"></div>
                            <button type="button" class="btn-light btn btnSi" data-toggle="modal" data-target="#exampleModal">
                                Solicitar asistencia
                           </button>
                        </div>
                    </div></td>
                           
                    </tr>

                    <tr data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <th scope="row">2</th>
                        <td>Nombre del médico</td>
                        <td><div class="collapse" id="collapseExample2">
                        <div class="card card-body drop">
                            <p>
                            <i class="fa-solid fa-user-doctor fa-4x"></i>
                            </p>
                            <div class="lineaCont"></div>
                            <div class = "contenidoDrop">
                                <a href="">
                                    <p> Ir a perfil completo</p> 
                                </a>
                                <p> Número de Pacientes:</p>
                            </div>
                            <div class="lineaCont"></div>
                            <button type="button" class="btn-light btn btnSi" data-toggle="modal" data-target="#exampleModal">
                                Solicitar asistencia
                           </button>
                        </div>
                    </div></td>
                           
                    </tr>

                    <tr data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <th scope="row">3</th>
                        <td>Nombre del médico</td>
                        <td><div class="collapse" id="collapseExample3">
                        <div class="card card-body drop">
                            <p>
                            <i class="fa-solid fa-user-doctor fa-4x"></i>
                            </p>
                            <div class="lineaCont"></div>
                            <div class = "contenidoDrop">
                                <a href="">
                                    <p> Ir a perfil completo</p> 
                                </a>
                                <p> Número de Pacientes:</p>
                            </div>
                            <div class="lineaCont"></div>
                            <button type="button" class="btn-light btn btnSi" data-toggle="modal" data-target="#exampleModal">
                                Solicitar asistencia
                           </button>
                        </div>
                    </div></td>
                           
                    </tr>

                    
                </tbody>
            </table>
        </div>
    </div>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Asistir Paciente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Seguro desea asistir al paciente "NombrePaciente"?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btnNo" data-dismiss="modal">Cerrar</button>
          <a href="indexPaciente.blade.php"><button type="button" class="btn btn-primary">Asistir</button></a>
        </div>
      </div>
    </div>
  </div>
  
</x-app-layout>

