<?php

require_once 'config/Conexion.php';

class VueloModel
{

    private $con;

    public function __construct()
    { //cosntructor
        $this->con = Conexion::getConexion(); //operador :: llamando a un metodo estatico
    }

    
    public function get_vuelo(){
        $sql = "SELECT * FROM vuelo 
        INNER JOIN aerolinea ON aerolinea.aerolinea_id = vuelo.aerolinea_fk
        INNER JOIN ciudades AS origen_ciudad ON origen_ciudad.ciudades_id = vuelo.origen 
        INNER JOIN ciudades AS destino_ciudad ON destino_ciudad.ciudades_id = vuelo.destino"; 
         
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
       
        // ejecutar la sentencia
        $stmt->execute();
        //recuperar  resultados
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultado;
    } 

    public function get_aerolinea(){
        $sql = "SELECT * FROM aerolinea"; 
         
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
       
        // ejecutar la sentencia
        $stmt->execute();
        //recuperar  resultados
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultado;
    } 



    public function registrar($vuelo_model){
 
        try{

            $sql = "INSERT INTO `vuelo` (`aerolinea_fk`,`origen`,`destino`, `precio`, `fecha`) 
            VALUES (:aer,:ori,:dest,:pre,:fech)"; 
    
            $sentencia = $this->con->prepare($sql);

            $data = [   'aer' =>  $vuelo_model->getaerolinea_fk(),
                        'ori' =>  $vuelo_model->getorigen(),
                        'dest' =>  $vuelo_model->getdestino(),
                        'pre' =>  $vuelo_model->getprecio(),
                        'fech' =>  $vuelo_model->getfecha(),
                        
                    ];
            //execute
            $sentencia->execute($data);
            //retornar resultados, 

                if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
                    //rowCount permite obtner el numero de filas afectadas
                    return false;
                }
        }catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
            return true;                 
    }

    public function selectOne($id) {
     
        $sql ="SELECT * FROM vuelo 
        INNER JOIN aerolinea ON aerolinea.aerolinea_id = vuelo.aerolinea_fk
        INNER JOIN ciudades AS origen_ciudad ON origen_ciudad.ciudades_id = vuelo.origen 
        INNER JOIN ciudades AS destino_ciudad ON destino_ciudad.ciudades_id = vuelo.destino 
                 where vuelo_id=:id"; 
       // preparar la sentencia
       $stmt = $this->con->prepare($sql);
       $data = ['id' => $id];
       // ejecutar la sentencia
       $stmt->execute($data);
       // recuperar los datos (en caso de select)
       $user = $stmt->fetch(PDO::FETCH_OBJ);
       /* $user = $stmt->fetchAll(PDO::FETCH_ASSOC); */// fetch retorna el primer registro
       // retornar resultados
        return $user;  
   }


   public function update_vuelo($vuelo_model){
 
    try{

        $sql = "UPDATE `vuelo` SET aerolinea_fk=:aer, origen=:ori,
        destino=:dest, precio=:pre, fecha=:fec
        Where vuelo_id =:id"; 

        $sentencia = $this->con->prepare($sql);

        $data = [   
                    'id' =>  $vuelo_model->getvuelo_id(),
                    'aer' =>  $vuelo_model->getaerolinea_fk(),
                    'ori' =>  $vuelo_model->getorigen(),
                    'dest' =>  $vuelo_model->getdestino(),
                    'pre' =>  $vuelo_model->getprecio(),
                    'fec' =>  $vuelo_model->getfecha(),
                    
                ];
        //execute
        $sentencia->execute($data);
        //retornar resultados, 

            if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
                //rowCount permite obtner el numero de filas afectadas
                return false;
            }
    }catch(Exception $e){
        echo $e->getMessage();
        return false;
    }
        return true;                 
}

public function delete_vuelo($id){
    //prepare
$sql = "DELETE FROM vuelo WHERE vuelo_id = :id";

$sentencia = $this->con->prepare($sql);
$data = ['id' =>  $id];
    //execute
$sentencia->execute($data);
    //retornar resultados, 
if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
    //rowCount permite obtner el numero de filas afectadas
return false;
}
return true;

}


}