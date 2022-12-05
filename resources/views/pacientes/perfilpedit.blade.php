<x-app-layout>
    

   
        <div class="img-style">
        <img src="{{url('/images/perfil.png')}}" width="200px">
        </div><br><br>
    
        
        <form class="form-perfil-edit" method="POST" action="{{ route('editp') }}" novalidate>
            @csrf

            <div class="derecho">
                <h1 class="h1-titulo">Datos personales:</h1>
                <input type="hidden" name="paciente_id" value="{{ $user->id }}">

                <div>
                    <label class="edit-titulo">Nombre(s):</label>
                    <input name="name" type="text" class="form-control"  value="{{ $user->name }}" required>
                </div>
        
                <div>
                    <label class="edit-titulo">Apellido paterno:</label>
                    <input name="lastnamef" type="text" class="form-control"  value="{{ $user->lastnamef }}" required>
                </div>
        
                <div>
                    <label class="edit-titulo">Apellido materno:</label>
                    <input name="lastnamem" type="text" class="form-control"  value="{{ $user->lastnamem }}" required>
                </div>

                @if ($prediagnostico)
                <div>
                    <label class="edit-titulo">Fecha de nacimiento:</label>
                    <input name="fecha" type="date" class="form-control"  value="{{ date('Y-m-d', strtotime($prediagnostico->fecha)) }}" required>
                </div> 
                @endif

                <div>
                    <label class="edit-titulo">Correo Electrónico:</label>
                    <input name="email" type="text" class="form-control"  value="{{ $user->email }}" required>
                </div>

            </div>

            <div class="izquierdo">
                @if ($prediagnostico)
                <h1 class="h1-titulo">Datos del prediagnóstico:</h1>
                <div>
                    <label class="edit-titulo">Edad:</label>
                    <input name="edad" type="int" class="form-control"  value="{{ $prediagnostico->edad}}" required>
                </div>


                <div class="mb-2">
                    <label class="edit-titulo">Sexo:</label>
                    @if($prediagnostico->sexo == "Masculino")
                        <input type="radio" name="sexo" id="hombre" value="Masculino" checked="checked"> Masculino
                        <input type="radio" name="sexo" id="mujer" value="Femenino"> Femenino
                    
                    @else
                        <input type="radio" name="sexo" id="hombre" value="Masculino" > Masculino
                        <input type="radio" name="sexo" id="mujer" value="Femenino" checked="checked"> Femenino
                    @endif
                </div>

                <div>
                    <label class="edit-titulo">Peso:</label>
                    <input name="peso" type="int" class="form-control"  value="{{ $prediagnostico->peso}}" required>
                </div>

                <div>
                    <label class="edit-titulo">Estatura:</label>
                    <input name="estatura" type="int" class="form-control"  value="{{ $prediagnostico->estatura}}" required>
                </div>
        
            
                <div>
                    <label class="edit-titulo">Número telefónico de casa:</label>
                    <input name="tel_fijo" type="number" class="form-control" value="{{$prediagnostico->tel_fijo}}" required>
                </div>
        
                <div>
                    <label class="edit-titulo">Número telefónico del celular:</label>
                    <input name="celular" type="number" class="form-control" value="{{$prediagnostico->celular}}" required>
                </div><br>
        
                
                @else
                <p>Este usuario no tiene prediagnóstico</p>
                @endif
                <div class="col-12">
                    <button class="btn btn-primary " type="submit">Guardar</button>
                    <a href="/perfilp/{{ $user->id }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
  
        </form>

        @if (Auth::user()->role == 3)
            <form action="{{ route('eliminausuario') }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <input class="btn btn-danger" type="submit" value="Eliminar usuario">
            </form>
        @endif
  
    
    
    </x-app-layout>