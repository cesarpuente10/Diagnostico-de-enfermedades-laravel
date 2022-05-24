<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de prediagnóstico</title>
    <link rel="stylesheet" href="assets/css/formpre.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DENM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
          </li>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menú
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"></a></li>
              <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Cambiar contraseña</a></li>
            </ul>
          </li>
          
        </ul>
      
      </div>
    </div>
  </nav>
    <br>
    <br>
    <b><h1>FORMULARIO DE </h1></b>
    <b><h1>PREDIAGNÓSTICO</h1></b>
  
    <div class="else">
    <div class="myDiv">
      <h2>¿Qué es un formulario de prediagnóstico?</h2>
      <p>Es un sistema experto, capaz de interpretar los síntomas que explica el usuario utilizando el lenguaje natural.</p>
      <b><p>Favor de responder este cuestionario digital para la interpretación del sistema</p></b>

    </div>
    
   
    <table>
        <tr>
         <b> <th>Expediente de paciente</th></b>
        </tr>
        <tr>
          <td class="titles">Datos del paciente</td>
        </tr>
        <tr>
          <td>
            <label>Nombre del paciente: <input type="text"class="name"> </label>
            
            <label>Sexo: </label>
            <label>Masculino <input type="checkbox"><br></label>
            <label>Femenino <input type="checkbox"><br></label>
          </td>
          </td>
        </tr>
        <tr>
          <td>
            <label>Edad: <input type="text" class="age"> </label>
            <label>Originario de: <input type="text" class="name"> </label>
            <label>Fecha: <input type="date"> </label>
          </td>
        </tr>
      </table><br>

      

      <table>
        <tr>
          <td class="titles">Observaciones iniciales del paciente</td>
        </tr>
        <tr>
          <td>
            <label>Peso: <input type="text" class="age"> </label>
            <label>Estatura: <input type="text" class="age"> </label>
            <label>Presión arterial: <input type="text" class="age"> </label>
          </td>
          <tr>
            <td>
              <label>Frecuencia cardiaca: <input type="text" class="age"> </label>
              <label>Frecuencia respiratoria: <input type="text" class="age"> </label>
              <label>Temperatura (en grados celsius): <input type="text" class="age"> </label>
            </td>
          </tr>
        </tr>
      </table>
      <table>
        <tr>
          <th>Historial</th>
        </tr>
      </table>
      <table>
        <tr>
          <td>Archivo</td>
          <td>Diagnóstico</td>
        </tr>
      </table><br>
      
      <table>
        <tr>
          <td>
            <label >Subir archivo previo de señales mio-eléctricas (.txt) <input type="file"class="file"><br></label><br>
          </td>
        </tr>
    </table><br>
      <hr>

      
      
    <table>
      <tr>
        <th><input type="submit" class="send"></th>
      </tr>
    </table>
      
    
      
     
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>