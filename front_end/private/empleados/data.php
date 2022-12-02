<?php 
include('../../../back_end/modelos/empleados.php');
include('../../../back_end/modelos/config.php');
?>


<!doctype html>
<html lang="es">
  
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
</navbar> 

 
<main> 
<table class="table">
   <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Correo</th>
      <th scope="col">Clave</th>
      <th scope="col">Estatus</th>
      <th scope="col">Foto</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>

  <tbody>
    <?php 
    $conexion=new Conexion();
    $con=$conexion->getConection();
    $empleado=new Empleado ($con);
    $empleados=$empleado->leer_todos();
    foreach($empleados as $empleado){
    ?>
    <tr>
  <th scope="row"><?php echo $empleado->id ?></th>
  <td> <?php echo $empleado->nombre ?></td>
  <td> <?php echo $empleado->apellido1 ?></td>
  <td> <?php echo $empleado->apellido2 ?></td>
  <td> <?php echo $empleado->correo ?></td>
  <td> <?php echo $empleado->clave ?></td>
  <td> <?php echo $empleado->estatus ?></td>

  <td> <img src="../../public/imagenes/empleados/<?php echo $empleado->foto ?>" alt="" width="50px"></td>

  <td><a href="editar.php?id=<?php echo $empleado->id ?>">Editar</a></td>
  <td><a href="mostrar.php?id=<?php echo $empleado->id ?>">Borrar</a></td>

    </tr>
 <?php
    }
 ?>
  </tbody>
  </table>

</main><!-- /.container -->

    <footer class="footer">
<?php
include_once('../plantilla/footer.php');
 ?>
</footer>
      
  </body>
</html>