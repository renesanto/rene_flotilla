<?php
include('../modelos/vehiculos.php');
include('../modelos/config.php');

$opcion=$_POST['opcion'];
$target_dir = "../../front_end/public/imagenes/vehiculos/";
switch($opcion){
    case 1://crear
        $conexion=new Conexion();
        $con=$conexion->getConection();
        $vehiculo=new Vehiculo ($con);

        $vehiculo->capacidad=$_POST['capacidad'];
        $vehiculo->modelo=$_POST['modelo'];
        $vehiculo->matricula=$_POST['matricula'];
        $vehiculo->color=$_POST['color'];
        $vehiculo->poliza=$_POST['poliza'];
        $vehiculo->estatus=$_POST['estatus'];
        $vehiculo->costo_mensual=$_POST['costo_mensual'];
        

        $vehiculo->estatus="Activo";
        include ("subir_archivo.php");
        $vehiculo->foto=$file_name;
        $res=$vehiculo->crear();
        echo $res;
        if($res==1){
            echo"vehiculos agregado ";
        }else{
            echo $res;
        }
    header('Location: ../../front_end/private/vehiculos/index.php');

    break; 

case 2://Modificar


    $conexion=new Conexion();
    $con=$conexion->getConection();

    $vehiculo=new Vehiculo($con);

    $vehiculo->capacidad=$_POST['capacidad'];
    $vehiculo->modelo=$_POST['modelo'];
    $vehiculo->matricula=$_POST['matricula'];
    $vehiculo->color=$_POST['color'];
    $vehiculo->poliza=$_POST['poliza'];
    $vehiculo->estatus=$_POST['estatus'];
    $vehiculo->costo_mensual=$_POST['costo_mensual'];
    

    if($_FILES ['foto']['size']<=0){
        $vehiculo->foto=$_POST['foto_actual'];
    }else{
        include ("subir_archivo.php");
        $vehiculo->foto=$file_name;
    }

    $vehiculos->id=$_POST['id'];

    $res=$vehiculo->actualizar();
    if($res==1){
echo "Vehiculos actualizado";
    }else{
echo $res;     
    }
    header('Location: ../../front_end/private/vehiculos/index.php');
    break;

    case 3:
        $conexion=new Conexion();
        $con=$conexion->getConection();
        $vehiculo=new Vehiculo($con);

        $vehiculos->id=$_POST['id'];
        $res=$vehiculo->borrar();
        if($res==1){
            echo "DATOS BORRADOS!!";
        }else{
            echo $res;
        }
       header('Location: ../../front_end/private/vehiculos/index.php');
    break;
    }


?>