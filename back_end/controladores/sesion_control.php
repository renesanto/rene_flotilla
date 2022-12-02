<?php
    include('../modelos/cliente.php');
    include('../modelos/config.php');

    $opcion=$_POST['opcion'];
    switch($opcion){
        //crear
        case 1:
            $conexion=new Conexion();
            $con=$conexion->getConection();
            $cliente=new Cliente($con);

            $cliente->correo=$_POST['correo'];
            $cliente->clave=$_POST['clave'];


            $res=$cliente->leer_clave_correo_cliente();
            if($res!=null){
                //echo "REGISTRADO ENCONTRADO";
                //print_r($res);
                session_start();
                $_SESSION['correo']=$res[0]->correo;
                $_SESSION['id']=$res[0]->id;
                $_SESSION['estatus']=$res[0]->estatus;
                $_SESSION['nombre']=$res[0]->nombre;
                $_SESSION['foto']= $res[0]->foto;
                header('Location: ../../front_end/private/clientes/index.php');
            }else{
                echo "NO ENCONTRADO";
                session_unset();
                session_destroy();
                header('Location: ../../front_end/private/sesion/sesion.php?mensaje=usuario y/o contraseña invalidos');
            }
            //header('Location: ../../front_end/visitas/private/prestatarios/index.php');
        break;
        case 2:
            session_unset();
                session_destroy();
                header('Location: ../../front_end/private/sesion/sesion.php');
        break;

    }
?>