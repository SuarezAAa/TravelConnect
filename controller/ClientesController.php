<?php
    //session_start();
    require_once 'model/ClientesModel.php';
    require_once 'model/Dto/cliente.php';
    require_once 'model/ReservasModel.php';
    require_once 'model/Dto/reserva.php';


class ClientesController
{
    private $model;
    private $modelR;
    public function __construct()

     {
         $this->model = new ClientesModel(); 
         $this->modelR = new ReservasModel(); 
    }

    public function view_clientes()
    {
        require_once 'view/Clientes/Clientes.php';
    }


public function new_cliente(){
    $cliente_DAO = new cliente();
    $cliente_DAO->setNombre($_POST['nombre']);
    $cliente_DAO->setApellido($_POST['Apellido']);
    $cliente_DAO->setCorreo($_POST['Correo']);
    $cliente_DAO->setCedula($_POST['cedula']);
    $cliente_DAO->setTelefono($_POST['telefono']);
    $cliente_DAO->setDireccion($_POST['Direccion']);
    $cliente_DAO->setCiudadFk($_POST['Ciudad_FK']);

    $exito = $this->model->insert_cliente($cliente_DAO);
    if (!$exito) {
        $msj = "Ingrese los datos correctamente";
        $icon = 'error';
       // header('Location:index.php?c=Reservas&a=view_servicios_reservas');
       
      }

      else{
        $id=$this->model->get_cliente_id_by_cedula($_POST['cedula']);
        $msj = 'Guardado exitosamente';
        $icon ='success';
        //crear reserva 
     
        header('Location:index.php?c=Reservas&a=view_servicios_reservas&idC='.$id);
      }

      $_SESSION['m_crear_usuario'] = $msj;
      $_SESSION['m_icon_interesado'] = $icon;
      //var_dump($msj);
      

    //require_once 'view/Reservas/Reservas_servicios.php';
}



    public function Lista_cliente(){
    
        $datos=$this->model->get_cliente();
    
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["Apellido"];
            $sub_array[] = $row["Correo"];
            $sub_array[] = $row["cedula"];
            $sub_array[] = $row["Direccion"];
            $sub_array[] = $row["telefono"];
            $sub_array[] = $row["nombreCiudad"];
           
           
           $data[]=$sub_array; 
           
         
        }
        $results = array(
            "sEcho"=>1,
            "iTotalRecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data);
           /*  var_dump($results); */
        echo $json = json_encode($results); 
    
    }
    
    
}