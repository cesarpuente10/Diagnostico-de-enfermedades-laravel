<x-app-layout>

    <div class="center">
    <div>
        <img src="{{url('/images/perfil.png')}}" width="200px">
    </div><br><br>

    
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
            <label class="form-label">Nombre(s)</label>
            <p>{{ $user->name }}</p>
        </div>

        <div class="col-md-4">
            <label class="form-label">Apellido paterno</label>
            <p>{{ $user->lastnamef }}</p>
        </div>

        <div class="col-md-4">
            <label class="form-label">Apellido materno</label>
            <p>{{ $user->lastnamem}}</p>
        </div>

        <div class="col-md-4">
            <label >Correo Electrónico</label>
            <p>{{ $user->email }}</p>
        </div>

        <div class="col-md-3">
            <label class="form-label">Dirección del consultorio</label>
            <p>{{ $consultorio->calle}}</p>
        </div>


        <div class="col-md-3">
            <label class="form-label">Número exterior</label>
            <p>{{ $consultorio->numero_ext}}</p>
        </div>

        <div class="col-md-3">
            <label class="form-label">Número interior</label>
            <p>{{ $consultorio->numero_int}}</p>
        </div>


        <div class="col-md-3">
            <label class="form-label">Código postal</label>
            <p>{{ $consultorio->cp}}</p>
        </div>

        <div class="col-md-3">
            <label class="form-label">Número telefónico del consultorio</label>
            <p>{{ $consultorio->tel_fijo}}</p>
        </div>

        <div>
            <label for="cedula"><strong>Cédula profesional:</strong></label>
            <p>Cedula: <a href="{{ asset('cedulas/'.$consultorio->cedula) }}">{{ $consultorio->cedula }}</a></p>

        </div><br>
        @if (Auth::user()->id == $user->id)
            <div class="col-12">
                <a href="/perfilm/edit/{{ Auth::user()->id }}" class="btn btn-secondary">Editar</a>
            </div>
        @endif
        
    </form>
</div>

</x-app-layout>
