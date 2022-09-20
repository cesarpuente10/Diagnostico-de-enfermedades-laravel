<x-app-layout>
        {{-- Es Médico --}}
        <section class="d-flex align-items-center p-3 mb-2 mt-2">
            <i class="fa-solid fa-user-doctor fa-2xl"></i>
            <div class="col fs-2 ms-2">Bienvenido {{ Auth::user()->name }}</div>
        </section>
        
        
            
            <section class="principal-list overflow-auto col-lg-4">
                @foreach ($asistencias as $asistencia)
                @if ($asistencia->estado == 'pendiente')
                    <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-bed-pulse fa-2xl me-2"></i>
                            <div class="text-uppercase me-3">{{ $asistencia->nombrepaciente }}</div>
                        </div>
                        <a href="" class="btn btn-secondary principal-btn">Asistir</a>
                        <button>Aceptar</button>
                        <button>Rechazar</button>
                    </div>
                @endif
                @endforeach
                
            </section>
        </div>
        
    </x-app-layout>