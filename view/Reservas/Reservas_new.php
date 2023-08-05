<?php require_once('view/panel/header.php'); ?>

  <main id="main-container">
<div class="content">
  <h2 class="content-heading"> Gestión de reservas</h2>
    <div class="row">
      <div class="col-xl-12">

      <a  style="color:gray;" href="javascript:history.back()">
            <div class="btn btn-lg btn-circle btn-alt-secondary mr-10 mb-10">
            <i class="fa fa-reply"></i>
            </div> 
            </a> Volver 
          
        <div class="block block-themed">
            <div class="block-header bg-earth">
                <h3 class="block-title">Registro del Cliente</h3>
            </div>
                               
        <div class="block-content">
                <div class="row justify-content-center py-20">
                    <div class="col-xl-6">
                                                          <!-- index.php?c=Clientes&a=new_cliente -->                       
            <form class="js-validation-bootstrap" action="index.php?c=Clientes&a=new_cliente" method="post">
       

                <div class="row">
                            <div class="col-6">
                                 <div class="form-group">                                  
                                    <div class="form-material floating">
                                        <input class="form-control" type="text" id="nombre" name="nombre">
                                        <label for="wizard-validation-material-firstname">Nombres</label>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="col-6">
                                <div class="form-group"> 
                                    <div class="form-material floating">
                                        <input class="form-control" type="text" id="Apellido" name="Apellido">
                                        <label for="wizard-validation-material-lastname">Apellidos</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">               
                                <div class="col-6">
                                            <div class="form-group">
                                                <div class="form-material floating">
                                                    <input class="form-control" type="email" id="Correo" name="Correo">
                                                    <label for="wizard-validation-material-email">Correo</label>
                                                </div>
                                            </div>
                                </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                                <div class="form-material floating">
                                                    <input class="form-control" type="text" id="cedula" name="cedula">
                                                    <label for="wizard-validation-material-number">Cédula</label>
                                                </div>
                                            </div>
                                            </div>
                        </div>

                        <div class="row">
                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="form-material floating">
                                                    <input class="form-control" type="text" id="telfono" name="telefono">
                                                    <label for="wizard-validation-material-numberT">Telefono</label>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-group">
                                                <div class="form-material floating">
                                                    <select class="form-control" id="Ciudad_FK" name="Ciudad_FK" size="1">
                                                        <option> Seleccione una opcion</option><!-- Empty value for demostrating material select box -->
                                                        <option value="1">Guayaquil</option>
                                                        <option value="2">Quito</option>
                                                        <option value="3">Cuenca</option>
            
                                                    </select>
                                                    <label for="wizard-validation-material-skills">Destino</label>
                                                </div>
                                            </div>
                        </div>                    
                        </div>
                                            <div class="form-group">
                                                <div class="form-material floating">
                                                    <input class="form-control" type="text" id="Direccion" name="Direccion">
                                                    <label for="wizard-validation-material-location">Dirección</label>
                                                </div>
                                            </div>

                                            <!-- <div class="form-group ">
                                            <div class="form-material floating">
                                                <input class="form-control" type="date" id="wizard-validation-material-location" name="wizard-validation-material-location">
                                                <label for="wizard-validation-material-location">Fecha de Creación</label>
                    
                                            </div>                                           
                                             </div>  -->
                                            
<br>
                <div class="form-group row">
                    <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-alt-primary">Continuar</button>
                    </div>
                </div>                                 
            </form> 


        
                

                  
                                <!-- END Form -->
                            
               
        </div>  <!-- END  -->
    </div>
</div>

</div>
</main> 


<?php require_once('view/panel/footer.php'); ?>