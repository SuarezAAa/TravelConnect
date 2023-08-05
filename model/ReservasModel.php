<?php

require_once 'config/Conexion.php';

class ReservasModel
{

    private $con;

    public function __construct()
    { //cosntructor
        $this->con = Conexion::getConexion(); //operador :: llamando a un metodo estatico
    }

    /* Listado de reservas */
    public function get_reservas_hotel(){
        $sql = "SELECT * FROM `reservas_hotel` 
        INNER JOIN hotel ON hotel.hotel_id = reservas_hotel.RHhotel_fk
                INNER JOIN cliente ON cliente.cliente_id = reservas_hotel.cliente_FK 
                INNER JOIN ciudades ON ciudades.ciudades_id = hotel.ciudadhotel";  
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
       
        // ejecutar la sentencia
        $stmt->execute();
        //recuperar  resultados
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultado;
    } 

    public function selectOne($valoridc) {

        $sql = "SELECT *
        FROM reservas_hotel
        INNER JOIN cliente ON cliente.cliente_id = reservas_hotel.cliente_FK
        INNER JOIN hotel ON hotel.hotel_id = reservas_hotel.RHhotel_fk
        INNER JOIN ciudades ON ciudades.ciudades_id = hotel.ciudadhotel
        WHERE cliente_id = :valoridc";

        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['valoridc' => $valoridc];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $view_cliente = $stmt->fetch(PDO::FETCH_OBJ);
        /* $user = $stmt->fetchAll(PDO::FETCH_ASSOC); */// fetch retorna el primer registro
        // retornar resultados
         return $view_cliente;  
        }

        public function selectOneVuelo($valoridc) {

            $sql = "SELECT *, origenes.nombreCiudad AS vuelo_o, destinos.nombreCiudad AS Vuelo_d,
             aerolinea.nombre AS nombre_A, cliente.nombre AS nombre_C
            FROM reservas_vuelo
            INNER JOIN cliente ON cliente.cliente_id = reservas_vuelo.cliente_fk
            INNER JOIN vuelo ON vuelo.vuelo_id = reservas_vuelo.vuelo_fk
            INNER JOIN aerolinea ON aerolinea.aerolinea_id = vuelo.aerolinea_fk
            INNER JOIN ciudades AS origenes ON origenes.ciudades_id = vuelo.origen
            INNER JOIN ciudades AS destinos ON destinos.ciudades_id = vuelo.destino
            WHERE cliente_id = :valoridc";
    
            // preparar la sentencia
            $stmt = $this->con->prepare($sql);
            $data = ['valoridc' => $valoridc];
            // ejecutar la sentencia
            $stmt->execute($data);
            // recuperar los datos (en caso de select)
            $view_cliente = $stmt->fetch(PDO::FETCH_OBJ);
            /* $user = $stmt->fetchAll(PDO::FETCH_ASSOC); */// fetch retorna el primer registro
            // retornar resultados
             return $view_cliente;  
            }

            public function selectOnePaquete($valoridc) {

                $sql = "SELECT *, origenes.nombreCiudad AS vuelo_o, destinos.nombreCiudad AS Vuelo_d,
        aerolinea.nombre AS nombre_A, cliente.nombre AS nombre_C, hotel.nombre_hotel AS nombre_hotel, hotel.valoracion AS valoracion, hotel.direccion AS ubicacion
        FROM reservas_paquete
        INNER JOIN cliente ON cliente.cliente_id = reservas_paquete.clientefk
        INNER JOIN paquetes ON paquetes.paquete_id = reservas_paquete.paquetefk
        INNER JOIN vuelo ON vuelo.vuelo_id = paquetes.Pvuelo_fk
        INNER JOIN hotel ON hotel.hotel_id = paquetes.Photel_fk
        INNER JOIN aerolinea ON aerolinea.aerolinea_id = vuelo.aerolinea_fk
        INNER JOIN ciudades AS origenes ON origenes.ciudades_id = vuelo.origen
        INNER JOIN ciudades AS destinos ON destinos.ciudades_id = vuelo.destino
        WHERE cliente_id = :valoridc";

        
                // preparar la sentencia
                $stmt = $this->con->prepare($sql);
                $data = ['valoridc' => $valoridc];
                // ejecutar la sentencia
                $stmt->execute($data);
                // recuperar los datos (en caso de select)
                $view_cliente = $stmt->fetch(PDO::FETCH_OBJ);
                /* $user = $stmt->fetchAll(PDO::FETCH_ASSOC); */// fetch retorna el primer registro
                // retornar resultados
                 return $view_cliente;  
                }

    public function get_reservas_vuelo(){
             $sql ="SELECT *, origenes.nombreCiudad AS vOrigen, destinos.nombreCiudad AS vDestino,
                Clientes.nombre AS nCliente
                FROM `reservas_vuelo` 
                INNER JOIN vuelo ON vuelo.vuelo_id = reservas_vuelo.vuelo_fk
                INNER JOIN cliente AS clientes ON clientes.cliente_id = reservas_vuelo.cliente_FK
                INNER JOIN aerolinea ON aerolinea.aerolinea_id = vuelo.aerolinea_fk
                INNER JOIN ciudades AS origenes ON origenes.ciudades_id = vuelo.origen
                INNER JOIN ciudades AS destinos ON destinos.ciudades_id = vuelo.destino"; 
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
       
        // ejecutar la sentencia
        $stmt->execute();
        //recuperar  resultados
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultado;
    } 

    public function get_reservas_paquete(){
 
           $sql="SELECT *, origenes.nombreCiudad AS vOrigen, destinos.nombreCiudad AS vDestino,
           Clientes.nombre AS nCliente
           FROM `reservas_paquete` 
           INNER JOIN paquetes ON paquetes.paquete_id = reservas_paquete.paquetefk
            INNER JOIN hotel ON hotel.hotel_id = paquetes.Photel_fk
           INNER JOIN vuelo ON vuelo.vuelo_id = paquetes.Pvuelo_fk
           INNER JOIN cliente AS clientes ON clientes.cliente_id = reservas_paquete.clientefk
           INNER JOIN aerolinea ON aerolinea.aerolinea_id = vuelo.aerolinea_fk
          
           INNER JOIN ciudades AS origenes ON origenes.ciudades_id = vuelo.origen
           INNER JOIN ciudades AS destinos ON destinos.ciudades_id = vuelo.destino";
   // preparar la sentencia
   $stmt = $this->con->prepare($sql);
  
   // ejecutar la sentencia
   $stmt->execute();
   //recuperar  resultados
   $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
   //retornar resultados
   return $resultado;
} 


    public function get_cliente(){
        $sql = "SELECT * FROM cliente 
        INNER JOIN ciudades ON ciudades.ciudades_id = cliente.Ciudad_FK  ";  
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
       
        // ejecutar la sentencia
        $stmt->execute();
        //recuperar  resultados
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultado;
    } 

    public function get_cliente_by_cedula($cedula) {
        $sql = "SELECT * FROM cliente 
                INNER JOIN ciudades ON ciudades.ciudades_id = cliente.Ciudad_FK  
                WHERE cliente.cedula = :cedula";
        
        // Preparar la sentencia
        $stmt = $this->con->prepare($sql);
        
        // Asignar el valor de la cédula al parámetro :cedula
        $stmt->bindParam(':cedula', $cedula);
        
        // Ejecutar la sentencia
        $stmt->execute();
        
        // Recuperar el resultado
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Retornar el resultado
        return $resultado;
    }
    
    public function get_cliente_id_by_cedula($cedula) {
        $sql = "SELECT cliente_id FROM cliente WHERE cedula = :cedula";
        
        // Preparar la sentencia
        $stmt = $this->con->prepare($sql);
        
        // Asignar el valor de la cédula al parámetro :cedula
        $stmt->bindParam(':cedula', $cedula);
        
        // Ejecutar la sentencia
        $stmt->execute();
        
        // Recuperar el resultado
        $resultado = $stmt->fetchColumn();
        
        // Retornar el resultado
        return $resultado;
    }
    

    public function insert_reservaH($reservahotel) {
        try{
        $sql = "INSERT INTO `reservas_hotel` (`cliente_FK`,`RHhotel_fk`) VALUES(:cfk,:hfk)";
                
        // Preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data =[
            'cfk'=> $reservahotel->getClienteFK(),
            'hfk'=> $reservahotel->getRHhotelFk()
        ];
        // Ejecutar la sentencia
        $stmt->execute($data);
        
        if ($stmt->rowCount() <= 0) {// verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        }catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
            return true;          
            }


    
   
public function insert_reservaV($reservavuelo) {
                try{
                $sql = "INSERT INTO `reservas_vuelo` (`vuelo_fk`,`cliente_FK`) 
                VALUES(:vfk,:cfk)";
                        
                // Preparar la sentencia
                $stmt = $this->con->prepare($sql);
                $data =[
                    'cfk'=> $reservavuelo->getClienteFK(),
                    'vfk'=> $reservavuelo->getPaqueteFk()
                ];
                // Ejecutar la sentencia
                $stmt->execute($data);
                
                if ($stmt->rowCount() <= 0) {// verificar si se inserto 
                    //rowCount permite obtner el numero de filas afectadas
                    return false;
                }
                }catch(Exception $e){
                    echo $e->getMessage();
                    return false;
                }
                    return true;          
}

public function insert_reservaP($reservap) {
    try{
    $sql = "INSERT INTO `reservas_paquete` ( `clientefk`, `paquetefk`) 
    VALUES(:cfk,:pfk)";
            
    // Preparar la sentencia
    $stmt = $this->con->prepare($sql);
    $data =[
        'cfk'=> $reservap->getClienteFK(),
        'pfk'=> $reservap->getPaqueteFk()
    ];
    // Ejecutar la sentencia
    $stmt->execute($data);
    
    if ($stmt->rowCount() <= 0) {// verificar si se inserto 
        //rowCount permite obtner el numero de filas afectadas
        return false;
    }
    }catch(Exception $e){
        echo $e->getMessage();
        return false;
    }
        return true;          
}



        }
    
