<?php
include('crud.php');
class Vehiculo implements CRUD{
    public $id;
    public $capacidad;
    public $modelo;
    public $matricula;
    public $color;
    public $poliza;
    public $estatus;
    public $costo_mensual;
    public $foto;

    public $con;

    public function __CONSTRUCT($con){
        $this->con=$con;
    }

    public function crear(){
try{
 $sql = "INSERT INTO vehiculos (capacidad, modelo, matricula, color, poliza, estatus, costo_mensual, foto) 
 VALUES (:capacidad, :modelo, :matricula, :color, :poliza, :estatus, :costo_mensual, :foto)";
$stmt = $this->con->prepare($sql);
$stmt->bindParam(':capacidad', $this->capacidad);
$stmt->bindParam(':modelo', $this->modelo);
$stmt->bindParam(':matricula', $this->matricula);
$stmt->bindParam(':color', $this->color);
$stmt->bindParam(':poliza', $this->poliza);
$stmt->bindParam(':estatus', $this->estatus);
$stmt->bindParam(':costo', $this->costo_mensual);
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
        $sql= "UPDATE vehiculos SET capacidad=:capacidad, matricula=:matricula, modelo=:modelo, color=:color, poliza=:poliza, estatus=:estatus, costo_mensual=:costo_mensual, foto=:foto 
        WHERE id=:id";
    $stmt = $this->con->prepare($sql);
       $stmt->bindParam(':capacidad', $this->capacidad);
       $stmt->bindParam(':matricula', $this->matricula);
       $stmt->bindParam(':modelo', $this->modelo);
       $stmt->bindParam(':color', $this->color);
       $stmt->bindParam(':poliza', $this->poliza);
       $stmt->bindParam(':estatus', $this->estatus);
       $stmt->bindParam(':costo_mensual', $this->costo_mensual);
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
            $sql= "DELETE FROM vehiculos WHERE id=:id";
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
            $sql = "Select * from vehiculos"; 
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
        $sql = "Select * from vehiculos where id=:id"; 
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

    }
    public function leer_clave_correo_cliente(){
        
    }

}

?>