<x-guest-layout>
    <?php 
    $bandera = 0;
    ?>
    <div class="registro">
        <div class="info-flex">
            <p>
            <!--<button class="info" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Registro Médico</button>-->
            <button class="info" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1" onclick="window.location.href='register?flag=2'">Registro Médico</button>
            <button class="info" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2" onclick="window.location.href='register?flag=1'">Registro Paciente</button>
        </div>

        <?php 
            if(!empty($_GET))
            {
                $bandera = $_GET['flag'];
                if($bandera=="2"){
                    ?>
                    <div class="content-reg">
                        <section class="register">
                            <h1>Registro Medico</h1>
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                            
                                <input type="hidden" name="role" value="2">

                                <label for="name">Nombre(s)</label>
                                <input type="text" id="name" name="name">

                                <label for="apellido">Apellidos</label>
                                <input type="text" id="apellido">

                                <x-label for="email" :value="__('Correo Electrónico')" />
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
                    <?php
                        //echo "<meta http-equiv='refresh' content='0;url=./logica/deletetodoCarrito.php?id=$idUsuario'>";
                }elseif($bandera=="1"){
                    ?>
                    <div class="content-reg">
                        <section class="register">
                            <h1>Registro Paciente</h1>
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                                <input type="hidden" name="role" value="1">

                                <label for="name">Nombre(s)</label>
                                <input type="text" id="name" name="name">

                                <label for="apellido">Apellidos</label>
                                <input type="text" id="apellido">

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
                    <?php
                }
                
            }
            
        ?>
    </div>
    



</x-guest-layout>
