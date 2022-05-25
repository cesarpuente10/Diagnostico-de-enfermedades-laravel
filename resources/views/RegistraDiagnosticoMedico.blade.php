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
     
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--Scripts-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--Styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylelListaDiagnostico.css') }}" rel="stylesheet">
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

<!--Este flujo se presenta como médico, cuando se presiona el botón de "Registrar diagnóstico",
    Se debe escoger al paciente al que se le desea hacer el diagnóstico-->
<body>
    @include('navbar')
    <div class="contenedor" id="uno">
        <div class="contenido">
            <h1>Registrar diagnóstico</h1>
            <table class="table table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Paciente</th>
                        <th scope="col">Generar diagnóstico</th>

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