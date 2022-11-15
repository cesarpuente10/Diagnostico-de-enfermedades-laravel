<x-app-layout>

    <div class="col-sm-12 d-flex justify-content-center">
        <h1 class="text-center">Diagnósticos</h1>
    </div>
    @foreach ($asistencias as $asistencia)
    
    <div class="container">
      <div class="row">
        <div class="col">
          <table class="table table-striped">
            <thead>
              <h3>Dr. {{ $asistencia->nombremedico }}</h3>
              @if (count($asistencia->diagnosticos) <= 0)
                <div>
                  El médico no a subido reportes.
                </div>
                </thead>
              @else
                <tr>
                  <th scope="col">Fecha de reporte</th>
                  <th scope="col">Diagnóstico</th>
                  <th scope="col">Link del reporte</th>
                  <th scope="col">Link a señales EMG</th>
                  <th scope="col">Comentario</th>
                  <th scope="col">Edición</th>
                </tr>
                </thead>


                @foreach ($asistencia->diagnosticos as $diagnostico)
                <tbody>

                  <tr>
                    <td>{{ date('d/M/Y', strtotime($diagnostico->fecha)) }}</td>
                    <td>{{ $diagnostico->diagnostico }}</td>
                    <td><a href="{{ asset('reportes/'.$diagnostico->reporte) }}">Archivo del reporte</a></td>
                    <td><a href="{{ asset('senalesemg/'.$diagnostico->senalesemg) }}">Archivo de señales</a></td>
                    <td>{{ $diagnostico->comentario }}</td>
                    <td>
                      <div class="btn-group" role="group">
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

              @endif
              
          </table>
        </div>
      </div>
    </div>


    @endforeach


    </x-app-layout>
