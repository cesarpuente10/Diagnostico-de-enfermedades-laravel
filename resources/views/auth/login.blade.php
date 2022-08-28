 <x-guest-layout>

    <div class=" w-full h-screen flex flex-col items-center justify-center p-14 text-center">


        <div class=" bg-blue-500 gray-500 flex items-center justify-center rounded-full">
            <i class=" text-4xl lg:text-6xl text-white m-6 bi bi-door-open-fill"></i>
        </div>
        <h1 class=" font-extrabold text-3xl lg:text-4xl my-5">Iniciar Sesión</h1>
        <p class=" text-base lg:text-lg my-5">Ingresa tus credenciales y selecciona el boton de iniciar sesion.</p>

        <form method="POST" action="{{ route('login') }}"
        class="flex flex-col my-10">
            @csrf

            <label class="my-3 text-base lg:text-lg" for="user">Correo Electrónico</label>
            <input class="p-3 rounded-lg text-base lg:text-lg" type="text" name="email" id="email">

            <label class="my-3 text-base lg:text-lg" for="pass">Contraseña</label>
            <input class="p-3 rounded-lg text-base lg:text-lg" type="password" name="password" id="password">

            <button type="submit" class="my-14 mx-10 flex items-center justify-center bg-black h-14 lg:h-10 text-white hover:bg-blue-500 px-8 rounded-md transition-all text-base lg:text-lg">{{ __('Iniciar Sesión') }}</button>
        
        </form>


        
    </div>

    {{-- <div class="bg-black w-full h-11">
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
    </div> --}}
</x-guest-layout>
