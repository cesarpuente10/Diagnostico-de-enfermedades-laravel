<x-app-layout>
  
    <br>
    <br>
    <b><h1>FORMULARIO DE </h1></b>
    <b><h1>PREDIAGNÓSTICO</h1></b>
  
    <div class="else">
    <div class="myDiv">
      <h2>¿Qué es un formulario de prediagnóstico?</h2>
      <p>Es un sistema experto, capaz de interpretar los síntomas que explica el usuario utilizando el lenguaje natural.</p>
      <b><p>Favor de responder este cuestionario digital para la interpretación del sistema</p></b>

    </div>
    
    <form method="POST">
    @csrf
    <table>
        <tr>
         <b> <th>Expediente de paciente</th></b>
        </tr>
        <tr>
          <td class="titles">Datos del paciente</td>
        </tr>
        <tr>
          <td>
            <label>Nombre del paciente: <input type="text"class="name"> </label>
            
            <label>Sexo: </label>
            <label>Masculino <input type="checkbox"><br></label>
            <label>Femenino <input type="checkbox"><br></label>
          </td>
          </td>
        </tr>
        <tr>
          <td>
            <label>Edad: <input type="text" class="age"> </label>
            <label>Originario de: <input type="text" class="name"> </label>
            <label>Fecha: <input type="date"> </label>
          </td>
        </tr>
      </table><br>

      

      <table>
        <tr>
          <td class="titles">Observaciones iniciales del paciente</td>
        </tr>
        <tr>
          <td>
            <label>Peso: <input type="text" class="age"> </label>
            <label>Estatura: <input type="text" class="age"> </label>
            <label>Presión arterial: <input type="text" class="age"> </label>
          </td>
          <tr>
            <td>
              <label>Frecuencia cardiaca: <input type="text" class="age"> </label>
              <label>Frecuencia respiratoria: <input type="text" class="age"> </label>
              <label>Temperatura (en grados celsius): <input type="text" class="age"> </label>
            </td>
          </tr>
        </tr>
      </table>
      <table>
        <tr>
          <th>Historial</th>
        </tr>
      </table>
      <table>
        <tr>
          <td>Archivo</td>
          <td>Diagnóstico</td>
        </tr>
      </table><br>
      
      <table>
        <tr>
          <td>
            <label >Subir archivo previo de señales bio-eléctricas (.txt) <input type="file"class="file"><br></label><br>
          </td>
        </tr>
    </table><br>
      <hr>

      
      
    <table>
      <tr>
        <th><input type="submit" class="send"></th>
      </tr>
    </table>
      
    </form>
      
     
    </div>



    
</x-app-layout>
