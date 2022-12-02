<?php 
include('../../../back_end/modelos/vehiculos.php');
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
      <th scope="col">Capacidad</th>
      <th scope="col">Matricula</th>
      <th scope="col">Modelo</th>
       <th scope="col">Color</th>
       <th scope="col">Poliza</th>
       <th scope="col">Estatus</th>
       <th scope="col">Costo_mensual</th>
      <th scope="col">Foto</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>

  <tbody>
    <?php 
    $conexion=new Conexion();
    $con=$conexion->getConection();
    $vehiculo=new Vehiculo($con);
    $vehiculos=$vehiculo->leer_todos();
    foreach($vehiculos as $vehiculo){
    ?>
    <tr>
  <th scope="row"><?php echo $vehiculo->id ?></th>
  <td> <?php echo $vehiculo->capacidad ?></td>
  <td> <?php echo $vehiculo->matricula ?></td>
  <td> <?php echo $vehiculo->modelo ?></td>
  <td> <?php echo $vehiculo->color ?></td>
  <td> <?php echo $vehiculo->poliza ?></td>
  <td> <?php echo $vehiculo->estatus ?></td>
  <td> <?php echo $vehiculo->costo_mensual ?></td>
  


  <td> <img src="../../public/imagenes/vehiculos/<?php echo $vehiculo->foto ?>" alt="" width="50px"></td>

  <td><a href="editar.php?id=<?php echo $vehiculo->id ?>">Editar</a></td>
  <td><a href="mostrar.php?id=<?php echo $vehiculo->id ?>">Borrar</a></td>

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