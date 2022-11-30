<x-app-layout>
        {{-- Es Médico --}}
        <section class="d-flex align-items-center p-3 mb-2 mt-2">
            <i class="fa-solid fa-user-doctor fa-2xl"></i>
            <div class="col fs-2 ms-2">Bienvenido {{ Auth::user()->name }}</div>
        </section>
        
        
        <h1>Asistencias Pendientes</h1>
            <section class="iniciom-listaAsis principal-list overflow-auto col-lg-4">
                @php
                    $cont = 0;
                @endphp
                @foreach ($asistencias as $asistencia)
                @if ($asistencia->estado == 'pendiente')
                    <div class=" border rounded justify-content-between p-3 mb-2 mt-2 iniciom-asistencia">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-bed-pulse fa-2xl me-2"></i>
                            <div class="text-uppercase me-3">{{ $asistencia->nombrepaciente }}</div>
                        </div>
                        <form method="post" action="{{ route('updateasistencia') }}">
                            @csrf
                            <input type="hidden" name="id" value ="{{ $asistencia->id }}">
                            <button class="btn btn-primary" type = "submit" name ="estado" value ="aceptado">Aceptar</button>
                            <button type="button" class="btn btn btn-outline-danger"  data-bs-toggle="modal" data-bs-target="#GenericalCancelationModal{{$asistencia->id}}">Rechazar</button>
                        </form>
                    </div>
                    @php
                        $cont ++;
                    @endphp
                @endif
                @endforeach
                @if ($cont<=0)
                    <h2>No hay asistencias pendientes por el momento</h2>
                @endif
                
            </section>
        </div>

<!-- Modal -->
@foreach ($asistencias as $asistencia)
    @if ($asistencia->estado == 'pendiente')
    <div class="modal fade" id="GenericalCancelationModal{{$asistencia->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$asistencia->id}}" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel{{$asistencia->id}}">Rechazar Asistencia</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Rechazar la asistencia del paciente {{ $asistencia->nombrepaciente }}?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
            <form method="post" action="{{ route('updateasistencia') }}">
                @csrf
                <input type="hidden" name="id" value ="{{ $asistencia->id }}">
                <button class="btn btn-outline-danger" type = "submit" name ="estado" value ="rechazado">Rechazar</button>
            </form>
            </div>
        </div>
        </div>
    </div>
@endif
@endforeach
        
    </x-app-layout>