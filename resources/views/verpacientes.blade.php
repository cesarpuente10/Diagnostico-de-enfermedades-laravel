
    <!--Este usuario es medico, por lo tanto, la opoción junto al botón de menú debe ser "Pacientes"-->

    <!--Esta pantalla es parte del flujo del Medico, en específico cuando presiona el botón de "Pacientes" del
    navbar-->
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

                    
                    @php($cont = 0)
                    @foreach ($asistencias as $asistencia)
                    @foreach ($pacientes as $paciente)
                    @if(($paciente->id == $asistencia->paciente_id && Auth::user()->id == $asistencia->medico_id) && $asistencia->estado == 'aceptado'  )
                    
                    <tr data-bs-toggle="collapse" href="#collapseExample{{ $paciente->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">

                        <th scope="row">{{ $paciente->id }}</th>
                        <td>{{ $paciente->name }} {{ $paciente->lastnamef }} {{ $paciente->lastnamem }}</td>
                        
                        <td><div class="collapse" id="collapseExample{{ $paciente->id }}">
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
                                    {{ $asistencia->updated_at}}
                                    </p>
                                    <a href="/perfilp/{{ $paciente->id }}">
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
                                <a href="/formularioDiagnostico/{{ $asistencia->id }}"><button>Generar Diagnóstico</button> </a>
                                <a href="/verdiagnosticos">
                                    <button>Ver Diagnósticos</button>
                                </a>
                            </div>
                            
                             
                        </div></td> 
                        <td> # </td> 
                    </tr>
                    @endif
                    @endforeach
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
 

    
  
  

  
</x-app-layout>

