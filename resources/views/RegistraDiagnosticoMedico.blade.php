    <!--Este usuario es medico, por lo tanto, la opoción junto al botón de menú debe ser "Pacientes"-->

    <!--Este flujo se presenta como médico, cuando se presiona el botón de "Registrar diagnóstico",
    Muestra una lista de pacientes y se debe escoger al paciente al que se le desea hacer el diagnóstico-->
    <!--Requiere la información de los usuarios-Paciente para poder escoger a cual le realizará un diagnóstico-->
<x-app-layout>
    <div class="contenedor" id="uno">
        <div class="contenido">
            <h1>Registrar diagnóstico</h1>
            <table class="table table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Paciente</th>
                        <th scope="col">Generar diagnóstico</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>

                        <td>Nombre del paciente</td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Generar
                           </button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Nombre del paciente</td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Generar
                           </button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Nombre del paciente</td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                           Generar
                          </button></td>
                        
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>


  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar diagnóstico</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Seguro desea generar un diagnóstico para este paciente?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <a href="indexPaciente.blade.php"><button type="button" class="btn btn-primary">Generar diagnóstico</button></a>
        </div>
      </div>
    </div>
  </div>

 
</x-app-layout>
