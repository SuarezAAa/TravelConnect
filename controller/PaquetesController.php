<?php
    session_start();
require_once 'model/PaquetesModel.php';
require_once 'model/Dto/paquete.php';
require_once 'model/ConsultaSelectModel.php';

class PaquetesController
{
    private $model;

    public function __construct()

     {
        $this->model = new PaquetesModel(); 
    }
      public function new_paquetes()
    {
        //comunicarse con el modelo
        $modeloTipoHotel = new ConsultaSelectModel();
        $hotel = $modeloTipoHotel->consultarHotel(); 
        //comunicarse con el modelo
        $modeloTipoVuelo = new ConsultaSelectModel();
        $vuelo = $modeloTipoVuelo->consultarVuelo(); 

        require_once 'view/Paquetes/Paquetes_new.php';
    }

    public function view_paquetes()
    {
        require_once 'view/Paquetes/Paquetes_list.php';
    }

    public function Lista_paquetes(){
    
        $datos=$this->model->get_paquetes();
    
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["nombreP"];
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["nombre_hotel"];
            $sub_array[] = $row["precio"];
            $sub_array[] = 
            '<div class="btn-group btn-group-sm">
                
                <a class="btn btn-alt-danger mr-5 mb-5 eliminar" 
                href="index.php?c=Paquetes&a=Eliminar_paquete&id='.$row['paquete_id'].'" data-id="'.$row['paquete_id'].'">
                    <i class="fa fa-remove mr-5"></i>&nbsp;Borrar
                </a> 
            </div>';
           /* <a class="btn btn-alt-primary" 
                href="index.php?c=Paquetes&a=view_Editar&paquete_edit='.$row['paquete_id'].'">
                    <i class="fa fa-edit mr-5"></i>&nbsp;Editar
                </a> */
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


    public function Lista_paquetesC(){
    
        $datos=$this->model->get_paquetes();
    
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["nombreP"];
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["nombre_hotel"];
            $sub_array[] = $row["precio"];
            $sub_array[] = 
            '<div class="btn-group btn-group-sm">
                
            <a class="btn btn-alt-primary" 
                href="index.php?c=Reservas&a=new_reservaP&idP='.$row['paquete_id'].'">
                    &nbsp;Reservar
                </a> 
            </div>';
           /* <a class="btn btn-alt-primary" 
                href="index.php?c=Paquetes&a=view_Editar&paquete_edit='.$row['paquete_id'].'">
                    <i class="fa fa-edit mr-5"></i>&nbsp;Editar
                </a> */
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




    public function register_paquete() {
        $paquete_model = new paquete(); // llamar a las entidades de la clase usuarios
        // lectura de parametros
        $paquete_model->setnombre(htmlspecialchars($_POST['nombre']));
        $paquete_model->setPhotel_fk(htmlentities($_POST['vuelo']));
        $paquete_model->setPvuelo_fk(htmlspecialchars($_POST['hotel']));
        $paquete_model->setprecio(htmlspecialchars($_POST['precio']));
       
        
        //llamar al modelo
        $exito = $this->model->registrar($paquete_model);
        
        if (!$exito) {
          $msj = "Hotel ha sido registrado, número de cédula existente";
          $icon = 'error';
        }

        else{
          $msj = 'Guardado exitosamente';
          $icon ='success';
              
        }

        $_SESSION['m_crear_usuario'] = $msj;
        $_SESSION['m_icon_interesado'] = $icon;
          header('Location:index.php?c=Paquetes&a=view_paquetes');
    }

    public function view_Editar(){

        $this->user = $_GET['paquete_edit'];  
    
    
        $paquete_edit = $this->model->selectOne( $this->user);
       /*  $resultado = $this->model->user_asesoria($this->user);  */
    //comunicarse con el modelo
    $modeloTipoVuelo = new ConsultaSelectModel();
    $vuelo = $modeloTipoVuelo->consultarVuelo(); 

         //comunicarse con el modelo
         $modeloTipoHotel = new ConsultaSelectModel();
         $hotel = $modeloTipoHotel->consultarHotel(); 
         
    
    
         require_once 'view/Paquetes/Paquetes_edit.php'; 
    
    }

    public function actualizar_paquete() {
        $paquete_model = new paquete(); // llamar a las entidades de la clase usuarios
        // lectura de parametros
        $paquete_model->setpaquete_id(htmlspecialchars($_POST['id']));
        $paquete_model->setnombre(htmlspecialchars($_POST['nombre']));
        $paquete_model->setPhotel_fk(htmlentities($_POST['vuelo']));
        $paquete_model->setPvuelo_fk(htmlspecialchars($_POST['hotel']));
        $paquete_model->setprecio(htmlspecialchars($_POST['precio']));
       
        
        //llamar al modelo
        $exito = $this->model->update_paquete($paquete_model);
        
        if (!$exito) {
          $msj = "Hotel ha sido registrado, número de cédula existente";
          $icon = 'error';
        }

        else{
          $msj = 'Guardado exitosamente';
          $icon ='success';
              
        }

        $_SESSION['m_crear_usuario'] = $msj;
        $_SESSION['m_icon_interesado'] = $icon;
          header('Location:index.php?c=Paquetes&a=view_paquetes');
    }

    public function Eliminar_paquete(){
        $id = $_GET['id'];
    
        // Eliminar el registro de la base de datos
        $resultado = $this->model->delete_paquete($id);
    
        // Verificar si la eliminación fue exitosa
        if ($resultado) {
            // La eliminación fue exitosa
            $response = array('exito' => true);
        } else {
            // La eliminación no fue exitosa
            $response = array('exito' => false);
        }
    
        // Devolver la respuesta en formato JSON
        echo json_encode($response);
    
    } 
    
    
}