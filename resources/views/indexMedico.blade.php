<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Medico</title>
    <link rel="stylesheet" href="assets/css/stylesMedico.css">
</head>

<body>
    <div class="RePM">
        <input type="submit" value="REGISTARSE COMO PACIENTE" id="rPaciente" name="rPaciente">
        <input type="submit"  value="REGISTRASE COMO MÉDICO" id="rMedico" name="rMedico">
    </div>

    <form>

        <div>
            <label  for="iname">Nombre(s)</label>
            <input type="text" id="iname">
        </div>

        <div>
            <label for="apellido">Apellidos</label>
            <input type="text" id="apellido">
        </div>

        <div>
            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo">
        </div>

        <div >
            <label for="pass">Contraseña</label>
            <input type="password" id="pass">
        </div>

        <div >
            <label for="pass">Confirmar contraseña</label>
            <input type="password" id="pass">
        </div>


        <div>
            <label for="cert">Certificado médico</label>
            <input type="text" id="cert">
        </div>

        <div class="check">
            <input type="checkbox" id="check">
            <label id="size" for="check">Acepto Terminos y Condiciones</label>
        </div>

        <div>
            <a href="{{ route('successlogin') }}"> <input id="button" type="submit" value="Registrarme"> </a>

        </div>
    </form>

</body>

</html>