<?php
include('../modelos/cliente.php');
include('../modelos/config.php');

$opcion=$_POST['opcion'];
$target_dir = "../../front_end/public/imagenes/clientes/";
switch($opcion){
    case 1://crear
        $conexion=new Conexion();
        $con=$conexion->getConection();
        $cliente=new Cliente($con);

        $cliente->apellido1=$_POST['apellido1'];
        $cliente->apellido2=$_POST['apellido2'];
        $cliente->nombre=$_POST['nombre'];
        $cliente->correo=$_POST['correo'];
        $cliente->clave=$_POST['clave'];
        
        $cliente->estatus="Activo";
        include ("subir_archivo.php");
        $cliente->foto=$file_name;
        $res=$cliente->crear();
        echo $res;
        if($res==1){
            echo"Cliente agregado ";
        }else{
            echo $res;
        }
        header('Location: ../../front_end/private/clientes/index.php');

    break; 

case 2://Modificar


    $conexion=new Conexion();
    $con=$conexion->getConection();

    $cliente=new Cliente($con);

    $cliente->apellido1=$_POST['apellido1'];
    $cliente->apellido2=$_POST['apellido2'];
    $cliente->nombre=$_POST['nombre'];
    $cliente->correo=$_POST['correo'];
    $cliente->clave=$_POST['clave'];
    $cliente->estatus=$_POST['estatus'];
    

    if($_FILES ['foto']['size']<=0){
        $cliente->foto=$_POST['foto_actual'];
    }else{
        include ("subir_archivo.php");
        $cliente->foto=$file_name;
    }

    $cliente->id=$_POST['id'];

    $res=$cliente->actualizar();
    if($res==1){
echo "Cliente actualizado";
    }else{
echo $res;     
    }
    header('Location: ../../front_end/private/clientes/index.php');
    break;

    case 3:
        $conexion=new Conexion();
        $con=$conexion->getConection();
        $cliente=new Cliente($con);

        $cliente->id=$_POST['id'];
        $res=$cliente->borrar();
        if($res==1){
            echo "DATOS BORRADOS!!";
        }else{
            echo $res;
        }
        header('Location: ../../front_end/private/clientes/index.php');
    break;
    }


?>