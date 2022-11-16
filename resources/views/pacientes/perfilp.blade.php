<x-app-layout>
    


    <div class="img-style">
    <img src="{{url('/images/perfil.png')}}" width="200px">
    </div><br><br>

    
    <div class="form-perfil-edit">
        <div class="derecho">
            <h1 class="h1-titulo">Datos personales:</h1>
            <div>
                <label class="edit-titulo">Nombre(s):</label>
                <p>{{ $user->name }}</p>
            </div>

            <div>
                <label class="edit-titulo">Apellido paterno:</label>
                <p>{{ $user->lastnamef }}</p>
                
            </div>

            <div>
                <label class="edit-titulo">Apellido materno:</label>
                <p>{{ $user->lastnamem }}</p>
            </div>

            <div>
                <label class="edit-titulo">Fecha de nacimiento:</label>
                <p>{{ date('d-m-Y', strtotime($prediagnostico->fecha)) }}</p>
            </div>
            
            <div>
                <label class="edit-titulo">Correo Electrónico:</label>
                <p>{{ $user->email }}</p>
            </div>

        </div>

        <div class="izquierdo">
                <h1 class="h1-titulo">Datos del prediagnóstico:</h1>
                <div>
                    <label class="edit-titulo">Edad:</label>
                    <p>{{ $prediagnostico->edad}}</p>
                </div>

                <div>
                    <label class="edit-titulo">Sexo:</label>
                    <p>{{ $prediagnostico->sexo}}</p>
                </div>

                <div>
                    <label class="edit-titulo">Peso:</label>
                    <p>{{ $prediagnostico->peso}}</p>
                </div>

                <div>
                    <label class="edit-titulo">Estatura:</label>
                    <p>{{ $prediagnostico->estatura}}</p>
                </div>
                
                @if ($prediagnostico->tel_fijo)
                <div>
                    <label class="edit-titulo">Número telefónico de casa:</label>
                    <p>{{$prediagnostico->tel_fijo}}</p>
                </div>
                @endif
                
                @if ($prediagnostico->celular)
                <div>
                    <label class="edit-titulo">Número telefónico del celular:</label>
                    <p>{{$prediagnostico->celular}}</p>
                </div>
                @endif
                <br>
                @if (Auth::user()->id == $user->id || Auth::user()->role == 3)
                    <div class="">
                        <a href="/perfilp/edit/{{ Auth::user()->id }}" class="btn btn-secondary">Editar</a>
                    </div>
                @endif
                <br><br>
                
            </div>

        </div>
  
       


</x-app-layout>