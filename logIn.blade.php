<!-- <?php
/* $connect = mysqli_connect("localhost", "everest", "everest", "mikasfood");
$query = "SELECT * FROM user WHERE nombre = 'hola'";
$result = mysqli_query($connect, $query); */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <form action="functions/saveRegister.php" method="post">

        <label for="d">Inserta name</label>
        <input type="text" name="d" id="d">

        <button type="submit">enviar</button>

        </form>
    </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/logInStyles.css"/>
</head>

<body>

<div class="content">
    <section class="logIn">
        <div>
            <i class="bi bi-door-open-fill"></i>
            <h1>Iniciar Sesión</h1>
        
            <form action="functions/checkLogIn.php" method="post">
                <br>
                <label for="user">Correo Electronico</label><br>
                <input type="text" name="user" id="name">

                <br>
                <label for="pass">Contraseña</label><br>
                <input type="password" name="pass" id="pass">

                <br>
                <button type="submit">Iniciar Sesión</button>
            </form>

            <?php  
                if(isset($_GET) && !empty($_GET)){
                     echo '<p class="error">' . $_GET['error'] . '</p>';
                }
            ?>
        </div>
    </section>

    <section class="registerBanner">
        <div>

            <h1>No tienes cuenta? Registrate aqui.</h1>
            <div class="imgLogIn"></div>
            <!-- <img src="../assets/img/Domain.png" alt=""> -->
            <a href=" {{ route('registro') }} " class="btn">Registrarse <i class="bi bi-caret-right-fill"></i> </a>

        </div>
    </section>
</div>


    
</body>
</html>


