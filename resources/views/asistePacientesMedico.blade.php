
    <!--Este usuario es medico, por lo tanto, la opoción junto al botón de menú debe ser "Pacientes"-->

    <!--Esta pantalla es parte del flujo del Medico, en específico cuando presiona el botón de "Pacientes" del
    navbar-->
    <!--La información que se manejará aquí son los pacientes que estén relacionados con ese médico en específico
    ID de Paciente, Nombre, última asistencia realizada y "más información" es la liga al perfil del paciente-->

<x-app-layout>

<div class="contenedor" id="uno">
        <div class="contenido">
            <h1>Pacientes Registrados</h1>
            <table class="table table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Paciente</th>
                    </tr>
                </thead>
                <tbody>

                    @if($users)
                    @php($cont = 0)
                    @foreach($users as $user)
                    @if($user->role == 2)
                    @php($cont++)
                    <tr data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">

                        <th scope="row">{{ $cont }}</th>
                        <td>{{ $user->name }}</td>
                        
                        <td><div class="collapse" id="collapseExample2">
                            <div class="card card-body drop">
                                <p>
                                <i class="fa-solid fa-user fa-4x"></i>
                                </p>
                                <div class="lineaCont"></div>
                                <div>
                                    <p>
                                        Última asistencia realizada:
                                    </p>
                                    <a href="">
                                        <p>Más Información</p>
                                    </a>
                                </div>
                                <div class="lineaCont"></div>
                                <button type="button" class="btn-light btn btnSi" data-toggle="modal" data-target="#exampleModal">
                                    Asistir
                            </button>
                            </div>
                        </div></td>  
                    </tr>
                    @endif
                    @endforeach
                    @endif
                    
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

