
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

                    
                    @php($cont = 0)
                    @foreach ($asistencias as $asistencia)
                    @foreach ($medicos as $medico)
                    @if($medico->id == $asistencia->medico_id && Auth::user()->id == $asistencia->paciente_id  )
                    
                    <tr data-bs-toggle="collapse" href="#collapseExample{{ $medico->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">

                        <th scope="row">{{ $medico->id }}</th>
                        <td>{{ $medico->name }} {{ $medico->lastnamef }} {{ $medico->lastnamem }}</td>
                        
                        <td><div class="collapse" id="collapseExample{{ $medico->id }}">
                            <div class="card card-body drop">
                                <p>
                                <i class="fa-solid fa-user fa-4x"></i>
                                </p>
                                <div class="lineaCont"></div>
                                <div>

                                    
                                    @if($asistencia->estado == "aceptado")
                                        <p> Asistencia Aceptada <br> Se aceptó el: <br> {{ $asistencia->updated_at}}</p>
                                        <a href="/perfilm/{{ $medico->id }}">
                                          <p>Ver información de medico</p>
                                        </a>
                                        
                                    @elseif($asistencia->estado == "pendiente")
                                        <p> La asistencia no ha sido aceptada por el Dr. {{ $medico->name }}  <br> Se solicitó el: <br> {{ $asistencia->created_at}}</p>
                                        
                                    @elseif($asistencia->estado == "cancelada")
                                        La asistencia fue cancelada por el médico <br> Elimínala para poder solicitar otra <br> al mismo médico
                                        
                                    @endif
                                </div>
                                <div class="lineaCont"></div>
                                @if($asistencia->estado == "aceptado")
                                <form method="post" action="{{ route('deleteasistencia') }}">
                                    @csrf
                                        <input type="hidden" name="id" value ="{{ $asistencia->id }}">
                                        <button type = "submit">Cancelar y eliminar Asistencia</button>
                                    </form>
                                @elseif($asistencia->estado == "pendiente")
                                    <form method="post" action="{{ route('deleteasistencia') }}">
                                    @csrf
                                        <input type="hidden" name="id" value ="{{ $asistencia->id }}">
                                        <button type = "submit">Cancelar petición</button>
                                    </form>
                                @elseif($asistencia->estado == "cancelada")
                                    <form method="post" action="{{ route('deleteasistencia') }}">
                                    @csrf
                                        <input type="hidden" name="id" value ="{{ $asistencia->id }}">
                                        <button type = "submit">Eliminar Asistencia</button>
                                    </form>
                                @endif
                                
                                
                            </div>
                        </div></td>  
                    </tr>
                    @endif
                    @endforeach
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
 

    
  
  

  
</x-app-layout>

