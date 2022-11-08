<x-app-layout>
    
    <section class="d-flex align-items-center p-3 mb-2 mt-2">
        <i class="fa-solid fa-bed-pulse fa-2xl"></i>
        <div class="col fs-2 ms-2">Bienvenido {{ Auth::user()->name }}</div>
    </section>

    <div class="container-fluid row inicio">
        <section class="col-lg-7 row leftdiag-container">
            <div class="vstack gap-2 col-sm-3 principal-card">
                <img class="image" src="{{url('/images/Medical prescription-pana.png')}}" alt="Image"/> <br>
                <a href=" {{ route('prediagnostico') }}">
                <button type="button" class="btn btn-secondary principal-btn">Prediagnóstico</button>
                </a>
            </div>

            
            <div class="vstack gap-2 col-sm-3 principal-card">
                <img class="image" src="{{url('/images/Medical prescription-bro.png')}}" alt="Image"/> <br>
                <a href="#" type="button" class="btn btn-secondary principal-btn">Solicitar Diagnóstico</a>
            </div>
        </section>

        <div class="col-lg-1">
            <div class="vr"></div>
        </div>
        
        
            <!-- Modal para ver información del médico -->

        <section class="principal-list overflow-auto col-lg-4">

            @php
                $medicosdisponibles = 0;
            @endphp
            @foreach ($medicos as $medico)
                @php
                    $asistido = 0;
                @endphp
                @foreach ($asistencias as $asistencia)
                    @if ($asistencia->medico_id == $medico->id)
                        @php
                            if ($asistencia->medico_id == $medico->id) {
                                $asistido = 1;
                            }
                        @endphp
                    @endif
                @endforeach
                @if ($asistido == 0)
                @php
                    $medicosdisponibles += 1;
                @endphp
                    <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                        <div class="d-flex align-items-center">
                        <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                            <div class="text-uppercase me-3">{{ $medico->name }} {{ $medico->lastnamef }}</div>
                        </div>

                        <button type="button" class="btn btn-secondary principal-btn"  data-bs-toggle="modal" data-bs-target="#modalInfoMedico{{$medico->id}}">Mostrar Información del Médico</button>

                    </div>

                @endif
            @endforeach
            @if ($medicosdisponibles == 0)
                <div>No hay medicos diponibles en este momento</div>
            @endif

            @if ($medicosdisponibles > 10)
                <button>Ver más médicos</button>
            @endif
            
            
        </section>
    </div>


    
    <!-- Modal -->

    @foreach ($medicos as $medico)
        @if ($medico->role == 2)
            <div class="modal fade" id="modalInfoMedico{{$medico->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h3>INFORMACIÓN DEL MÉDICO</h3>
                            <p>{{ $medico->name }}  {{  $medico->lastnamef }} {{  $medico->lastnamem }}</p>

                            <p>Direccion de consultorio</p>
                            <p>Numero de telefono</p>
                            
                            <p>{{  $medico->email }}</p>        
                                <form method="post" action="{{ route('asistencia') }}">
                                    @csrf
                                    <input type="hidden" name="paciente_id" value ="{{ Auth::user()->id }}">
                                    <input type="hidden" name="medico_id" value ="{{ $medico->id }}">
                                    @if($hasPrediagnostico)
                                        <button type="submit" class="btn btn-secondary principal-btn">Agendar cita</button>
                                    @else
                                        <button type="button" disabled="true" class="btn btn-secondary principal-btn">Agendar cita</button>
                                        <p>Para agendar una cita debe llenar el formulario de prediagnóstico</p>
                                        <p class="">Favor de llenarlo <a href=" {{ route('prediagnostico') }}">
                                            Aquí
                                        </a> </p>
                                    @endif
                                </form>
                        </div>
                    </div>
                </div>
            </div>

    
     @endif
    @endforeach
   
    
    
</x-app-layout>