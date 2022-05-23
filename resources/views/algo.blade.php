<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
</head>
<body>
    @foreach ($algo as $alg)
    <h1>hola</h1>
    @endforeach

    <section class="row container bienvenida">
        <div class="col welcome-photo"></div>
        <h1 class="col">Bienvenido Nombre</h1>
    </section>

    <div class="container-fluid row inicio">
        <section class="col-lg-7 row leftdiag-container">
            <div class="vstack gap-2 col-sm-3 principal-card">
                <div class="image"></div> <br>
                <button type="button" class="btn btn-secondary principal-btn">Registrar Diagnóstico</button>
            </div>
            
            <div class="vstack gap-2 col-sm-3 principal-card">
                <div class="image"></div> <br>
                <button type="button" class="btn btn-secondary principal-btn">Registrar Paciente</button>
            </div>
        </section>

        <div class="col-lg-1">
            <div class="vr"></div>
        </div>
        

        <section class="principal-list overflow-auto col-lg-4">

            <div class="principal-list-container row">
                <div class="col principal-photo"></div>
                <div class="col">
                    <p>Nombre del Paciente</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, eaque similique delectus ratione fugit maiores neque cupiditate sint aut magni, odit omnis porro esse eos numquam assumenda, rem cum! Provident!</p>
                </div>
                
            </div>

            <button type="button" class="btn btn-secondary principal-btn">No sé si es un botón</button>
            
            <div class="principal-list-container row">
                <div class="col principal-photo"></div>
                <div class="col">
                    <p>Nombre del Paciente</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, eaque similique delectus ratione fugit maiores neque cupiditate sint aut magni, odit omnis porro esse eos numquam assumenda, rem cum! Provident!</p>
                </div>
                
            </div>

            <button type="button" class="btn btn-secondary principal-btn">No sé si es un botón</button>

            <div class="principal-list-container row">
                <div class="col principal-photo"></div>
                <div class="col">
                    <p>Nombre del Paciente</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, eaque similique delectus ratione fugit maiores neque cupiditate sint aut magni, odit omnis porro esse eos numquam assumenda, rem cum! Provident!</p>
                </div>
                
            </div>

            <button type="button" class="btn btn-secondary principal-btn">No sé si es un botón</button>

            <div class="principal-list-container row">
                <div class="col principal-photo"></div>
                <div class="col">
                    <p>Nombre del Paciente</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, eaque similique delectus ratione fugit maiores neque cupiditate sint aut magni, odit omnis porro esse eos numquam assumenda, rem cum! Provident!</p>
                </div>
                
            </div>
            
            <button type="button" class="btn btn-secondary principal-btn">No sé si es un botón</button>

            <div class="principal-list-container row">
                <div class="col principal-photo"></div>
                <div class="col">
                    <p>Nombre del Paciente</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, eaque similique delectus ratione fugit maiores neque cupiditate sint aut magni, odit omnis porro esse eos numquam assumenda, rem cum! Provident!</p>
                </div>
                
            </div>

            <button type="button" class="btn btn-secondary principal-btn">No sé si es un botón</button>

        </section>
    </div>
    
</body>
</html>