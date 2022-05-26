<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrarse</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/registerStyles.css">
    </head>
    
    <x-guest-layout>
    <div class="info-flex">
    <p>
    <button  class="info" class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Registro Médico</button>
  <button  class="info" class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Registro Paciente</button>
  </div>

<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      <div class="content">
            <section class="register">
                <h1>Registro Médico</h1>
                <form action="functions/saveRegister.php" method="post">

                    <label for="iname">Nombre(s)</label>
                    <input type="text" id="iname">

                    <label for="apellido">Apellidos</label>
                    <input type="text" id="apellido">

                    <label for="correo">Correo electrónico</label>
                    <input type="email" id="correo">

                    <label for="pass">Contraseña</label>
                    <input type="password" id="pass">

                    <label for="pass">Confirmar contraseña</label>
                    <input type="password" id="pass">

                    <label for="cert">Certificado médico</label>
                    <input type="text" id="cert">

                    <div>
                     <input type="checkbox" id="check">
                     <label id="size" for="check">Acepto Terminos y Condiciones</label>
                    </div>

                    <button type="submit">Enviar</button>
                </form>
            </section>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
      <div class="content">
      <section class="register">
                <h1>Registro Paciente</h1>
                <form action="functions/saveRegister.php" method="post">

                    <label for="iname">Nombre(s)</label>
                    <input type="text" id="iname">

                    <label for="apellido">Apellidos</label>
                    <input type="text" id="apellido">

                    <label for="correo">Correo electrónico</label>
                    <input type="email" id="correo">

                    <label for="pass">Contraseña</label>
                    <input type="password" id="pass">

                    <label for="pass">Confirmar contraseña</label>
                    <input type="password" id="pass">

                    <div>
                     <input type="checkbox" id="check">
                     <label id="size" for="check">Acepto Terminos y Condiciones</label>
                    </div>

                    <button type="submit">Enviar</button>
                </form>
            </section>
        </div>
      </div>
    </div>
  </div>
</div>
<p>
    </x-guest-layout>
</html>
