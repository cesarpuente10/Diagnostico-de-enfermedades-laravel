<x-app-layout>

   
  <div class="img-style">
      <img src="{{url('/images/perfil.png')}}" width="200px">
    </div><br><br>
    
            
 <div class="form-perfil-edit ">
           
     <div class="derecho">
         <h1 class="h1-titulo">Datos personales:</h1>

             <div>
               <label class="edit-titulo">Nombre(s):</label>
                <p>{{ $user->name }}</p>
               </div>


            <div>
            <label class="edit-titulo">Apellido paterno:</label>
             <p>{{ $user->lastnamef }}</p>
            </div>


            <div>
                <label class="edit-titulo">Apellido materno:</label>
                 <p>{{ $user->lastnamem}}</p>
             </div>


             <div>
                 <label class="edit-titulo">Correo Electrónico:</label>
                 <p>{{ $user->email }}</p>
              </div>
         </div>




             <div class="izquierdo">
              <h1 class="h1-titulo">Datos del consultorio:</h1>
                     <div>
                         <label class="edit-titulo">Dirección del consultorio:</label>
                         <p>{{ $consultorio->calle}}</p>
                     </div>


                        <div>
                            <label class="edit-titulo">Número exterior:</label>
                            <p>{{ $consultorio->numero_ext}}</p>
                        </div>

                        <div>
                            <label class="edit-titulo">Número interior:</label>
                            <p>{{ $consultorio->numero_int}}</p>
                        </div>


                        <div>
                            <label class="edit-titulo">Código postal:</label>
                            <p>{{ $consultorio->cp}}</p>
                        </div>

                        <div>
                            <label class="edit-titulo">Número telefónico del consultorio:</label>
                            <p>{{ $consultorio->tel_fijo}}</p>
                        </div>

                        <div>
                            <label class="edit-titulo" for="cedula"><strong>Cédula profesional:</strong></label>
                            <p>Cedula: <a href="{{ asset('cedulas/'.$consultorio->cedula) }}">{{ $consultorio->cedula }}</a></p>
                        </div>
                    
                     @if (Auth::user()->id == $user->id)
                         <div>
                           <a href="/perfilm/edit/{{ Auth::user()->id }}" class="btn btn-secondary">Editar</a>
                        </div>
                    @endif 
        
          </div>
    </div>
                    
        

</x-app-layout>
