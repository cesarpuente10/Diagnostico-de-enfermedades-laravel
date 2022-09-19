<x-app-layout>
    

<div class="center">
    <div>
    <img src="{{url('/images/perfil.png')}}" width="200px">
    </div><br><br>

    
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nombre(s)</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Apellido paterno</label>
            <input type="text" class="form-control" id="validationCustom02" value="" required>
        </div>

        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Apellido materno</label>
            <input type="text" class="form-control" id="validationCustom03" value="" required>
        </div>

        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Edad</label>
            <input type="int" class="form-control" id="validationCustom04" value="" required>
        </div>

        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Alergias</label>
            <input type="text" class="form-control" id="validationCustom05" value="" required>
        </div>

        <div class="col-md-6">
            <label for="validationCustom06" class="form-label">Estado</label>
            <input type="text" class="form-control" id="validationCustom06" required>
            <div class="invalid-feedback">
                Ingrese un estado valido.
            </div>
        </div>

        <div class="col-md-6">
            <label for="validationCustom07" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="validationCustom07" required>
            <div class="invalid-feedback">
                Ingrese una ciudad valida.
            </div>
        </div>

        <div class="col-md-3">
            <label for="validationCustom08" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="validationCustom08" required>
        </div>

        <div class="col-md-3">
            <label for="validationCustom09" class="form-label">Número interior</label>
            <input  type="number" name="numeros" class="form-control" id="validationCustom09" required>
        </div>

        <div class="col-md-3">
            <label for="validationCustom10" class="form-label">Número exterior</label>
            <input  type="number" name="numeros" class="form-control" id="validationCustom10" required>
        </div>

        <div class="col-md-3">
            <label for="validationCustom11" class="form-label">Código postal</label>
            <input  type="number" name="numeros" class="form-control" id="validationCustom11" required>
        </div>
        <div class="col-md-3">
            <label for="validationCustom12" class="form-label">Número telefónico de casa</label>
            <input type="number"  name="phone" class="form-control" id="validationCustom12" required>
        </div>

        <div class="col-md-3">
            <label for="validationCustom13" class="form-label">Número telefónico del celular</label>
            <input type="number" name="phone" class="form-control" id="validationCustom13" required>
        </div><br>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button type="button" class="btn btn-secondary">Editar</button>
        </div>
        
        
    </form>
</div>


</x-app-layout>