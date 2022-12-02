<?php
include('../../../back_end/modelos/vehiculos.php');
include('../../../back_end/modelos/config.php');

$conexion=new Conexion();
$con=$conexion->getConection();
$vehiculo=new Vehiculo ($con);
$vehiculo->id=$_GET['id'];
$vehiculo=$vehiculo->leer_uno_id();
$vehiculo=$vehiculo[0];
?>

<head>
<?php
include_once('../plantilla/head.php');
?>
<title>Area administrativa</title>

  </head>
  <body>
    
  <header>  
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

<main role="main" class="container">

   

</main><!-- /.container -->
<form action="../../../back_end/controladores/vehiculos_controladores.php" 
method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
<input type="hidden" name="opcion" value="2">
  <div class="form-row pt-5 mt-3">
        </div>
 <div class="col-md-7 mb-7">
      <label for="validationCustom01">Id</label>
      <input type="number" class="form-control" name="id" id="validationCustom01" 
      value="<?php echo $vehiculo->id ?>" readonly>
      <div class="valid-feedback">
        Dato validado!
      </div>
    </div>
 
 
    <div class="col-md-7 mb-6">
      <label for="validationCustom02">Capacidad</label>
      <input type="text" class="form-control" name="capacidad" id="validationCustom02" 
      value="<?php echo $vehiculo->capacidad ?>" required>
      <div class="valid-feedback">
      Dato validado!
      </div>
    </div>


  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Modelo</label>
      <input type="text" class="form-control" name="modelo" id="validationCustom02"  
      value="<?php echo $vehiculo->modelo ?>" required>
      <div class="valid-feedback">
      Dato validado!
      </div>
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Color</label>
      <input type="text" class="form-control" name="color" id="validationCustom02" 
      value="<?php echo $vehiculo->color ?>" required>
      <div class="valid-feedback">
      Dato validado!
      </div>
    </div>
  </div>

  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Poliza</label>
      <input type="text" class="form-control" name="poliza" id="validationCustom02" 
      value="<?php echo $vehiculo->poliza ?>" required>
      <div class="valid-feedback">
      Dato validado!
      </div>
    </div>
  </div>

  <div class="col-md-3 mb-3">
  <label for="validationDefault02">Estatus</label>
      <select class="custom-select" id="estatus" name="estatus" required>
        <option selected disabled value="">Selecciona...</option>
        <option>Activo</option>
        <option>Inactivo</option>
      </select>
    </div>
      </div>


    
  <div class="col-md-7 mb-7">
      <label for="validationCustom02">Foto</label>
      <img src="../../public/imagenes/vehiculos/<?php echo $vehiculo->foto ?>" alt="" width="150px">
      <input type="file" accept="image/*" class="form-control" name="foto" id="validationCustom02"> 
      <input type="hidden" name="foto_actual" value="<?php echo $vehiculo->foto ?>">
      <div class="valid-feedback">
      Dato validado!
      </div>
    </div>
  </div>

  <div class="col-md-7 mb-6">
      <label for="validationCustom02">Costo_mensual</label>
      <input type="number" class="form-control" name="capacidad" id="validationCustom02" 
      value="<?php echo $vehiculo->costo_mensual ?>" required>
      <div class="valid-feedback">
      Dato validado!
      </div>
    </div>

  
  <br>
  <button class="btn btn-primary" type="submit">Modificar</button>
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

<footer>
<?php
include_once('../plantilla/footer.php');
 ?>
</footer>
      
  </body>
</html>