<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--Scripts-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--Styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleRegistraDiagnosticoMedico.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleNavBar.css') }}" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</head>

<!--Esta pantalla es parte del flujo del Medico, en específico cuando presiona el botón de "Pacientes"-->

@include('navbar')

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


</body>

</html>