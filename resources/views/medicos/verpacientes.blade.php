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
                    @if(Auth::user()->id == $asistencia->medico_id && $asistencia->estado == 'aceptado'  )
                    
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
                                    <form method="post" action="{{ route('updateasistencia') }}">
                                        @csrf
                                        <input type="hidden" name="id" value ="{{ $asistencia->id }}">
                                        <button class="btn-alert" type = "submit" name ="estado" value ="cancelada">Cancelar Asistencia</button>
                                    </form>
                                </div>
                                
                            <div class="lineaCont"></div>
                            <div class="buttons-verPacientes">
                                <a href="/formularioDiagnostico/{{ $asistencia->id }}">
                                    <button>Generar Diagnóstico</button> 
                                </a>
                                <a href="/verasistencia/{{ $asistencia->id }}">
                                    <button>Ver Diagnósticos</button>
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
 

    
  
  

  
</x-app-layout>

