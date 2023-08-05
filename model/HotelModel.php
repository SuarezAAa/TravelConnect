<?php

require_once 'config/Conexion.php';

class HotelModel
{

    private $con;

    public function __construct()
    { //cosntructor
        $this->con = Conexion::getConexion(); //operador :: llamando a un metodo estatico
    }

    
    public function get_hotel(){
        $sql = "SELECT * FROM hotel INNER JOIN ciudades ON ciudades.ciudades_id = hotel.ciudadhotel  ";  
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
       
        // ejecutar la sentencia
        $stmt->execute();
        //recuperar  resultados
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultado;
    } 
    public function registrar($hotel_model){
 
        try{

            $sql = "INSERT INTO `hotel` (`nombre_hotel`,`valoracion`,`direccion`, `precioNoche`, `ciudadhotel`) 
            VALUES (:nom_h,:va,:dir,:pre,:ciu)"; 
    
            $sentencia = $this->con->prepare($sql);

            $data = [   'nom_h' =>  $hotel_model->getnombre_hotel(),
                        'va' =>  $hotel_model->getvaloracion(),
                        'dir' =>  $hotel_model->getdireccion(),
                        'pre' =>  $hotel_model->getprecioNoche(),
                        'ciu' =>  $hotel_model->getciudadhotel(),
                        
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
     
        $sql ="SELECT * FROM hotel 
                 INNER JOIN ciudades ON hotel.ciudadhotel= ciudades.ciudades_id 
                 where hotel_id=:id"; 
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

   public function update_hotel($hotel_model){
 
    try{

        $sql = "UPDATE `hotel` SET  nombre_hotel=:nom_h, valoracion=:va,
        direccion=:dir, precioNoche=:pre, ciudadhotel=:ciu
        Where hotel_id =:id"; 

        $sentencia = $this->con->prepare($sql);

        $data = [   
                    'id' =>  $hotel_model->gethotel_id(),
                    'nom_h' =>  $hotel_model->getnombre_hotel(),
                    'va' =>  $hotel_model->getvaloracion(),
                    'dir' =>  $hotel_model->getdireccion(),
                    'pre' =>  $hotel_model->getprecioNoche(),
                    'ciu' =>  $hotel_model->getciudadhotel(),
                    
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

public function delete_hotel($id){
    //prepare
$sql = "DELETE FROM hotel WHERE hotel_id = :id";

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