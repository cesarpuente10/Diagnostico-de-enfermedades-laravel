<x-app-layout>
    @if (Auth::user()->role == 2)
    {{-- Es Medico --}}
    <section class="d-flex align-items-center p-3 mb-2 mt-2">
        <i class="fa-solid fa-user-doctor fa-2xl"></i>
        <div class="col fs-2 ms-2">Bienvenido {{ Auth::user()->name }}</div>
    </section>
    
    <div class="container-fluid row inicio">
        <section class="col-lg-7 row leftdiag-container">
            <div class="vstack gap-2 col-sm-3 principal-card">
                <div class="image"></div> <br>
                <button type="button" class="btn btn-secondary principal-btn">Registrar Diagnóstico</button>
            </div>
            
            <div class="vstack gap-2 col-sm-3 principal-card">
                <div class="image"></div> <br>
                <button type="button" class="btn btn-secondary principal-btn">Registrar Paciente</button>
            </div>
        </section>

        <div class="col-lg-1">
            <div class="vr"></div>
        </div>
        

        <section class="principal-list overflow-auto col-lg-4">

            @foreach ($users as $user)
                @if ($user->role == 1)
                <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-bed-pulse fa-2xl me-2"></i>
                        <div class="text-uppercase me-3">{{ $user->name }}</div>
                    </div>
                    <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
                </div>
                
                @endif
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
                <div class="image"></div> <br>
                <button type="button" class="btn btn-secondary principal-btn">Ver Prediagnóstico</button>
                <button type="button" class="btn btn-secondary principal-btn">Editar Prediagnóstico</button>
            </div>
            
            <div class="vstack gap-2 col-sm-3 principal-card">
                <div class="image"></div> <br>
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
                    <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
                </div>
    
                @endif
            @endforeach
            
            
            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre Medico </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>


            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre Medico </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>

            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre Medico </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>
            
            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre Medico </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>

            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre Medico </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>


            <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                    <div class="text-uppercase me-3">Nombre Medico </div>
                </div>
                <button type="button" class="btn btn-secondary principal-btn">Asistir</button>
            </div>
        </section>
    </div>
    @endif

    
    
</x-app-layout>