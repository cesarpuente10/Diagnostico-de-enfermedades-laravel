    <!--La información que se manejará aquí son los pacientes que estén relacionados con ese médico en específico
    ID de Paciente, Nombre, última asistencia realizada y "más información" es la liga al perfil del paciente-->

<x-app-layout>

<div class="contenedor-diagnostico" id="uno">
        <div class="contenido-listDiag">
            
        
            <table class="table table table-hover table-cont">
                <thead>
                    <tr>
                        <th scope="col">#id del paciente</th>
                        <th scope="col">Paciente</th>
                        <th scope="col">información</th>
                        <th scope="col">No. de Diagnósticos</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($asistencias as $asistencia)
                    @if((Auth::user()->id == $asistencia->medico_id || Auth::user()->role == 3) && $asistencia->estado == 'aceptado' )
                    
                    <tr data-bs-toggle="collapse" href="#collapseExample{{ $asistencia->paciente_id }}" role="button" aria-expanded="false" aria-controls="collapseExample">

                        <th scope="row">{{ $asistencia->paciente_id }}</th>
                        <td>{{ $asistencia->nombrepaciente }}</td>
                        
                        <td><div class="collapse" id="collapseExample{{ $asistencia->paciente_id }}">
                            <div class="card card-body drop">
                                <p>
                                <i class="fa-solid fa-user fa-4x"></i>
                                </p>
                                <div class="lineaCont"></div>
                                <div class="buttons-verPacientes">
                                    <p>
                                    @if($asistencia->estado == "aceptado")
                                        Asistencia Aceptada <br> Se solicitó el: <br>
                                        
                                    @elseif($asistencia->estado == "pendiente")
                                        Asistencia Pendiente <br> Se solicitó el: <br>
                                    @endif
                                    {{ date('d/M/Y', strtotime($asistencia->created_at))}}
                                    </p>
                                    <a href="/perfilp/{{ $asistencia->paciente_id }}">
                                        <p>Ver información de Paciente</p>
                                    </a>
                                    <button type="button" class="btn btn btn-outline-danger"  data-bs-toggle="modal" data-bs-target="#GenericalCancelationModal{{$asistencia->id}}">Cancelar Asistencia</button>
                                </div>
                                
                            <div class="lineaCont"></div>
                            <div class="buttons-verPacientes">
                                <a href="/formularioDiagnostico/{{ $asistencia->id }}">
                                    <button class="btn btn-outline-primary">Generar Diagnóstico</button> 
                                </a>
                                <a href="/verasistencia/{{ $asistencia->id }}">
                                    <button class="btn btn-outline-primary">Ver Diagnósticos</button>
                                </a>
                            </div>
                        </div></td> 
                        <td> #{{ $asistencia->ndiagnosticos }} </td> 
                    </tr>
                    @endif
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
 
<!-- Modal -->
@foreach ($asistencias as $asistencia)
    @if(Auth::user()->id == $asistencia->medico_id && $asistencia->estado == 'aceptado'  )
        <div class="modal fade" id="GenericalCancelationModal{{$asistencia->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$asistencia->id}}" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel{{$asistencia->id}}">Cancelar Asistencia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Seguro que deseas cancelar la asistencia del paciente {{ $asistencia->nombrepaciente }}?</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
                <form method="post" action="{{ route('updateasistencia') }}">
                    @csrf
                    <input type="hidden" name="id" value ="{{ $asistencia->id }}">
                    <button class="btn btn btn-outline-danger" type = "submit" name ="estado" value ="cancelada">Continuar</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    @endif
@endforeach

    
  
  

  
</x-app-layout>

