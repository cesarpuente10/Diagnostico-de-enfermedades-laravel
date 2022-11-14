<x-app-layout>
<div class="container">
  <div class="row">
    <div class="col">
    <table class="table table-striped">
      <thead>
        <h3>Diagnostico de {{ $asistencia->nombrepaciente }}</h3>
        <tr>
          <th scope="col">Fecha de reporte</th>
          <th scope="col">Diagnóstico</th>
          <th scope="col">Link del reporte</th>
          <th scope="col">Link a señales EMG</th>
          <th scope="col">Comentario</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
        @foreach ($diagnosticos as $diagnostico)
          <tbody>

            <tr>
              <td>{{ $diagnostico->fecha }}</td> 
              <td>{{ $diagnostico->diagnostico }}</td>
              <td><a href="{{ asset('reportes/'.$diagnostico->reporte) }}">Archivo del reporte</a></td>
              <td><a href="{{ asset('senalesemg/'.$diagnostico->senalesemg) }}">Archivo de señales</a></td>
              <td>{{ $diagnostico->comentario }}</td>
              <td>
                <div class="btn-group" role="group">
                <form action="{{ route('editdiagnostico') }}" method="POST">
                  @csrf
                  <input type="hidden" name="asistencia_id" value="{{ $asistencia->id }}">
                  <input type="hidden" name="diagnostico_id" value="{{ $diagnostico->id }}">
                  <button type="submit" class="btn btn-primary">Editar</button>
                </form>
                <form action="{{ route('deletediagnostico') }}" method="POST">
                  @csrf
                  <input type="hidden" name="asistencia_id" value="{{ $asistencia->id }}">
                  <input type="hidden" name="diagnostico_id" value="{{ $diagnostico->id }}">
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                </div>
              </td>
            </tr>
          </tbody>
        @endforeach
  
      </table>
    </div>
  </div>
</div>
</x-app-layout>
