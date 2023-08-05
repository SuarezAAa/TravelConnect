<?php
    session_start();
require_once 'model/HotelModel.php';
require_once 'model/Dto/hotel.php';
require_once 'model/ConsultaSelectModel.php';

class HotelController
{
    private $model;

    public function __construct()

     {
         $this->model = new HotelModel(); 
    }
      public function new_hoteles()
    {
      
        //comunicarse con el modelo
        $modeloTipoCiudad = new ConsultaSelectModel();
        $ciudad = $modeloTipoCiudad->consultarCiudad(); 
        require_once 'view/Hotel/Hotel_new.php';
    }

    public function register_hotel() {
        $hotel_model = new hotel(); // llamar a las entidades de la clase usuarios
        // lectura de parametros
        $hotel_model->setnombre_hotel(htmlspecialchars($_POST['nombre_hotel']));
        $hotel_model->setvaloracion(htmlentities($_POST['valoracion']));
        $hotel_model->setdireccion(htmlspecialchars($_POST['direccion']));
        $hotel_model->setprecioNoche(htmlspecialchars($_POST['precio_hotel']));
        $hotel_model->setciudadhotel(htmlentities($_POST['ciudad_destino']));
        
        //llamar al modelo
        $exito = $this->model->registrar($hotel_model);
        
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
          header('Location:index.php?c=Hotel&a=view_hoteles');
    }
    
    public function view_Editar(){

        $this->user = $_GET['hotel_edit'];  
    
    
        $hotel_edit = $this->model->selectOne( $this->user);
       /*  $resultado = $this->model->user_asesoria($this->user);  */
    
         //comunicarse con el modelo
         $modeloTipoCiudad = new ConsultaSelectModel();
        $ciudad = $modeloTipoCiudad->consultarCiudad(); 
    
    
         require_once 'view/Hotel/Hotel_edit.php'; 
    
    }

    public function actualizar_hotel() {
        $hotel_model = new hotel(); // llamar a las entidades de la clase usuarios
        // lectura de parametros
        $hotel_model->sethotel_id(htmlspecialchars($_POST['id']));
        $hotel_model->setnombre_hotel(htmlspecialchars($_POST['nombre_hotel']));
        $hotel_model->setvaloracion(htmlentities($_POST['valoracion']));
        $hotel_model->setdireccion(htmlspecialchars($_POST['direccion']));
        $hotel_model->setprecioNoche(htmlspecialchars($_POST['precio_hotel']));
        $hotel_model->setciudadhotel(htmlentities($_POST['ciudad_destino']));
        
        //llamar al modelo
        $exito = $this->model->update_hotel($hotel_model);
        
        if (!$exito) {
          $msj = "No se ha actualizado correctamente";
          $icon = 'error';
        }

        else{
          $msj = 'Actualizado exitosamente';
          $icon ='success';
              
        }

        $_SESSION['m_crear_usuario'] = $msj;
        $_SESSION['m_icon_interesado'] = $icon;
          header('Location:index.php?c=Hotel&a=view_hoteles');
    }








    public function view_hoteles()
    {
        require_once 'view/Hotel/Hotel_list.php';
    }



    public function Lista_hoteles(){
    
        $datos=$this->model->get_hotel();
    
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["nombre_hotel"];
            $sub_array[] = $row["valoracion"];
            $sub_array[] = $row["direccion"];
            $sub_array[] = $row["precioNoche"];
            $sub_array[] = $row["nombreCiudad"];
            $sub_array[] = 
            '<div class="btn-group btn-group-sm">
                <a class="btn btn-alt-primary" 
                href="index.php?c=Hotel&a=view_Editar&hotel_edit='.$row['hotel_id'].'">
                    <i class="fa fa-edit mr-5"></i>&nbsp;Editar
                </a>
                <a class="btn btn-alt-danger mr-5 mb-5 eliminar" 
                href="index.php?c=Hotel&a=Eliminar_hotel&id='.$row['hotel_id'].'" data-id="'.$row['hotel_id'].'">
                    <i class="fa fa-remove mr-5"></i>&nbsp;Borrar
                </a> 
            </div>';
           
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



    public function Lista_hoteles_Compra(){
    
        $datos=$this->model->get_hotel();
    
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["nombre_hotel"];
            $sub_array[] = $row["valoracion"];
            $sub_array[] = $row["direccion"];
            $sub_array[] = $row["precioNoche"];
            $sub_array[] = $row["nombreCiudad"];
            $sub_array[] = 
            '<div class="btn-group btn-group-sm">
                <a class="btn btn-alt-primary" 
                href="index.php?c=Reservas&a=new_reservaH&hid='.$row['hotel_id'].'">
                
                 &nbsp;Resevar
                </a>

               
                
            </div>';
           
           $data[]=$sub_array; 
           
         
        }
        $results = array(
            "sEcho"=>1,
            "iTotalRecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data);
           
        echo $json = json_encode($results); 
    
     
    }

















    public function Eliminar_hotel(){
        $id = $_GET['id'];
    
        // Eliminar el registro de la base de datos
        $resultado = $this->model->delete_hotel($id);
    
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