<?php


class Conexion{
private $con;

public function __CONSTRUCT(){

	try {
		
          $this->con= new PDO("mysql:host=localhost; dbname=flotilla_camiones", 'root','');
	  	  //$this->con=new PDO("mysql:host=localhost; dbname=susana", 'root','');
          // set the PDO error mode to exception
	  $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	  //echo "Connected successfully";
	
	 }catch(PDOException $e) {
	  echo "Error: " . $e->getMessage();
	 }
}

public function getConection(){
	 	return $this->con;
	}
}

//$con=new Conexion();
 ?>