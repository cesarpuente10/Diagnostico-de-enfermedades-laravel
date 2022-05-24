<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/registerStyles.css">
    </head>
    <body>
        <div class="content">
            <section class="register">
                <h1>Registrarse</h1>
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

                    <button type="submit">enviar</button>
                </form>
            </section>
        </div>
    </body>
</html>