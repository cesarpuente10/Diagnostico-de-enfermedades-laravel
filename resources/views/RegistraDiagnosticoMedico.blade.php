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

<body>
    <div class="contNavbar">
        <div class="pos-f-t navbarPaciente">
            <div id="nav1">
                <div class="dropdown">
                    <i class="fa-solid fa-bars fa-2x boton-nav " id="username dropdownMenu2" href="#"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <div class="dropdown-menu menuoption" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item menuoption" type="button" href="index.html">Cerrar Sesión</button>
                        <button class="dropdown-item menuoption" type="button">Ver Perfíl</button>
                        <button class="dropdown-item menuoption" type="button">Saber más</button>
                    </div>
                </div>
                <a href="">
                    <h6>Pacientes</h6>
                </a>

            </div>
            <img src="{{url('/images/uaslp-vector-logo.png')}}" alt="Image"/>
        </div>
        <div class="lineaNav"></div>
    </div>
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
                    <tr data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <th scope="row">1</th>
                        <td>Nombre del paciente</td>
                        <td><div class="collapse" id="collapseExample">
                        <div class="card card-body drop">
                            <p>
                            <i class="fa-solid fa-user fa-4x"></i>
                            </p>
                            <div class="lineaCont"></div>
                            <div>
                                <p>
                                    Último diagnóstico realizado:
                                </p>
                                <p>
                                    Última asistencia realizada:
                                </p>
                                <p>
                                    Más información:
                                </p>
                            </div>
                            <div class="lineaCont"></div>
                            <button type="button" class="btn-light btn btnSi" data-toggle="modal" data-target="#exampleModal">
                                Asistir
                           </button>
                        </div>
                    </div></td>
                           
                    </tr>
                    <tr data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <th scope="row">2</th>
                        <td>Nombre del paciente</td>
                        <td><div class="collapse" id="collapseExample2">
                        <div class="card card-body drop">
                            <p>
                            <i class="fa-solid fa-user fa-4x"></i>
                            </p>
                            <div class="lineaCont"></div>
                            <div>
                                <p>
                                    Último diagnóstico realizado:
                                </p>
                                <p>
                                    Última asistencia realizada:
                                </p>
                                <p>
                                    Más información:
                                </p>
                            </div>
                            <div class="lineaCont"></div>
                            <button type="button" class="btn-light btn btnSi" data-toggle="modal" data-target="#exampleModal">
                                Asistir
                           </button>
                        </div>
                    </div></td>
                           
                    </tr>
                    <tr data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <th scope="row">3</th>
                        <td>Nombre del paciente</td>
                        <td><div class="collapse" id="collapseExample3">
                        <div class="card card-body drop">
                            <p>
                            <i class="fa-solid fa-user fa-4x"></i>
                            </p>
                            <div class="lineaCont"></div>
                            <div>
                                <p>
                                    Último diagnóstico realizado:
                                </p>
                                <p>
                                    Última asistencia realizada:
                                </p>
                                <p>
                                    Más información:
                                </p>
                            </div>
                            <div class="lineaCont"></div>
                            <button type="button" class="btn-light btn btnSi" data-toggle="modal" data-target="#exampleModal">
                                Asistir
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