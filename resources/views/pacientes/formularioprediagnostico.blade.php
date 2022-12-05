<x-app-layout>


<section class="d-flex justify-content-center">
    <div class="card col-sm-6 p-3" >
    <div class="else">
    <div class="myDiv">
        <b><h1>FORMULARIO DE PREDIAGNÓSTICO</h1></b>
        <b><p>Favor de responder este cuestionario digital para la interpretación del sistema</p></b>

    </div>

    <form method="POST" action="{{ route('createprediagnostico') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="paciente_id" value="{{ Auth::user()->id }}">

    <div class="mb-2">
        <label class="form-label">Nombre del paciente: *</label>
        <input required name="name" type="text" class="name form-control" value="{{ Auth::user()->name }}">

    <div class="mb-2">
        <label class="form-label">Apellido Paterno: *</label>
        <input required name="lastnamef" type="text" class="lastnamef form-control" value="{{ Auth::user()->lastnamef }}">
    </div>
    <div class="mb-2">
        <label class="form-label">Apellido Materno  </label>
        <input required name="lastnamem" type="text" class="lastnamem form-control" value="{{ Auth::user()->lastnamem }}">
    </div>
    </div>

    <div class="mb-2">
        <label class="form-label">Sexo: *</label>
        <input required type="radio" name="sexo" id="hombre" value="Masculino"> Masculino
        <input required type="radio" name="sexo" id="mujer" value="Femenino"> Femenino
    </div>

    <div class="mb-2">
        <label class="form-label">Numero de teléfono:</label>
        <input type="text" name="tel_fijo" class="form-control">
    </div>
    <div class="mb-2">
        <label class="form-label">Numero de celular:</label>
        <input type="text" name="celular" class="form-control">
    </div>

    <div>
        <label class="form-label">Edad: (años) *</label>
        <input required type="number" name="edad" class="form-control" ><!--disabled="true"-->
        <label class="form-label">Fecha de nacimiento: *</label>
        <input required type="date" name="fecha" class="form-control">
    </div>



    <div class="mb-2">
        <label class="form-label">Peso: (Kg) *</label>
        <input required type="number" name="peso" min="0" max="200" class="form-control">
    </div>
    <div class="mb-2">
        <label class="form-label">Estatura: (cm) *</label>
        <input required type="number" name="estatura" min="0" max="300" class="form-control">
    </div>


    <div class="mb-2">
        <input type="submit" class="col-12 btn btn-primary d-flex justify-content-center" value="Guardar">
    </div>
</div>
    </form>
    <div class="mb-2">
        <a href=" http://diagnostico-de-enfermedades-laravel.test">
            <button class="col-12 btn btn-outline-danger d-flex justify-content-center "> Cancelar </button>
            </a>
        
    </div>
</section>


</x-app-layout>
