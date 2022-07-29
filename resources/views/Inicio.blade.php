<x-app-layout>
    @if (Auth::user()->role == 2)
    {{-- Es Médico --}}
    <section class="d-flex align-items-center p-3 mb-2 mt-2">
        <i class="fa-solid fa-user-doctor fa-2xl"></i>
        <div class="col fs-2 ms-2">Bienvenido {{ Auth::user()->name }}</div>
    </section>
    
    <div class="container-fluid row inicio">
        <section class="col-lg-7 row leftdiag-container">
            <div class="vstack gap-2 col-sm-3 principal-card">
                <img class="image" src="{{url('/images/Medical prescription-pana.png')}}" alt="Image"/> <br>
                <a href="{{ route('RegistraDiagnosticoMedico') }}" class="btn btn-secondary principal-btn">Registrar Diagnóstico</a>
            </div>
            
            <div class="vstack gap-2 col-sm-3 principal-card">
                <img class="image" src="{{url('/images/Medical prescription-bro.png')}}" alt="Image"/> <br>
                <button type="button" class="btn btn-secondary principal-btn">Registrar Paciente</button>
            </div>
        </section>

        <div class="col-lg-1">
            <div class="vr"></div>
        </div>
        
        @php($cont = 0)
        <section class="principal-list overflow-auto col-lg-4">
            @foreach ($users as $user)
                @foreach ($asistencias as $asistencia)
                    @php($cont++)
                    @if ($asistencia->medico_id == Auth::id() && $user->role == 1)
                        <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-bed-pulse fa-2xl me-2"></i>
                                <div class="text-uppercase me-3">{{ $user->name }}</div>
                            </div>
                            <a href="" class="btn btn-secondary principal-btn">Asistir</a>
                        </div>
                    @endif
                @endforeach
            @endforeach
            
            
            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bed-pulse fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre paciente </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>


            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bed-pulse fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre paciente </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>


            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bed-pulse fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre paciente </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>


            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bed-pulse fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre paciente </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>


            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bed-pulse fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre paciente </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>


            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bed-pulse fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre paciente </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>


            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bed-pulse fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre paciente </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>


            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-bed-pulse fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre paciente </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>
            @if ($cont > 0)
                <a class="btn btn-secondary principal-btn" href="{{ route('asistePacientesMedico') }}">ver más</a>
            @endif
            
        </section>
    </div>






    @else
    
    {{-- Es Paciente --}}
    <section class="d-flex align-items-center p-3 mb-2 mt-2">
        <i class="fa-solid fa-bed-pulse fa-2xl"></i>
        <div class="col fs-2 ms-2">Bienvenido {{ Auth::user()->name }}</div>
    </section>

    <div class="container-fluid row inicio">
        <section class="col-lg-7 row leftdiag-container">
            <div class="vstack gap-2 col-sm-3 principal-card">
                <img class="image" src="{{url('/images/Medical prescription-pana.png')}}" alt="Image"/> <br>
                <button type="button" class="btn btn-secondary principal-btn">Ver Prediagnóstico</button>
                <button type="button" class="btn btn-secondary principal-btn">Editar Prediagnóstico</button>
            </div>
            
            <div class="vstack gap-2 col-sm-3 principal-card">
                <img class="image" src="{{url('/images/Medical prescription-bro.png')}}" alt="Image"/> <br>
                <a href="#" type="button" class="btn btn-secondary principal-btn">Solicitar Diagnóstico</a>
            </div>
        </section>

        <div class="col-lg-1">
            <div class="vr"></div>
        </div>
        

        <section class="principal-list overflow-auto col-lg-4">

            @foreach ($users as $user)
                @if ($user->role == 2)
                <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                        <div class="text-uppercase me-3">{{ $user->name }}</div>
                    </div>
                    <button type="button" class="btn btn-secondary principal-btn">Pedir asistencia</button>
                </div>
    
                @endif
            @endforeach
            
            
            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre Médico </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Pedir asistencia</button>
            </div>


            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre Médico </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Pedir asistencia</button>
            </div>

            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre Médico </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Pedir asistencia</button>
            </div>
            
            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre Médico </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Pedir asistencia</button>
            </div>

            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre Médico </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Pedir asistencia</button>
            </div>


            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre Médico </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Pedir asistencia</button>
            </div>
        </section>
    </div>
    @endif

    
    
</x-app-layout>