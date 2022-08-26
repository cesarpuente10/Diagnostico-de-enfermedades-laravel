 <x-guest-layout>

    <div class="bg-black w-full h-11">
        hola
    </div>
    <div class="content">
        <section class="logIn">
            <div>
                <i class="bi bi-door-open-fill"></i>
                <h1>Iniciar Sesión</h1>
            
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <br>
                    <label for="user">Correo Electrónico</label><br>
                    <input type="text" name="email" id="email">
    
                    <br>
                    
                    <label for="pass">Contraseña</label><br>
                    <input type="password" name="password" id="password">
    
                    <br>
                    <button type="submit">{{ __('Iniciar Sesión') }}</button>
                </form>
    
            </div>
        </section>
    
        <section class="registerBanner">
            <div>
    
                <h1>¿No tienes cuenta? Regístrate aqui.</h1>
                <div class="imgLogIn"></div>
                <!-- <img src="../assets/img/Domain.png" alt=""> -->
                <a href=" {{ route('register') }} " class="btn">Registrarse <i class="bi bi-caret-right-fill"></i> </a>
    
            </div>
        </section>
    </div>
</x-guest-layout>
