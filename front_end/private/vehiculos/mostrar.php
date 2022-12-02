<?php
  include('../../../back_end/modelos/vehiculos.php');
  include('../../../back_end/modelos/config.php');

  $conexion=new Conexion();
  $con=$conexion->getConection();
  $vehiculo=new Vehiculo($con);
  $vehiculo->id=$_GET['id'];

  $vehiculos=$vehiculo->leer_uno_id();
  $vehiculo=$vehiculos[0];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Area Administrativa</title>
  <?php
    include_once('../plantilla/head.php');
  ?>
</head>

<body>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <?php
      include_once('../plantilla/header.php');
    ?>
  </header>

  <navbar> 
 <?php
include_once('../plantilla/navbar.php');
 ?>

<main role="main" class="container">
</navbar> 

  <form action="../../../back_end/controladores/vehiculos_controladores.php" 
method="POST" class="needs-validation" novalidate>
<input type="hidden" name="opcion" value="3">
  <div class="form-row pt-5 mt-3">
        </div>
 <div class="col-md-7 mb-7">
      <label for="validationCustom01">Id</label>
      <input type="number" class="form-control" name="id" id="validationCustom01" 
      value="<?php echo $vehiculo->id ?>" readonly>
    </div>
 
 
    <div class="col-md-7 mb-6">
      <label for="validationCustom02">Capacidad</label>
      <input type="text" class="form-control" name="capacidad" id="validationCustom02"  
      value="<?php echo $vehiculo->capacidad ?>" readonly>
    </div>

    <div class="col-md-7 mb-7">
      <label for="validationCustom02">Matricula</label>
      <input type="text" class="form-control" name="matricula" id="validationCustom02"  value="<?php echo $vehiculo->matricula ?>" readonly >
    </div>
  </div>

 
  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Modelo</label>
      <input type="text" class="form-control" name="modelo" id="validationCustom02"  value="<?php echo $vehiculo->modelo ?>" readonly  >
    </div>
  </div>

 

 
  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Color</label>
      <input type="text" class="form-control" name="color" id="validationCustom02"  value="<?php echo $vehiculo->color ?>" readonly >
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Poliza</label>
      <input type="number" class="form-control" name="poliza" id="validationCustom02"  value="<?php echo $vehiculo->poliza ?>" readonly >
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Costo mensual</label>
      <input type="number" class="form-control" name="costo_mensual" id="validationCustom02"  value="<?php echo $vehiculo->costo_mensual ?>" readonly >
    </div>
  </div>


  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Foto</label>
      <img src="../../public/imagenes/vehiculos/<?php echo $vehiculo->foto ?>" alt="" width="150px">
      <input type="file" class="form-control" name="foto" id="validationCustom02"  value="<?php echo $vehiculo->foto ?>"readonly  >
     </div>
  </div>

  <div class="col-md-3 mb-3">
  <label for="validationDefault02">Estatus</label>
      <select class="custom-select" id="estatus" name="estatus"  value="<?php echo $vehiculo->estatus ?>" readonly >
        <option selected disabled value="">Selecciona...</option readonly>
        <option value="Activo" <?php echo ($vehiculo->estatus=="Activo"?'selected':'') ?> >Activo </option>
        <option value="Inactivo" <?php echo ($vehiculo->estatus=="Inactivo"?'selected':'') ?> >Inactivo </option>
      </select>
    </div>
      </div>

  <button class="btn btn-primary" type="submit">Borrar</button>

</form>

 
<footer id="footer" class="footer">
    <?php
      include_once('../plantilla/footer.php');
    ?>

  </footer>

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

</body>

</html>