<x-guest-layout>
    
    <div class="info-flex">
        <p>
        <button  class="info" class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Registro Médico</button>
        <button  class="info" class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Registro Paciente</button>
    </div>

    

    <div class="row">

        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                    <div class="content">
                        <section class="register">
                            <h1>Registro Médico</h1>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                
                                <input type="hidden" name="role" value="2">

                                <label for="name">Nombre(s)</label>
                                <input type="text" id="name" name="name">

                                <label for="lastnamef">Apellido paterno</label>
                                <input type="text" id="lastnamef" name="lastnamef">

                                <label for="lastnamem">Apellido materno</label>
                                <input type="text" id="lastnamem" name="lastnamem">

                                <label for="correo">Correo electrónico</label>
                                <input type="email" id="email" name="email">

                                <label for="pass">Contraseña</label>
                                <input type="password" id="password" name="password">

                                <label for="pass">Confirmar contraseña</label>
                                <input type="password" id="password_confirmation" name="password_confirmation">

                                <label for="cert">Certificado médico</label>
                                <input type="text" id="cert" name="cert">

                                <div>
                                    <input type="checkbox" id="check">
                                    <label id="size" for="check">Acepto Terminos y Condiciones</label>
                                </div>

                                <button type="submit">{{ __('Registrar') }}</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                    <div class="content">
                        <section class="register">
                            <h1>Registro Paciente</h1>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <input type="hidden" name="role" value="1">

                                <label for="name">Nombre(s)</label>
                                <input type="text" id="name" name="name">

                                <label for="lastnamef">Apellido paterno</label>
                                <input type="text" id="lastnamef" name="lastnamef">

                                <label for="lastnamem">Apellido materno</label>
                                <input type="text" id="lastnamem" name="lastnamem">

                                <label for="correo">Correo electrónico</label>
                                <input type="email" id="email" name="email">

                                <label for="pass">Contraseña</label>
                                <input type="password" id="password" name="password">

                                <label for="pass">Confirmar contraseña</label>
                                <input type="password" id="password_confirmation" name="password_confirmation">

                                <div>
                                    <input type="checkbox" id="check">
                                    <label id="size" for="check">Acepto Terminos y Condiciones</label>
                                </div>

                                <button type="submit">{{ __('Registrar') }}</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>



</x-guest-layout>
