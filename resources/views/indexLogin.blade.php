<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/stylesLogin.css">
</head>

<body>

    <h1>INICIAR SESIÓN</h1>

   <form method="POST">
    <div class="correo">
        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo">
    </div>

    <div class="pass">
        <label for="pass">Contraseña</label>
        <input type="password" id="pass">
    </div>

    <div class="check">
            <input type="checkbox" id="check">
            <label id="size" for="check">Recordar mi usuario</label>
        </div>

    <div>
        <input id="button" type="submit" value="Iniciar Sesión">
     </div>


   </form>


</body>

</html>