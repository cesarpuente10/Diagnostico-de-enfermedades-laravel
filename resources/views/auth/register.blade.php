<x-guest-layout>
    <?php 
    $bandera = 1;
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
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            
                                <input type="hidden" name="role" value="2">

                                <label for="name">Nombre(s)</label>
                                <input required type="text" id="name" name="name">
                                
                                <label for="lastnamef">Apellido Paterno</label>
                                <input required type="text" id="lastnamef" name="lastnamef">

                                <label for="lastnamem">Apellido Materno</label>
                                <input required type="text" id="lastnamem" name="lastnamem">

                                <x-label for="email" :value="__('Correo Electrónico')" />
                                <input required type="email" id="email" name="email">

                                <label for="pass">Contraseña</label>
                                <input required type="password" id="password" name="password">

                                <label for="pass">Confirmar Contraseña</label>
                                <input required type="password" id="password_confirmation" name="password_confirmation">
                                
                                <div class="col-12">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                      <label class="form-check-label" for="invalidCheck">
                                        Acepto términos y condiciones
                                      </label>
                                      <div class="invalid-feedback">
                                        Debes aceptar los términos y condiciones antes de continuar
                                      </div>
                                    </div>
                                </div>
                                <button type="submit">{{ __('Registrar') }}</button>
                            </form>
                            <a href=" {{ route('login') }} " class="btn">¿Ya tienes cuenta? Inicia Sesión <i class="bi bi-caret-right-fill"></i> </a>
                        </section>
                    </div>
                    <?php
                        //echo "<meta http-equiv='refresh' content='0;url=./logica/deletetodoCarrito.php?id=$idUsuario'>";
                }elseif($bandera=="1"){
                    ?>
                    <div class="content-reg">
                        <section class="register">
                            <h1>Registro Paciente</h1>
                            <form class="needs-validation" method="POST" action="{{ route('register') }}">
                            @csrf
                                <input type="hidden" name="role" value="1">

                                <label for="name">Nombre(s)</label>
                                <input type="text" id="name" name="name" required>

                                <label for="lastnamef">Apellido Paterno</label>
                                <input required type="text" id="lastnamef" name="lastnamef">

                                <label for="lastnamem">Apellido Materno</label>
                                <input required type="text" id="lastnamem" name="lastnamem">

                                <label for="correo">Correo Electrónico</label>
                                <input required type="email" id="email" name="email">

                                <label for="pass">Contraseña</label>
                                <input required type="password" id="password" name="password">

                                <label for="pass">Confirmar Contraseña</label>
                                <input required type="password" id="password_confirmation" name="password_confirmation">

                                <div class="col-12">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                      <label class="form-check-label" for="invalidCheck">
                                        Acepto términos y condiciones
                                      </label>
                                      <div class="invalid-feedback">
                                        Debes aceptar los términos y condiciones antes de continuar
                                      </div>
                                    </div>
                                </div>
                                <button type="submit">{{ __('Registrar') }}</button>
                            </form>
                            <a href=" {{ route('login') }} " class="btn">¿Ya tienes cuenta? Inicia Sesión <i class="bi bi-caret-right-fill"></i> </a>
                        </section>
                    </div>
                    <?php
                }
                
            }
            
        ?>
    </div>
    



</x-guest-layout>
