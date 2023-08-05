<?php
    session_start();
require_once 'model/VueloModel.php';
require_once 'model/Dto/vuelo.php';
require_once 'model/ConsultaSelectModel.php';

class VueloController
{
    private $model;

    public function __construct()

     {
        $this->model = new VueloModel();
    }
      public function new_vuelos()
    {
        $modeloAerolinea = new ConsultaSelectModel();
        $aerolinea = $modeloAerolinea->consultarAerolinea(); 

        $modeloTipoCiudad = new ConsultaSelectModel();
        $ciudad = $modeloTipoCiudad->consultarCiudad(); 
        require_once 'view/Vuelo/Vuelo_new.php';
    }

    public function new_aerolinea()
    {
        require_once 'view/Vuelo/aerolinea_new.php';
    }
    public function view_aerolinea()
    {
        require_once 'view/Vuelo/aerolinea_list.php';
    }

    public function Lista_aerolinea(){
    
        $datos=$this->model->get_aerolinea();
    
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["aerolinea_id"];
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["aeropuerto"];
           /*  $sub_array[] = 
            '<div class="btn-group btn-group-sm">
                <a class="btn btn-alt-primary" 
                href="index.php?c=Vuelo&a=view_Editar&aero_edit='.$row['aerolinea_id'].'">
                    <i class="fa fa-edit mr-5"></i>&nbsp;Editar
                </a>
                <a class="btn btn-alt-danger mr-5 mb-5 eliminar" 
                href="index.php?c=Vuelo&a=Eliminar_aero&id='.$row['aerolinea_id'].'" data-id="'.$row['aerolinea_id'].'">
                    <i class="fa fa-remove mr-5"></i>&nbsp;Borrar
                </a> 
            </div>';
             */
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

    public function view_vuelos()
    {
        require_once 'view/Vuelo/Vuelo_list.php';
    }
    public function Lista_vuelos(){
    
        $datos=$this->model->get_vuelo();
    
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["origen"];
            $sub_array[] = $row["nombreCiudad"];
            $sub_array[] = $row["precio"];
            $sub_array[] = $row["fecha"];
            $sub_array[] = 
            '<div class="btn-group btn-group-sm">
                <a class="btn btn-alt-primary" 
                href="index.php?c=Vuelo&a=view_Editar&vuelo_edit='.$row['vuelo_id'].'">
                    <i class="fa fa-edit mr-5"></i>&nbsp;Editar
                </a>
                <a class="btn btn-alt-danger mr-5 mb-5 eliminar" 
                href="index.php?c=Vuelo&a=Eliminar_vuelo&id='.$row['vuelo_id'].'" data-id="'.$row['vuelo_id'].'">
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


    public function Lista_vuelosC(){
    
        $datos=$this->model->get_vuelo();
    
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["origen"];
            $sub_array[] = $row["nombreCiudad"];
            $sub_array[] = $row["precio"];
            $sub_array[] = $row["fecha"];
            $sub_array[] = 
            '<div class="btn-group btn-group-sm">
                <a class="btn btn-alt-primary" 
                href="index.php?c=Reservas&a=new_reservaV&idv='.$row['vuelo_id'].'">
                    &nbsp;Reservar
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
    public function register_vuelo() {
        $vuelo_model = new vuelo(); // llamar a las entidades de la clase usuarios
        // lectura de parametros
        $vuelo_model->setorigen(htmlspecialchars($_POST['origen']));
        $vuelo_model->setaerolinea_fk(htmlentities($_POST['aerolinea']));
        $vuelo_model->setfecha(htmlspecialchars($_POST['fecha_p']));
        $vuelo_model->setprecio(htmlspecialchars($_POST['precio_vuelo']));
        $vuelo_model->setdestino(htmlentities($_POST['destino_vuelo']));
        
        //llamar al modelo
        $exito = $this->model->registrar($vuelo_model);
        
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
          header('Location:index.php?c=Vuelo&a=view_vuelos');
    }

    public function view_Editar(){

        $this->user = $_GET['vuelo_edit'];  
    
    
        $vuelo_edit = $this->model->selectOne( $this->user);
    
         //comunicarse con el modelo
         $modeloAerolinea = new ConsultaSelectModel();
         $aerolinea = $modeloAerolinea->consultarAerolinea(); 

         $modeloTipoCiudad = new ConsultaSelectModel();
        $ciudad = $modeloTipoCiudad->consultarCiudad(); 
    
    
         require_once 'view/Vuelo/Vuelo_edit.php'; 
    
    }

    public function actualizar_vuelo() {
        $vuelo_model = new vuelo(); // llamar a las entidades de la clase usuarios
        // lectura de parametros
        $vuelo_model->setvuelo_id(htmlspecialchars($_POST['id']));
        $vuelo_model->setorigen(htmlspecialchars($_POST['origen']));
        $vuelo_model->setaerolinea_fk(htmlentities($_POST['aerolinea']));
        $vuelo_model->setfecha(htmlspecialchars($_POST['fecha_p']));
        $vuelo_model->setprecio(htmlspecialchars($_POST['precio_vuelo']));
        $vuelo_model->setdestino(htmlentities($_POST['destino_vuelo']));
        
        //llamar al modelo
        $exito = $this->model->update_vuelo($vuelo_model);
        
        if (!$exito) {
          $msj = "no se pudo actualizar";
          $icon = 'error';
        }

        else{
          $msj = 'Actualizacion exitosamente';
          $icon ='success';
              
        }

        $_SESSION['m_crear_usuario'] = $msj;
        $_SESSION['m_icon_interesado'] = $icon;
          header('Location:index.php?c=Vuelo&a=view_vuelos');
    }

    public function Eliminar_vuelo(){
        $id = $_GET['id'];
    
        // Eliminar el registro de la base de datos
        $resultado = $this->model->delete_vuelo($id);
    
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