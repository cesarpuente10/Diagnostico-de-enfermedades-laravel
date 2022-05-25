
    <!--Este usuario es paciente, por lo tanto, la opoción junto al botón de menú debe ser "diagnósticos"-->

    <!--Esta pantalla es parte del flujo del paciente cuando presiona el botón "Diagnósticos"
    De su navbar, muestra una lista de diagnósticos-->
    <!--La información que se debe guardar o mostrar es la de los diagnósticos, cuando se realizó el último, 
    qué resultado tuvo y  el reporte con el botón de "abrir"-->
<x-app-layout>
    <div class="contenedor" id="uno">
        <div class="contenido">
            <h1>Diagnósticos</h1>
            <table class="table table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Resultado</th>
                        <th scope="col">Reporte</th>

                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <th scope="row">3</th>
                        <td>10/05/2022</td>
                        <td>Neuropatía</td>
                        <td><button type="button" class="btn btn-light btnSi">Abrir</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>11/05/2022</td>
                        <td>Miopatía</td>
                        <td><button type="button" class="btn btn-light btnSi">Abrir</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>12/05/2022</td>
                        <td>Músculo sano</td>
                        <td><button type="button" class="btn btn-light btnSi">Abrir</button></td>

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
