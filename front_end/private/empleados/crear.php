<form action="../../../back_end/controladores/empleados_controladores.php" 
method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
<input type="hidden" name="opcion" value="1">
  <div class="form-row pt-5 mt-3">
        </div>
 <div class="col-md-7 mb-7">
      <label for="validationCustom01">Id</label>
      <input type="number" class="form-control" name="id" id="validationCustom01" disabled>
    </div>

    <div class="col-md-7 mb-6">
      <label for="validationCustom02">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="validationCustom02"  required>
    </div>

 

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Apellido Paterno</label>
      <input type="text" class="form-control" name="apellido1" id="validationCustom02"  required>
    </div>
  </div>

 

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Apellido Materno</label>
      <input type="text" class="form-control" name="apellido2" id="validationCustom02"  required>
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Correo</label>
      <input type="text" class="form-control" name="correo" id="validationCustom02"  required>
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Clave</label>
      <input type="text" class="form-control" name="clave" id="validationCustom02"  required>
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