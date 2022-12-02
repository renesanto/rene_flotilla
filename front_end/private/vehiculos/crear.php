<form action="../../../back_end/controladores/vehiculos_controladores.php" 
method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
<input type="hidden" name="opcion" value="1">
  <div class="form-row pt-5 mt-3">
        </div>
 <div class="col-md-7 mb-7">
      <label for="validationCustom01">Id</label>
      <input type="number" class="form-control" name="id" id="validationCustom01" disabled>
    </div>

    <div class="col-md-7 mb-6">
      <label for="validationCustom02">Capacidad</label>
      <input type="text" class="form-control" name="capacidad" id="validationCustom02"  required>
      </div>
    </div>

 

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Modelo</label>
      <input type="text" class="form-control" name="modelo" id="validationCustom02"  required>
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Matricula</label>
      <input type="text" class="form-control" name="matricula" id="validationCustom02"  required>
    </div>
  </div>
 
  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Color</label>
      <input type="text" class="form-control" name="color" id="validationCustom02"  required>
    </div>
  </div>

 

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Poliza</label>
      <input type="number" class="form-control" name="poliza" id="validationCustom02"  required>
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Estatus</label>
      <input type="text" class="form-control" name="estatus" id="validationCustom02"  required>
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Costo Mensual</label>
      <input type="number" class="form-control" name="costo_mensual" id="validationCustom02"  required>
    </div>
  </div>


  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Foto</label>
       <input type="file" accept="image/*" class="form-control" name="foto" id="validationCustom02"  required>
     </div>
  </div>
  



  <button class="btn btn-primary" type="submit">Registrarse</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

</script>