<?php
require_once 'config/Conexion.php';

class ConsultaSelectModel {
    private $con;
    
    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    
      public function consultarCiudad(){
        //prepare
      $sql="SELECT * FROM ciudades";
      $sentencia = $this->con->prepare($sql);
        //binding parameters
        //execute
      $sentencia->execute();
        //retornar resultados
      $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
      return $resultados;
        
    }

    public function consultarAerolinea(){
      //prepare
    $sql="SELECT * FROM aerolinea";
    $sentencia = $this->con->prepare($sql);
      //binding parameters
      //execute
    $sentencia->execute();
      //retornar resultados
    $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
      
    return $resultados;
      
  }

  public function consultarHotel(){
    //prepare
  $sql="SELECT * FROM hotel";
  $sentencia = $this->con->prepare($sql);
    //binding parameters
    //execute
  $sentencia->execute();
    //retornar resultados
  $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
  return $resultados;
    
}

public function consultarVuelo(){
  //prepare
$sql="SELECT * FROM vuelo
INNER JOIN aerolinea ON aerolinea.aerolinea_id = vuelo.aerolinea_fk";
$sentencia = $this->con->prepare($sql);
  //binding parameters
  //execute
$sentencia->execute();
  //retornar resultados
$resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
  
return $resultados;
  
}
}