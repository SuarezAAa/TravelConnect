<?php
    session_start();
require_once 'model/ReservasModel.php'; 
require_once 'controller/ClientesController.php';
require_once 'model/Dto/reservashotel.php';
require_once 'model/Dto/reservavuelo.php';
require_once 'model/Dto/reservapaquete.php';
class ReservasController
{
    private $model;

   public $idC;
    public function __construct()

     {
         $this->model = new ReservasModel(); 
    }

    public function opcion_reservas()
    {
        require_once 'view/Reservas/Reservas_opcion.php'; 

    }
    public function existente_reservas()
    {
         $cModel = new ClientesModel();
         $cliente = $cModel->get_cliente();
        require_once 'view/Reservas/Reservas_cliente.php'; 

    }

      public function new_reservas()
    {
        
        require_once 'view/Reservas/Reservas_new.php'; 

    }

    public function view_servicios_reservas()
    {
        $idC;
        if(isset($_POST['cliente_existente']) && !empty($_POST['cliente_existente'])){
            $_SESSION['idCliente'] = $_POST['cliente_existente'] ;
               $idC=$_POST['cliente_existente'] ;
        }else{
            if( isset($_GET['idC']) && !empty($_GET['idC'])){
               $_SESSION['idCliente'] = $_GET['idC'] ;
               $idC=$_GET['idC'] ;
               
            }else{
              
                
            }
            
        }

        require_once 'view/Reservas/Reservas_menu.php';
          
    }


    public function new_reservaH()
    {
        $reservahotel = new reservashotel();
        $valoridc = $_SESSION['idCliente'];
        $reservahotel ->setClienteFK($valoridc); 
        $reservahotel ->setRHhotelFk($_GET['hid']);// ID hotel */
         
        $exito = $this->model->insert_reservaH($reservahotel);
        $view_cliente = $this->model->selectOne($valoridc); //ID para el cliente y consultar para factura

    if (!$exito) {
        $msj = "Ingrese los datos correctamente";
        $icon = 'error';

         
      }

      else{
       
        $msj = 'Guardado exitosamente';
        $icon ='success';
         require_once 'view/Reservas/Reservas_factura.php';
      }

      $_SESSION['m_crear_usuario'] = $msj;
      $_SESSION['m_icon_interesado'] = $icon;
      
      

    }

    public function new_reservaV()
    {
        $reservavuelo = new reservavuelo();
        $valoridc = $_SESSION['idCliente'];
        $reservavuelo ->setClienteFK($valoridc); 
        $reservavuelo ->setVueloFK($_GET['idv']);// ID vuelo */
         
        $exito = $this->model->insert_reservaV($reservavuelo);
        $view_cliente_vuelo = $this->model->selectOneVuelo($valoridc); //ID para el cliente y consultar para factura
       
    if (!$exito) {
        $msj = "Ingrese los datos correctamente";
        $icon = 'error';
      
      }

      else{
       
        $msj = 'Guardado exitosamente';
        $icon ='success';
        
       // echo "guardo";
       // var_dump( $reservavuelo);
        require_once 'view/Reservas/Reservas_facturaVuelo.php';
      }

      $_SESSION['m_crear_usuario'] = $msj;
      $_SESSION['m_icon_interesado'] = $icon;
      
      

    }

    public function new_reservaP()  
    {$valoridc = $_SESSION['idCliente'];
      
        $reservap = new reservapaquete();
        $reservap->setclienteFK($valoridc); 
        $reservap->setPaqueteFK($_GET['idP']);// ID paquete 
        $exito = $this->model->insert_reservaP($reservap);
        
        $view_cliente_paquete = $this->model->selectOnePaquete($valoridc); //ID para el cliente y consultar para factura
       
        //Crear objeto reserva hotel  
        //cambiar directamente a factura wuw
        

        $exito = $this->model->insert_reservaV($reservap);
       
       
    if (!$exito) {
        $msj = "Ingrese los datos correctamente";
        $icon = 'error';
      
      }

      else{
       
        $msj = 'Guardado exitosamente';
        $icon ='success';
       require_once 'view/Reservas/Reservas_facturaPaquete.php';
      }

      $_SESSION['m_crear_usuario'] = $msj;
      $_SESSION['m_icon_interesado'] = $icon;
      

    }



    

    public function servicios_reservas_hotel()//AKI
    {//Mostrar todos los Servicios disponibles 

        $idC=$_GET['idC'] ;

        require_once 'view/Hotel/Hotel_listC.php';


          
    }
    public function servicios_reservas_vuelo()
    {//Mostrar todos los Servicios disponibles 
        $idC=$_GET['idC'] ;
        require_once 'view/Vuelo/Vuelo_listC.php';
          
    }

    public function servicios_reservas_paquete()
    {//Mostrar todos los Servicios disponibles 
        $idC=$_GET['idC'] ;
        require_once 'view/Paquetes/Paquete_listC.php';
          
    }


     public function view_reservas()
    {
        require_once 'view/Reservas/Reservas_list.php';
    }



    public function Lista_reservas_hotel(){
    
        $datos=$this->model->get_reservas_hotel();
    
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["Apellido"];
            $sub_array[] = $row["cedula"];  
            $sub_array[] = $row["nombre_hotel"];
            $sub_array[] = $row["valoracion"];
            $sub_array[] = $row["direccion"];
            $sub_array[] = $row["precioNoche"];
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

    public function Lista_reservas_vuelo(){
    
        $datos=$this->model->get_reservas_vuelo();
    
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["nCliente"];
            $sub_array[] = $row["Apellido"];
            $sub_array[] = $row["cedula"];  
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["vOrigen"];
            $sub_array[] = $row["nombreCiudad"];
            $sub_array[] = $row["precio"];
            $sub_array[] = $row["fecha"];
           
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

    public function Lista_reservas_paquete(){
    
        $datos=$this->model->get_reservas_paquete();
    
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["nCliente"];
            $sub_array[] = $row["Apellido"];
            $sub_array[] = $row["cedula"];  
            $sub_array[] = $row["nombreP"];
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["nombre_hotel"];
            $sub_array[] = $row["precio"];
           
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






    public function view_factura_reservas()
    {
        require_once 'view/Reservas/Reservas_factura.php';
    }
    
    
}