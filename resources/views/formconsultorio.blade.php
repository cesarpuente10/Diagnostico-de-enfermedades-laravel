<x-app-layout>
<section class="d-flex justify-content-center">
<div class="card col-sm-6 p-3">

    <b><h1>INFORMACIÓN DEL CONSULTORIO</h1></b>
    
    <form method="POST" action="{{ route('createinfoconsultorio') }}">
    @csrf
    <input type="hidden" name="medico_id" value="{{ Auth::user()->id }}">

    <div class="mb-2">
        <label class="form-label">Calle: </label>
        <input type="text" name="calle" class="form-control">
    </div>

    

    <div class="mb-2">
        <label class="form-label">No. Exterior: </label>
        <input type="number" name="numero_ext" class="form-control">
    </div>

    <div class="mb-2">
        <label class="form-label">No. Interior (opcional): </label>
        <input type="number" name="numero_int" class="form-control">
    </div>

    <div class="mb-2" >
            <label class="form-label">Código Postal: </label>    
            <input type="number" name="cp" class="form-control">
    </div>
    <div class="mb-2">
        <label class="form-label">Número de teléfono: </label>
        <input type="number" name="tel_fijo" class="form-control">
        
    </div>


    <div class="mb-2">
        <label class="form-label">Subir Cédula Profesional(.pdf)</label>
        <input type="file" class="form-control" name="cedula">
    </div>

    <div class="mb-2">
        <input type="submit" class="col-12 btn btn-primary d-flex justify-content-center">
    </div>
    
    <div class="mb-2">
        <a href=" http://diagnostico-de-enfermedades-laravel.test">
            <button class="col-12 btn btn-outline-danger d-flex justify-content-center "> Cancelar </button>
            </a>
        
    </div>
    

    </form>

</div>
</section>

</x-app-layout>