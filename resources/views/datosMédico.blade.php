<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/datosusuario.css') }}" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/datosusuario.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleNavBar.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"        crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"        crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"        crossorigin="anonymous"></script>
    </head>
    <title>Datos del Médico</title>

    <link rel="stylesheet" href="css/datosusuario.css">
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
            <!--
            <img src="uaslp-vector-logo.png" alt="">
            -->
            <img src="{{url('/images/uaslp-vector-logo.png')}}" alt="Image"/>
        </div>
        <div class="lineaNav"></div>
    </div>
    
    <div class="Data">
        <b><h1>Datos Del Médico</h1></b><br>
        <label>Nombre del Médico</label><br>
        <input type="text" value="Nombre y apellido" class="boxes"> <img src="pencil-square.svg" alt=""><div class="edit">
            </div><br>
        <br>
        <label>Edad</label><br>
        <input type="text" value="Edad del paciente"class="boxes"><img src="pencil-square.svg" alt=""><div class="edit">
            
            </div><br>
        <br>
        <label>Especialidad</label><br>
        <input type="text" value="Especialidad" class="boxes"><img src="pencil-square.svg" alt=""><div class="edit">

            </div><br>
        <br>
           
            </div><br>
        <br>
        <label>Cédula profesional</label><br>
        <input type="file" value="cedula profesional" class="boxes"><img src="pencil-square.svg" alt=""><div class="edit">
            
            </div><br>
        <br>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
        
    </div>
    

    


    
</body>
</html>