<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Bootstrap Icons -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"/>

        <!-- Css Links -->
        <link rel="stylesheet" href="css/indexStyle.css"/>

        <title>Document</title>
    </head>
    <body>

        <div class="cont">

            <div class="box">

                <div>
                    <h3>UASLP</h3>
                    <h1>
                        SISTEMA WEB PARA REGISTRO DE PACIENTES CON ENFERMEDADES NEURO-MUSCULARES.
                    </h1>
                    <p>
                        El Sistema Web Para Registro De Pacientes Con Enfermedades Neuro-musculares está
                        diseñado para que usuarios con enfermedades neuromusculares obtengan un
                        diagnóstico preventivo...
                    </p>
                    <button class="btn" id="myBtn">
                        Saber mas
                        <i class="bi bi-caret-right-fill arrow-right"></i>
                    </i>
                </button>
            </div>

        </div>

        <div class="box">
            <div>
                <div class="cont-img">
                  <img src="assets/img/undraw_Books_re_8gea.png" alt="">
                </div>
                <!-- Aqui se enruta -->
                <div><a href=" {{ route('login') }} ">INICIA SESION AQUI <i class="bi bi-caret-right-fill arrow-right"></i></a></div>
            </div>

        </div>

    </div>

    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <i class="bi bi-x-square-fill close"></i>
            <div>
                <h1>SISTEMA WEB PARA REGISTRO DE PACIENTES CON ENFERMEDADES NEURO-MUSCULARES.</h1>
                <p>El Sistema Web Para Registro De Pacientes Con Enfermedades Neuro-musculares
                    está diseñado para que usuarios con enfermedades neuromusculares obtengan un
                    diagnóstico preventivo para este conjunto de enfermedades, puede realizarse un
                    diagnóstico por cuenta propia o con asistencia de un médico que ya cuente con el
                    sistema.</p>
            </div>
        </div>

    </div>

    <script src="assets/js/sabermasModal.js"></script>
</body>
</html>
