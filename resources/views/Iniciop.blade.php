<x-app-layout>
    
    <section class="d-flex align-items-center p-3 mb-2 mt-2">
        <i class="fa-solid fa-bed-pulse fa-2xl"></i>
        <div class="col fs-2 ms-2">Bienvenido {{ Auth::user()->name }}</div>
    </section>

    <div class="container-fluid row inicio">
        <section class="col-lg-7 row leftdiag-container">
            <div class="vstack gap-2 col-sm-3 principal-card">
                <img class="image" src="{{url('/images/Medical prescription-pana.png')}}" alt="Image"/> <br>
                <button type="button" class="btn btn-secondary principal-btn">Prediagnóstico</button>
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

            @foreach ($users as $user)
                @if ($user->role == 2 )<!--Agregar una condición para que no muestre a los medicos con los que ya tiene asistencia-->
                <div class="border rounded justify-content-between d-flex p-3 mb-2 mt-2">
                    <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user-doctor fa-2xl me-2"></i>
                        <div class="text-uppercase me-3">{{ $user->name }} {{ $user->lastnamef }}</div>
                    </div>

                    <button type="button" class="btn btn-secondary principal-btn"  data-bs-toggle="modal" data-bs-target="#modalInfoMedico{{$user->id}}">Mostrar Información del Médico</button>

                </div>
    
                @endif
            @endforeach
            
            
            
        </section>
    </div>


    
    <!-- Modal -->

    @foreach ($users as $user)
        @if ($user->role == 2)
                <div class="modal fade" id="modalInfoMedico{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h3>INFORMACIÓN DEL MÉDICO</h3>
            

            <p>{{ $user->name }}  {{  $user->lastnamef }} {{  $user->lastnamem }}</p>

            <p>Direccion de consultorio</p>
            <p>Numero de telefono</p>
            
            <p>{{  $user->email }}</p>
            <form method="post" action="/asistencia">
                            @csrf
                            <input type="hidden" name="paciente_id" value ="{{ Auth::user()->id }}">
                            <input type="hidden" name="medico_id" value ="{{ $user->id }}">
                            <button type="submit" class="btn btn-secondary principal-btn">Agendar cita</button>
                            
                        </form>
            
        </div>

        
      </div>
    </div>
  </div>
    
     @endif
    @endforeach
   
    
</x-app-layout>