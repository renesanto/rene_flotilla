<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Signin Template · Bootstrap v4.6</title>

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../../css/signin.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </head>
  <body class="text-center">
    
<form class="form-signin" method="POST"  action="../../../back_end/controladores/sesion_control.php">
 <img class="mb-4" src="#" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Inicia Sesión</h1>



  <label for="inputEmail" class="sr-only">Correo Electrónico</label>
  <input type="email" id="inputEmail" class="form-control" name="correo" placeholder="Correo Electrónico" required autofocus>
  <label for="inputPassword" class="sr-only" >Clave</label>
  <input type="password" id="inputPassword" class="form-control" name="clave" placeholder="Contraseña" required>
  <input type="hidden" name="opcion" id="opcion" value="1">  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
</form>


    
  </body>
</html>