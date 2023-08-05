<?php
require_once 'config/Conexion.php';

class LoginModel
{

    private $con;

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function Agente_list($correo, $pass)

    {

       $sql = "SELECT agente_id,nombre, Apellido
       FROM agentes where Correo=:correo and password=:pass";

        $stmt = $this->con->prepare($sql);

        $data = ['correo' => $correo, 'pass' => $pass,];

        $stmt->execute($data); //ejecuto la sentencia

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() <= 0) {   // verificar si se inserto 
        
            return $resultado = null;
        }
        return $resultado;

    }


    public function LoginCerrar (){

      unset($_SESSION['login']);
       
      session_destroy(); 
      
    }


           



}