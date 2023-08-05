<?php

require_once 'config/Conexion.php';

class PaquetesModel
{

    private $con;

    public function __construct()
    { //cosntructor
        $this->con = Conexion::getConexion(); //operador :: llamando a un metodo estatico
    }

    
    public function get_paquetes(){
        $sql = "SELECT * FROM paquetes 
        INNER JOIN aerolinea ON aerolinea.aerolinea_id = paquetes.Pvuelo_fk
        INNER JOIN vuelo ON vuelo.vuelo_id = paquetes.Pvuelo_fk
        INNER JOIN hotel ON hotel.hotel_id = paquetes.Photel_fk  ";  
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
       
        // ejecutar la sentencia
        $stmt->execute();
        //recuperar  resultados
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultado;
    } 
    public function registrar($paquete_model){
 
        try{

            $sql = "INSERT INTO `paquetes` (`nombreP`,`Pvuelo_fk`,`Photel_fk`, `precio`) 
            VALUES (:nom,:vu,:ho,:pre)"; 
    
            $sentencia = $this->con->prepare($sql);

            $data = [   'nom' =>  $paquete_model->getnombre(),
                        'vu' =>  $paquete_model->getPvuelo_fk(),
                        'ho' =>  $paquete_model->getPhotel_fk(),
                        'pre' =>  $paquete_model->getprecio(),
                        
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
     
        $sql ="SELECT * FROM paquetes 
        INNER JOIN aerolinea ON aerolinea.aerolinea_id = paquetes.Pvuelo_fk
        INNER JOIN vuelo ON vuelo.vuelo_id = paquetes.Pvuelo_fk
        INNER JOIN hotel ON hotel.hotel_id = paquetes.Photel_fk where paquete_id=:id"; 
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

   public function update_paquete($paquete_model){
 
    try{

        $sql = "UPDATE `paquetes` SET nombreP=:nom, Pvuelo_fk=:vu,
        Photel_fk=:ho, precio=:pre
        Where paquete_id =:id"; 

        $sentencia = $this->con->prepare($sql);

        $data = [   
                    'id' =>  $paquete_model->getpaquete_id(),
                    'nom' =>  $paquete_model->getnombre(),
                    'vu' =>  $paquete_model->getPvuelo_fk(),
                    'ho' =>  $paquete_model->getPhotel_fk(),
                    'pre' =>  $paquete_model->getprecio(),
                    
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

public function delete_paquete($id){
    //prepare
$sql = "DELETE FROM paquetes WHERE paquete_id = :id";

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