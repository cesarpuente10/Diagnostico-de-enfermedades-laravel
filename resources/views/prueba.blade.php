<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/InicioStyles.css') }}" rel="stylesheet">
    
</head>
<body>
  <div class="presentation-container">
    <div class="first-presentation">
      <h1>Logotipo</h1>
      <h1 class="title">SISTEMA WEB PARA REGISTRO DE PACIENTES CON ENFERMEDADES NEURO-MUSCULARES</h1>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
        voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita
        kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
        <a class="smas-btn">
          <p>SABER MAS</p>
          <i class="fas fa-solid fa-chevron-right"></i>
        </a>
    </div>
    <div class="second-presentation">
      <h1>e magna aliquyam erat, sed diam
        voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita
        kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</h1>
        <a class="register-btn">
          <p>REGISTRATE O INICIA SESION AQUI</p>
          <i class="fas fa-solid fa-chevron-right"></i>
        </a>
    </div>
  </div>
</body>
</html>