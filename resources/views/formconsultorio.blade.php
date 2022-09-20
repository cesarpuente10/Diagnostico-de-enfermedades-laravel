<x-app-layout>

<br>
    <br>
    <b><h1>INFORMACIÓN DEL CONSULTORIO</h1></b>
    
    <form method="POST">
    @csrf
    <input type="hidden" name="medico_id" value="{{ Auth::user()->id }}">

    <div>
        <label class="form-label">Calle: </label>
        <input type="text" name="calle">

        <label class="form-label">Código Postal: </label>    
        <input type="number" name="cp">
        
        <label class="form-label">No. Exterior: </label>
        <input type="number" name="numero_ext">

        <label class="form-label">No. Interior: </label>
        <input type="number" name="numero_int">
        
    </div>


    <div>
        <label class="form-label">Subir Cédula Profesional(.pdf)</label>
        <input type="file" class="form-control">
    </div>

    <div>
        <input type="submit" class="btn-primary">
    </div>
    

    </form>




</x-app-layout>