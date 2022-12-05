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
              @if ($diagnostico->reporte)
                <td><a href="{{ asset('reportes/'.$diagnostico->reporte) }}">Archivo del reporte</a></td>
              @else
                <td>No hay reporte</td>
              @endif
              @if ($diagnostico->reporte)
              <td><a href="{{ asset('senalesemg/'.$diagnostico->senalesemg) }}">Archivo de señales</a></td>
              @else
                <td>No hay archivo de señales</td>
              @endif
              <td>{{ $diagnostico->comentario }}</td>
              <td>
                <div class="btn-group" role="group">
                <form action="{{ route('editdiagnostico') }}" method="POST">
                  @csrf
                  <input type="hidden" name="asistencia_id" value="{{ $asistencia->id }}">
                  <input type="hidden" name="diagnostico_id" value="{{ $diagnostico->id }}">
                  <button type="submit" class="btn btn-outline-primary">Editar</button>
                </form>
                <button type="button" class="btn btn btn-outline-danger"  data-bs-toggle="modal" data-bs-target="#GenericalCancelationModal{{$diagnostico->id}}">Eliminar</button>
                </div>
              </td>
            </tr>
          </tbody>
        @endforeach
  
      </table>
    </div>
  </div>
</div>

    <!-- Modal -->
    @foreach ($diagnosticos as $diagnostico)
    <div class="modal fade" id="GenericalCancelationModal{{$diagnostico->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$diagnostico->id}}" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel{{$diagnostico->id}}">Cancelar Asistencia</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Seguro que deseas eliminar el diagnóstico con fecha {{ $diagnostico->fecha }} y diagnostico {{ $diagnostico->diagnostico }}?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
            <form action="{{ route('deletediagnostico') }}" method="POST">
              @csrf
              <input type="hidden" name="asistencia_id" value="{{ $asistencia->id }}">
              <input type="hidden" name="diagnostico_id" value="{{ $diagnostico->id }}">
              
              <button type="submit" class="btn btn-outline-danger">Continuar</button>
            </form>
            </div>
        </div>
        </div>
    </div>
@endforeach

</x-app-layout>
