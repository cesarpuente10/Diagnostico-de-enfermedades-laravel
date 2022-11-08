<x-app-layout>

<h3>Diagnostico de "Nombre del paciente"</h3>
<h4>Diagnostico #1</h4>

<div>
<table class="table table-striped">
  <thead>
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
           <form action="" method="POST">
              <input type="hidden" name="" value=""> 
              <button type="submit" class="btn btn-primary">Editar</button>
            </form>
            <form action="" method="POST">
              <input type="hidden" name="" value=""> 
              <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
         </td>
      </tr>
  </tbody>
</table>
</div>
</x-app-layout>
