<x-guest-layout>
        <div class="cont">

            <div class="box">

                <div>
                    <h1>
                        SISTEMA WEB PARA REGISTRO DE PACIENTES CON ENFERMEDADES NEURO-MUSCULARES.
                    </h1>
                    <p>
                        El Sistema Web Para Registro De Pacientes Con Enfermedades Neuro-musculares está
                        diseñado para que usuarios con enfermedades neuromusculares obtengan un
                        diagnóstico preventivo...
                    </p>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Saber más
                        <i class="bi bi-caret-right-fill arrow-right"></i>
                    </i>
                </button>
            </div>

        </div>

        <div class="box">
            <div>
                <div class="cont-img">
                  <img src="{{url('/images/Domain.png')}}" alt="">
                </div>
                <!-- Aqui se enruta -->
                <div><a class="fs-3 text-black-50" href=" {{ route('login') }} ">INICIA SESIÓN AQUÍ <i class="bi bi-caret-right-fill arrow-right"></i></a></div>
                <div><a class="fs-6 text-black-50" href="/register?flag=1">REGÍSTRATE AQUÍ <i class="bi bi-caret-right-fill arrow-right"></i></a></div>

            </div>

        </div>

    </div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h1>SISTEMA WEB PARA REGISTRO DE PACIENTES CON ENFERMEDADES NEURO-MUSCULARES.</h1>
            <p>El Sistema Web Para Registro De Pacientes Con Enfermedades Neuro-musculares
                está diseñado para que usuarios con enfermedades neuromusculares obtengan un
                diagnóstico preventivo para este conjunto de enfermedades, puede realizarse un
                diagnóstico por cuenta propia o con asistencia de un médico que ya cuente con el
                sistema.</p>
        </div>
      </div>
    </div>
  </div>

</x-guest-layout>
