<x-app-layout>
    

    <div class="center">
        <div>
        <img src="{{url('/images/perfil.png')}}" width="200px">
        </div><br><br>
    
        
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label class="form-label">Nombre(s)</label>
                <input name="name" type="text" class="form-control"  value="{{ $user->name }}" required>
            </div>
    
            <div class="col-md-4">
                <label class="form-label">Apellido paterno</label>
                <input name="lastnamef" type="text" class="form-control"  value="{{ $user->lastnamef }}" required>
            </div>
    
            <div class="col-md-4">
                <label class="form-label">Apellido materno</label>
                <input name="lastnamem" type="text" class="form-control"  value="{{ $user->lastnamem }}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Fecha de nacimiento</label>
                <input name="fecha" type="date" class="form-control"  value="{{ date('d-m-Y', strtotime($prediagnostico->fecha)) }}" required>
            </div>

            <div class="col-md-4">
                <label >Correo Electrónico</label>
                <input name="email" type="text" class="form-control"  value="{{ $user->email }}" required>
            </div>

    
            <div class="col-md-4">
                <label class="form-label">Edad</label>
                <input name="edad" type="int" class="form-control"  value="{{ $prediagnostico->edad}}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Sexo</label>
                <input name="edad" type="int" class="form-control"  value="{{ $prediagnostico->sexo}}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Peso</label>
                <input name="edad" type="int" class="form-control"  value="{{ $prediagnostico->peso}}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Estatura</label>
                <input name="edad" type="int" class="form-control"  value="{{ $prediagnostico->estatura}}" required>
            </div>
    
        
            <div class="col-md-3">
                <label class="form-label">Número telefónico de casa</label>
                <input name="tel_fijo" type="number" class="form-control" value="{{$prediagnostico->tel_fijo}}" required>
            </div>
    
            <div class="col-md-3">
                <label class="form-label">Número telefónico del celular</label>
                <input name="celular" type="number" class="form-control" value="{{$prediagnostico->celular}}" required>
            </div><br>
    
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button type="button" class="btn btn-secondary">Cancelar</button>
            </div>
            
            
        </form>
    </div>
    
    
    </x-app-layout>