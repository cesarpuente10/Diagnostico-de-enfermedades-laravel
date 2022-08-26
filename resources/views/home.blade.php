<x-guest-layout>


    <div class="w-full h-screen flex flex-wrap items-center justify-center text-center lg:text-left lg:flex-nowrap">

  
          <div class="h-full flex flex-col items-center justify-center px-20 lg:items-start lg:w-1/2 bg-cover"
              style="background-image: url('{{ url('/images/cover-home.jpg') }}')">
              <h3 class="font-black text-white text-xl">UASLP</h3>
              <h3 class="font-semibold text-white text-base my-2">
                  Sistema web para registro de pacientes con enfermedades neuro-musculares
              </h3>
              <p class="text-base text-white my-4 min-">
                  El sistema web para registro de pacientes con enfermedades neuro-musculares está
                  diseñado para que usuarios con enfermedades neuromusculares obtengan un
                  diagnóstico preventivo...
              </p>
              <button type="button" data-open="modal"
                  class="bg-black w-40 h-8 text-white text-sm hover:bg-blue-800 my-4  rounded-md transition-all"> Saber
                  más <i class="bi bi-caret-right-fill arrow-right"></i> </button>
          </div>

          <div class="flex flex-col items-center justify-center grow h-full overflow-hidden">

              <h1 class=" font-extrabold text-3xl">BIENVENIDOS</h1>

              <div class=" w-[550px]  m-10">
                  <img class="object-cover lg:w-[700px]" src="{{ url('/images/Domain.png') }}" alt="">
              </div>


              <!-- Aqui se enruta -->
              <div class="flex w-1/2 justify-around">
                  <a href=" {{ route('login') }} "
                      class="flex items-center justify-center bg-black h-14 lg:h-10 text-white text-sm hover:bg-blue-800 m-4 px-8 rounded-md transition-all">Iniciar Sesión
                  </a>
                  <a href=" {{ route('register') }} "
                      class="flex items-center justify-center bg-black h-14 lg:h-10 text-white text-sm hover:bg-blue-500 m-4 px-8 rounded-md transition-all">Registrarse
                  </a>
              </div>

          </div>
        

        {{-- Modal --}}

        {{-- Wrapp para poder acomodarse en toda la pantalla --}}
        <div id="modal" class=" invisible opacity-0 flex items-center justify-center absolute w-full  h-full transition-all duration-500">
          {{-- Contenido donde va el boton de cerrar, el titulo y el texto --}}
              <div class="h-1/2 w-9/12 lg:w-1/2 rounded-md flex flex-col justify-center bg-white">
              
                <div class=" overflow-scroll lg:overflow-auto text-left">
                    <h3 class="font-bold lg:text-xl text-base m-10 ">
                      Sistema web para registro de pacientes con enfermedades neuro-musculares
                    </h3>
                    <p class=" m-10">
                      El Sistema Web Para Registro De Pacientes Con Enfermedades Neuro-musculares
                      está diseñado para que usuarios con enfermedades neuromusculares obtengan un
                      diagnóstico preventivo para este conjunto de enfermedades, puede realizarse un
                      diagnóstico por cuenta propia o con asistencia de un médico que ya cuente con el
                      sistema.
                    </p>
                </div>

                <button type="button" data-close="modal" class=" my-5 mx-10 flex items-center justify-center bg-black h-14 lg:h-10 text-white text-sm hover:bg-blue-500 px-8 rounded-md transition-all">Cerrar</button>

            </div>
        </div>




    </div>


    {{-- SCRIPT MODAL --}}
    <script>

        var btn_modal = document.querySelector("[data-open]")
        var btn_close = document.querySelector("[data-close]")

        btn_modal.addEventListener('click', function() {

            var modal = document.getElementById('modal')

            //
            modal.classList.remove('invisible')
            modal.classList.add('visible')
            modal.classList.remove('opacity-0')
            modal.classList.add('opacity-100')
            

        })

        btn_close.addEventListener('click', function() {
          var modal = document.getElementById('modal')
          modal.classList.remove('visible')
          modal.classList.add('invisible')
          modal.classList.remove('opacity-100')
            modal.classList.add('opacity-0')
        })

    </script>

</x-guest-layout>
