
    <!--Este usuario es paciente, por lo tanto, la opoción junto al botón de menú debe ser "asistencias"-->

    <!--Esta pantalla es parte del flujo del paciente cuando presiona el botón "asistencias"
    De su navbar, muestra una lista de diagnósticos-->
    <!--La información que se debe guardar o mostrar es la de los diagnósticos, cuando se realizó el último, 
    qué resultado tuvo y  el reporte con el botón de "abrir"-->

    
    <x-app-layout>

<div class="contenedor" id="uno">
        <div class="contenido">
            <h1>Registro de asistencias</h1>
        
            <table class="table table table-hover scroll">
                <thead>
                    <tr>
                        <th scope="col">#id del medico</th>
                        <th scope="col">Médico</th>
                    </tr>
                </thead>
                <tbody>

                    
                    @foreach ($asistencias as $asistencia)
                    @if(Auth::user()->id == $asistencia->paciente_id)
                    
                    <tr data-bs-toggle="collapse" href="#collapseExample{{ $asistencia->medico_id }}" role="button" aria-expanded="false" aria-controls="collapseExample">

                        <th scope="row">{{ $asistencia->medico_id }}</th>
                        <td>{{ $asistencia->nombremedico }}</td>
                        
                        <td><div class="collapse" id="collapseExample{{ $asistencia->medico_id }}">
                            <div class="card card-body drop">
                                <p>
                                <i class="fa-solid fa-user fa-4x"></i>
                                </p>
                                <div class="lineaCont"></div>
                                <div>

                                    
                                    @if($asistencia->estado == "aceptado")
                                        <p> Asistencia Aceptada <br> Se aceptó el: <br> {{ $asistencia->updated_at}}</p>
                                        <a href="/perfilm/{{ $asistencia->medico_id }}">
                                          <p>Ver información de medico</p>
                                        </a>
                                        
                                    @elseif($asistencia->estado == "pendiente")
                                        <p> La asistencia no ha sido aceptada por el Dr. {{ $asistencia->nombremedico }}  <br> Se solicitó el: <br> {{ $asistencia->created_at}}</p>
                                        
                                    @elseif($asistencia->estado == "cancelada" || $asistencia->estado == "rechazado")
                                        La asistencia fue cancelada o rechazada por el médico <br> Elimínala para poder solicitar otra al mismo médico
                                        
                                    @endif
                                </div>
                                @php
                                        $mensajeP = "";
                                        $mensajebtn = "";
                                    @endphp 
                                <div class="lineaCont"></div>
                                @if($asistencia->estado == "aceptado")
                                @php
                                    $mensajeP = "cancelar y eliminar la asistencia";
                                    $mensajebtn = "Cancelar y eliminar Asistencia";
                                @endphp
                                    <button type="button" class="btn btn btn-outline-danger"  data-bs-toggle="modal" data-bs-target="#GenericalCancelationModal{{$asistencia->id}}">Cancelar y eliminar Asistencia</button>
                                @elseif($asistencia->estado == "pendiente")
                                @php
                                    $mensajeP = "cancelar la petición de la asistencia";
                                    $mensajebtn = "Cancelar petición";
                                @endphp
                                    <button type="button" class="btn btn btn-outline-danger"  data-bs-toggle="modal" data-bs-target="#GenericalCancelationModal{{$asistencia->id}}">Cancelar petición</button>
                                @elseif($asistencia->estado == "cancelada" || $asistencia->estado == "rechazado")
                                @php
                                    $mensajeP = "eliminar la asistencia";
                                    $mensajebtn = "Eliminar Asistencia";
                                @endphp
                                    <button type="button" class="btn btn btn-outline-danger"  data-bs-toggle="modal" data-bs-target="#GenericalCancelationModal{{$asistencia->id}}">Eliminar Asistencia</button>
                                @endif
                                
                                
                            </div>
                        </div></td>  
                    </tr>
                    @endif
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
 

    <!-- Modal -->
@foreach ($asistencias as $asistencia)
    @if(Auth::user()->id == $asistencia->paciente_id)
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
@endif
@endforeach

    
  
  

  
</x-app-layout>

