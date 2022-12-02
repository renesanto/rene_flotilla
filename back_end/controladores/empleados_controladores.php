<?php
include('../modelos/empleados.php');
include('../modelos/config.php');

$opcion=$_POST['opcion'];
$target_dir = "../../front_end/public/imagenes/empleados/";
switch($opcion){
    case 1://crear
        $conexion=new Conexion();
        $con=$conexion->getConection();
        $empleado=new Empleado ($con);

        $empleado->apellido1=$_POST['apellido1'];
        $empleado->apellido2=$_POST['apellido2'];
        $empleado->nombre=$_POST['nombre'];
        $empleado->correo=$_POST['correo'];
        $empleado->clave=$_POST['clave'];
        
        $empleado->estatus="Activo";
        include ("subir_archivo.php");
        $empleado->foto=$file_name;
        $res=$empleado->crear();
        echo $res;
        if($res==1){
            echo"Empleados agregado ";
        }else{
            echo $res;
        }
       header('Location: ../../front_end/private/empleados/index.php');

    break; 

case 2://Modificar


    $conexion=new Conexion();
    $con=$conexion->getConection();

    $empleado=new Empleado ($con);

    $empleado->apellido1=$_POST['apellido1'];
    $empleado->apellido2=$_POST['apellido2'];
    $empleado->nombre=$_POST['nombre'];
    $empleado->correo=$_POST['correo'];
    $empleado->clave=$_POST['clave'];
    $empleado->estatus=$_POST['estatus'];
    

    if($_FILES ['foto']['size']<=0){
        $empleado->foto=$_POST['foto_actual'];
    }else{
        include ("subir_archivo.php");
        $empleado->foto=$file_name;
    }

    $empleado->id=$_POST['id'];

    $res=$empleado->actualizar();
    if($res==1){
echo "Empleados actualizado";
    }else{
echo $res;     
    }
    header('Location: ../../front_end/private/empleados/index.php');
    break;

    case 3:
        $conexion=new Conexion();
        $con=$conexion->getConection();
        $empleado=new Empleado($con);

        $empleado->id=$_POST['id'];
        $res=$empleado->borrar();
        if($res==1){
            echo "DATOS BORRADOS!!";
        }else{
            echo $res;
        }
        header('Location: ../../front_end/private/empleados/index.php');
    break;
    }


?>