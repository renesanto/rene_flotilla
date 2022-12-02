<?php
include('crud.php');
class Empleado implements CRUD{
    public $id;
    public $apellido1;
    public $apellido2;
    public $nombre;
    public $correo;
    public $clave;
    public $estatus;
    public $foto;

    public $con;

    public function __CONSTRUCT($con){
        $this->con=$con;
    }
    public function crear(){
        try{
         $sql = "INSERT INTO empleados (apellido1, apellido2, nombre, correo, clave, estatus, foto) 
         VALUES (:apellido1, :apellido2, :nombre, :correo, :clave, :estatus, :foto)";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':apellido1', $this->apellido1);
        $stmt->bindParam(':apellido2', $this->apellido2);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':correo', $this->correo);
        $stmt->bindParam(':clave', $this->clave);
        $stmt->bindParam(':estatus', $this->estatus);
        $stmt->bindParam(':foto', $this->foto);
        $stmt->execute();
        $last_id = $this->con->lastInsertId();
        return $last_id;
        
    } catch(PDOException $e){
        return $e->getMessage();
        }finally{
        $this->con=null;
        }
            }
            public function actualizar(){
                try{
                $sql= "UPDATE empleados SET apellido1=:apellido1, apellido2=:apellido2, nombre=:nombre, correo=:correo, estatus=:estatus, foto=:foto 
                WHERE id=:id";
            $stmt = $this->con->prepare($sql);
               $stmt->bindParam(':apellido1', $this->apellido1);
               $stmt->bindParam(':apellido2', $this->apellido2);
               $stmt->bindParam(':nombre', $this->nombre);
               $stmt->bindParam(':correo', $this->correo);
               $stmt->bindParam(':estatus', $this->estatus);
               $stmt->bindParam(':clave', $this->clave);
               $stmt->bindParam(':foto', $this->foto);
               $stmt->bindParam('id', $this->id);
               return $stmt->execute();
               
               } catch(PDOException $e){
               return $e->getMessage();
               }finally{
               $this->con=null;
               }
            }
            public function borrar(){
                try{
                    $sql= "DELETE FROM empleados WHERE id=:id";
                $stmt = $this->con->prepare($sql);
                   $stmt->bindParam('id', $this->id);
                   return $stmt->execute();
                   
                   } catch(PDOException $e){
                   return $e->getMessage();
                   }finally{
                   $this->con=null;
                   }
            }
        
            public function leer_todos(){
                try{
                    $sql = "Select * from empleados"; 
                   $stmt = $this->con->prepare($sql);
                   $stmt->setFetchMode(PDO::FETCH_OBJ);
                 $stmt->execute();
                 return $stmt->fetchAll();
                   }catch(PDOException $e){
                   return $e->getMessage();
                   }finally{
                   $this->con=null;
                   }
            }
            public function leer_uno_id(){
                try{
                $sql = "Select * from empleados where id=:id"; 
               $stmt = $this->con->prepare($sql);
               $stmt->bindParam(':id', $this->id);
               $stmt->setFetchMode(PDO::FETCH_OBJ);
             $stmt->execute();
             return $stmt->fetchAll();
               }catch(PDOException $e){
               return $e->getMessage();
               }finally{
               $this->con=null;
               }
        }
            public function leer_varios_campo(){
        
            }
            public function leer_clave_correo_empleado(){
                try{
                    $sql = "Select * from empleados where correo=:correo AND clave=:clave"; 
                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam(':correo', $this->correo);
                    $stmt->bindParam(':clave', $this->clave);
    
            
                    $stmt->setFetchMode(PDO::FETCH_OBJ);
                    $stmt->execute();
                    return $stmt->fetchAll();
                   }catch(PDOException $e){
                   return $e->getMessage();
                   }finally{
                   $this->con=null;
                   }

            }
            public function leer_clave_correo_cliente(){
                
            }
        }
        
        ?>