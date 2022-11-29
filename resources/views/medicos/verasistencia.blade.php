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
                  <button type="submit" class="btn btn-outline-primary">Editar</button>
                </form>
                <form action="{{ route('deletediagnostico') }}" method="POST">
                  @csrf
                  <input type="hidden" name="asistencia_id" value="{{ $asistencia->id }}">
                  <input type="hidden" name="diagnostico_id" value="{{ $diagnostico->id }}">
                  <button type="submit" class="btn btn-outline-danger">Eliminar</button>
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

    <!-- Modal -->
    @foreach ($diagnosticos as $diagnostico)
    <div class="modal fade" id="GenericalCancelationModal{{$asistencia->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$asistencia->id}}" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel{{$asistencia->id}}">Cancelar Asistencia</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Seguro que deseas {{ $mensajeP }} con el médico {{ $asistencia->nombremedico }}?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <form method="post" action="{{ route('deleteasistencia') }}">
                @csrf
                    <input type="hidden" name="id" value ="{{ $asistencia->id }}">
                    <button class="btn btn-outline-danger" type = "submit">{{ $mensajebtn }}</button>
            </form>
            </div>
        </div>
        </div>
    </div>
@endforeach

</x-app-layout>
