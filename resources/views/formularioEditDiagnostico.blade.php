<x-app-layout>


<section class="d-flex justify-content-center">
    <div class="card col-sm-6 p-3" >
    <div class="else">
    <div class="myDiv">
        <b><h1>Diagnóstico de asistencia #{{ $asistencia->id }}  </h1></b>
        <b><p>Paciente: {{ $paciente->name }} </p></b>

    </div>

    @php
        //dd($diagnostico);
    @endphp
    <form method="POST" action="{{ route('updatediagnostico') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="diagnostico_id" value="{{ $diagnostico->id }}">
    <div class="mb-2">
        <label class="form-label">Fecha del diagnóstico </label>
        <input type="date" name="fecha" class="form-control" value="{{ $diagnostico->fecha }}">
    </div>

    <div class="mb-2">
        <label class="form-label"> Diagnóstico: </label><br>
        <textarea name="diagnostico" class="name form-control">
            {{ $diagnostico->diagnostico }}
        </textarea>
    </div>

    <div class="mb-2">
        <label class="form-label">Subir Reporte(.pdf)</label>
        <input type="file" class="form-control" name="reporte" accept=".pdf" value="{{ $diagnostico->reporte }}">
    </div>
    <div class="mb-2">
        <label class="form-label">Archivo de señales EMG(.txt .bin)</label>
        <input type="file" class="form-control" name="senalesemg" accept=".txt" value="{{ $diagnostico->senalesemg }}">
    </div>

    <div class="mb-2">
        <label class="form-label"> Comentario: </label><br>
        <textarea name="comentario" class="name form-control" cols="10" rows="10">
            {{ $diagnostico->comentario }}
        </textarea>
    </div>

    <input type="hidden" name="asistencia_id" value ="{{ $asistencia->id }}">
    <div class="mb-2">
        <input type="submit" class="col-12 btn btn-primary d-flex justify-content-center">
    </div>

    </form>
    <div class="mb-2">
        <a href=" http://diagnostico-de-enfermedades-laravel.test/verpacientes">
            <button class="col-12 btn btn-outline-danger d-flex justify-content-center "> Cancelar </button>
            </a>
        
    </div>

</section>


</x-app-layout>
