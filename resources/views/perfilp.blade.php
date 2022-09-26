<x-app-layout>
    

<div class="center">
    <div>
    <img src="{{url('/images/perfil.png')}}" width="200px">
    </div><br><br>

    
    <div class="row g-3 needs-validation">
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
            <p>{{ $user->lastnamem }}</p>
        </div>

        <div class="col-md-4">
            <label class="form-label">Fecha de nacimiento</label>
            <p>{{ date('d-m-Y', strtotime($prediagnostico->fecha)) }}</p>
        </div>
        
        <div class="col-md-4">
            <label >Correo Electrónico</label>
            <p>{{ $user->email }}</p>
        </div>

        <div class="col-md-4">
            <label class="form-label">Edad</label>
            <p>{{ $prediagnostico->edad}}</p>
        </div>

        <div class="col-md-4">
            <label class="form-label">Sexo</label>
            <p>{{ $prediagnostico->sexo}}</p>
        </div>

        <div class="col-md-4">
            <label class="form-label">Peso</label>
            <p>{{ $prediagnostico->peso}}</p>
        </div>

        <div class="col-md-4">
            <label class="form-label">Estatura</label>
            <p>{{ $prediagnostico->estatura}}</p>
        </div>
        

        <div class="col-md-3">
            <label class="form-label">Número telefónico de casa</label>
            <p>{{$prediagnostico->tel_fijo}}</p>
        </div>

        <div class="col-md-3">
            <label class="form-label">Número telefónico del celular</label>
            <p>{{$prediagnostico->celular}}</p>
        </div><br>
        @if (Auth::user()->id == $user->id)
            <div class="col-12">
                <a href="/perfilp/edit/{{ Auth::user()->id }}" class="btn btn-secondary">Editar</a>
            </div>
        @endif
        
        
        
    </div>
</div>


</x-app-layout>