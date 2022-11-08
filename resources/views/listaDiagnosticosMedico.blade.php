<x-app-layout>

    <div class="col-sm-12 d-flex justify-content-center">
        <h1 class="text-center">Diagnósticos</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
        <table class="table table-striped">
      <thead>
      <h3>Nombre Completo del Médico</h3>
        <tr>
          <th scope="col">Fecha de reporte</th>
          <th scope="col">Link del reporte</th>
          <th scope="col">Link a señales EMG</th>
          <th scope="col">Comentario</th>
          <td scope="col">Edición</td>
        </tr>
      </thead>
      <tbody>

          <tr>
              <td>15/05/22</td>
              <td>Información</td>
              <td>Información</td>
              <td>Comentario</td>
              <td>
                <div class="btn-group" role="group">
                <form action="" method="POST">
                  <input type="hidden" name="" value="">
                  <button type="submit" class="btn btn-primary">Editar</button>
                </form>
                <form action="" method="POST">
                  <input type="hidden" name="" value="">
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                </div>
             </td>
          </tr>
      </tbody>
    </table>
        </div>
      </div>
    </div>
    </x-app-layout>
