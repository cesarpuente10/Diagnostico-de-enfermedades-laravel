<x-app-layout>

<br>
    <br>
    <b><h1>FORMULARIO DE </h1></b>
    <b><h1>PREDIAGNÓSTICO</h1></b>
  
    <div class="else">
    <div class="myDiv">
      <h2>¿Qué es un formulario de prediagnóstico?</h2>
      <p>Es un sistema experto, capaz de interpretar los síntomas que explica el usuario utilizando el lenguaje natural.</p>
      <b><p>Favor de responder este cuestionario digital para la interpretación del sistema</p></b>

    </div>

    <form method="POST" action="{{ route('createprediagnostico') }}">
    @csrf
    <input type="hidden" name="paciente_id" value="{{ Auth::user()->id }}">
    <div>
        <label class="form-label">Nombre del paciente: </label>
        <input name="name" type="text" class="name" value="{{ Auth::user()->name }}">

        
        <label class="form-label">Apellido Paterno: </label>
        <input name="lastnamef" type="text" class="lastnamef" value="{{ Auth::user()->lastnamef }}">

        
        <label class="form-label">Apellido Materno </label>
        <input name="lastnamem" type="text" class="lastnamem" value="{{ Auth::user()->lastnamem }}">
    </div>

    <div>
        <label class="form-label">Sexo: </label>

        <input type="radio" name="sexo" id="hombre" value="Masculino">
        <label class="form-label" for="hombre">Masculino </label>
        
        <input type="radio" name="sexo" id="mujer" value="Femenino">
        <label class="form-label" for="mujer">Femenino </label>
        
    </div>

    <div>
        <label class="form-label">Numero de teléfono: </label>
        <input type="number" name="tel_fijo">

        <label class="form-label">Numero de celular: </label>
        <input type="number " name="celular">
    </div>

    <div>
        <label class="form-label">Edad: </label>
        <input type="number" name="edad" >
        <label class="form-label">Fecha de nacimiento: </label>
        <input type="date" name="fecha">
    </div>

   

    <div>
        <label class="form-label">Peso: </label>
        <input type="number" name="peso" min="0" max="200">
        <label class="form-label">Estatura: </label>
        <input type="number" name="estatura" min="0" max="300">
    </div>

    <div>
        <h2>Archivo Diagnóstico</h2>
    </div>

    <div>
        <label class="form-label">Subir archivo previo de señales bio-eléctricas (.txt)</label>
        <input type="file" class="form-control">
    </div>

    <div>
        <input type="submit" class="btn-primary">
    </div>
    

    </form>




</x-app-layout>