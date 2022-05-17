<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--Scripts-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--Styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleindexPaciente.css') }}" rel="stylesheet">

    
    
</head>

<body>
    <div class="RePM">
        <input type="submit" value="REGISTRARSE COMO PACIENTE" id="rPaciente" name="rPaciente">
        <input type="submit"  value="REGISTRARSE COMO MÉDICO" id="rMedico" name="rMedico">
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

        <div class="check">
            <input type="checkbox" id="check">
            <label id="size" for="check">Acepto Terminos y Condiciones</label>
        </div>

        <div>
           <input id="button" type="submit" value="Registrarse">
        </div>
    </form>

</body>

</html>