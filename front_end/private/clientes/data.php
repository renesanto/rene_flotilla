<?php 
include('../../../back_end/modelos/cliente.php');
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
    $cliente=new Cliente($con);
    $clientes=$cliente->leer_todos();
    foreach($clientes as $cliente){
    ?>
    <tr>
  <th scope="row"><?php echo $cliente->id ?></th>
  <td> <?php echo $cliente->nombre ?></td>
  <td> <?php echo $cliente->apellido1 ?></td>
  <td> <?php echo $cliente->apellido2 ?></td>
  <td> <?php echo $cliente->correo ?></td>
  <td> <?php echo $cliente->clave ?></td>
  <td> <?php echo $cliente->estatus ?></td>
  <td> <img src="../../public/imagenes/clientes/<?php echo $cliente->foto ?>" alt="" width="50px"></td>

  <td><a href="editar.php?id=<?php echo $cliente->id ?>">Editar</a></td>
  <td><a href="mostrar.php?id=<?php echo $cliente->id ?>">Borrar</a></td>

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