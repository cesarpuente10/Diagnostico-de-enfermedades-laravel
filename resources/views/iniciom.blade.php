<x-app-layout>
        {{-- Es Médico --}}
        <section class="d-flex align-items-center p-3 mb-2 mt-2">
            <i class="fa-solid fa-user-doctor fa-2xl"></i>
            <div class="col fs-2 ms-2">Bienvenido {{ Auth::user()->name }}</div>
        </section>
        
        
        <h1>Asistencias Pendientes</h1>
            <section class="iniciom-listaAsis principal-list overflow-auto col-lg-4">
                
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
                            <button type = "submit" name ="estado" value ="aceptado">Aceptar</button>
                            <button type = "submit" name ="estado" value ="rechazado">Rechazar</button>
                        </form>
                        
                    </div>
                @endif
                @endforeach
                
            </section>
        </div>
        
    </x-app-layout>