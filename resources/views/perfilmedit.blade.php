<x-app-layout>

    <div class="center">
    <div>
        <img src="{{url('/images/perfil.png')}}" width="200px">
    </div><br><br>

    
    <form class="row g-3 needs-validation" method="POST" action="{{ route('editm') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="medico_id" value="{{ $user->id }}">
        <div class="col-md-4">
            <label class="form-label">Nombre(s)</label>
            <input name="name" type="text" class="form-control" value="{{ $user->name }}">
        </div>

        <div class="col-md-4">
            <label class="form-label">Apellido paterno</label>
            <input name="lastnamef" type="text" class="form-control" value="{{ $user->lastnamef }}">
        </div>

        <div class="col-md-4">
            <label class="form-label">Apellido materno</label>
            <input name="lastnamem" type="text" class="form-control" value="{{ $user->lastnamem}}">
        </div>

        <div class="col-md-4">
            <label >Correo Electrónico</label>
            <input name="email" type="text" class="form-control"  value="{{ $user->email }}">
        </div>

        <div class="col-md-3">
            <label class="form-label">Dirección del consultorio</label>
            <input name="calle" type="text" class="form-control" value="{{ $consultorio->calle}}">
        </div>

        <div class="col-md-3">
            <label class="form-label">Número exterior</label>
            <input name="numero_ext" type="number" class="form-control" value="{{ $consultorio->numero_ext}}">
        </div>

        <div class="col-md-3">
            <label class="form-label">Número interior</label>
            <input name="numero_int" type="number" class="form-control" value="{{ $consultorio->numero_int}}">
        </div>


        <div class="col-md-3">
            <label class="form-label">Código postal</label>
            <input name="cp" type="number" class="form-control" value="{{ $consultorio->cp}}">
        </div>

        <div class="col-md-3">
            <label class="form-label">Número telefónico del consultorio</label>
            <input name="tel_fijo" type="number" class="form-control" value="{{ $consultorio->tel_fijo}}">
        </div>

        <div>
            <label for="cedula"><strong>Cédula profesional:</strong></label>
            <input name="cedula" type="file" id="cedula" accept=".pdf"> 

        </div><br>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <a href="/perfilm/{{ $user->id }}" class="btn btn-secondary">Cancelar</a>
        </div>
        
        
    </form>
</div>

</x-app-layout>
