<?php

require_once 'config/Conexion.php';

class ClientesModel
{

    private $con;

    public function __construct()
    { //cosntructor
        $this->con = Conexion::getConexion(); //operador :: llamando a un metodo estatico
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
    

    public function insert_cliente($cliente_DAO) {
        try{
        $sql = "INSERT INTO `cliente` (`nombre`, `Apellido`, `Correo`, `cedula`, `telefono`, `Direccion`, `Ciudad_FK`)
                VALUES (:nombre, :apellido, :correo, :cedula, :telefono, :direccion, :ciudad_fk)";
                
        // Preparar la sentencia
        $stmt = $this->con->prepare($sql);
        
    
        
        $data =[
            'nombre'=> $cliente_DAO->getNombre(),
            'apellido'=> $cliente_DAO->getApellido(),
            'correo'=>$cliente_DAO->getCorreo(),
            'cedula'=> $cliente_DAO->getCedula(),
            'telefono'=>$cliente_DAO->getTelefono(),
            'direccion'=>$cliente_DAO->getDireccion(),
            'ciudad_fk'=>$cliente_DAO->getCiudadFk(),
        ];
        // Ejecutar la sentencia
        $stmt->execute($data);
        
        if ($stmt->rowCount() <= 0) {// verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        }catch(Exception $e){
            //echo $e->getMessage();
            header('Location:index.php?c=Reservas&a=new_reservas');
            return false;
        }
            return true;          
            }
}
    
