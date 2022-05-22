<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PantallaNavbar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./styleNavBar.css" />
    <link rel="stylesheet" type="text/css" href="./styleDiagnostico.css" />
    <script src="https://kit.fontawesome.com/e00854f1d9.js" crossorigin="anonymous"></script>
    <!-- header bueno 
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    Scripts
    <script src="{{ asset('js/app.js') }}" defer></script>
    Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesWelcome1.css') }}" rel="stylesheet">
    -->
    <script src="https://kit.fontawesome.com/e00854f1d9.js" crossorigin="anonymous"></script>  -->
     
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--Scripts-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--Styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylelListaDiagnostico.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleNavBar.css') }}" rel="stylesheet">
    
    <!--
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    -->
    <!--
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    -->
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
                    <h6>Diagnósticos</h6>
                </a>

            </div>
            <img src="uaslp-vector-logo.png" alt="">
            <!--
            <img src="uaslp-vector-logo.png" alt="">
            -->
            <img src="{{url('/images/uaslp-vector-logo.png')}}" alt="Image"/>
        </div>
        <div class="lineaNav"></div>
    </div>
    <div class="contenedor" id="uno">
        <div class="contenido">
            <h1>Registrar diagnósticos</h1>
            <h1>Diagnósticos</h1>
            <table class="table table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Paciente</th>
                        <th scope="col">Generar diagnóstico</th>

                        <th scope="col">Fecha</th>
                        <th scope="col">Resultado</th>
                        <th scope="col">Reporte</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>

                        <td>Nombre del paciente</td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Generar
                           </button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Nombre del paciente</td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Generar
                           </button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Nombre del paciente</td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                           Generar
                          </button></td>
                        <td>10/05/2022</td>
                        <td>Neuropatía</td>
                        <td><button type="button" class="btn btn-light">Abrir</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>11/05/2022</td>
                        <td>Miopatía</td>
                        <td><button type="button" class="btn btn-light">Abrir</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>12/05/2022</td>
                        <td>Músculo sano</td>
                        <td><button type="button" class="btn btn-light btnSi">Abrir</button></td>

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
          <h5 class="modal-title" id="exampleModalLabel">Registrar diagnóstico</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Seguro desea generar un diagnóstico para este paciente?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <a href="indexPaciente.blade.php"><button type="button" class="btn btn-primary">Generar diagnóstico</button></a>
        </div>
      </div>
    </div>
  </div>

 
</body>

</html>