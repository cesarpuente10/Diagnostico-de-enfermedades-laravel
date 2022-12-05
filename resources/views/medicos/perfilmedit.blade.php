<x-app-layout>

    
    <div class="img-style">
        <img src="{{url('/images/perfil.png')}}" width="200px">
    </div><br><br>

    
    <form class="form-perfil-edit " method="POST" action="{{ route('editm') }}" enctype="multipart/form-data">
        @csrf

        <div class="derecho">
            <h1 class="h1-titulo">Datos personales:</h1>
            <input type="hidden" name="medico_id" value="{{ $user->id }}">
            <div>
                <label class="edit-titulo">Nombre(s)</label>
                <input name="name" type="text" class="form-control" value="{{ $user->name }}">
            </div>

            <div>
                <label class="edit-titulo">Apellido paterno:</label>
                <input name="lastnamef" type="text" class="form-control" value="{{ $user->lastnamef }}">
            </div>

            <div>
                <label class="edit-titulo">Apellido materno:</label>
                <input name="lastnamem" type="text" class="form-control" value="{{ $user->lastnamem}}">
            </div>

            <div>
                <label class="edit-titulo">Correo Electrónico:</label>
                <input name="email" type="text" class="form-control"  value="{{ $user->email }}">
            </div>
       
        </div>



        <div class="izquierdo">
            @if ($consultorio)
            <h1 class="h1-titulo">Datos del consultorio:</h1>
            <div>
                <label class="edit-titulo">Dirección del consultorio</label>
                <input name="calle" type="text" class="form-control" value="{{ $consultorio->calle}}">
            </div>

            <div>
                <label class="edit-titulo">Número exterior:</label>
                <input name="numero_ext" type="number" class="form-control" value="{{ $consultorio->numero_ext}}">
            </div>

            <div>
                <label class="edit-titulo">Número interior:</label>
                <input name="numero_int" type="number" class="form-control" value="{{ $consultorio->numero_int}}">
            </div>


            <div>
                <label class="edit-titulo">Código postal:</label>
                <input name="cp" type="number" class="form-control" value="{{ $consultorio->cp}}">
            </div>

            <div>
                <label class="edit-titulo">Número telefónico del consultorio:</label>
                <input name="tel_fijo" type="number" class="form-control" value="{{ $consultorio->tel_fijo}}">
            </div>

            <div><br>
                <label class="edit-titulo" for="cedula"><strong>Cédula profesional:</strong></label>
                <input name="cedula" type="file" id="cedula" accept=".pdf"> 

            </div><br>

            @else
                <p>Este usuario no tiene consultorio</p>
            @endif
         
            <div class="btn-edit">
                <button class="btn btn-primary " type="submit">Guardar</button>
                <a href="/perfilm/{{ $user->id }}" class="btn btn-secondary">Cancelar</a>
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
