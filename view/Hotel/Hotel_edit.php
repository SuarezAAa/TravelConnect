<?php require_once('view/panel/header.php'); ?>

  <main id="main-container">


<div class="content">
  <h2 class="content-heading"> Gestión de Inventarios</h2>
    <div class="row">
      <div class="col-xl-12">
          
        <div class="block block-themed">
            <div class="block-header bg-gd-flat">
                <h3 class="block-title">Actualizar de registro del hotel</h3>

                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                </div>
            </div>
                               
            <div class="block-content">
                <div class="row justify-content-center py-20">
                    <div class="col-xl-6">
                       <!--  <h2 class="block-title mb-3" style="font-weight:bold;">Registro del Cliente</h2> -->
                               
                                    <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/be_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <form class="js-validation-bootstrap" action="index.php?c=Hotel&a=actualizar_hotel" method="post">

                
    <!-- BOTON DE INVISIBLE -->
<input type="hidden" name="id" id="id" value="<?php echo $hotel_edit->hotel_id; ?>" >


                <div class="form-group row">
                   
                    <label class="col-lg-4 col-form-label" for="val-username">Nombre del Hotel <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nombre_hotel" name="nombre_hotel" value="<?php echo $hotel_edit->nombre_hotel; ?>" placeholder="Digite los nombres del hotel..">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-email">Valoración <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="valoracion" name="valoracion" value="<?php echo $hotel_edit->valoracion; ?>" placeholder="Digite la valoración..">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="direccion">Dirección <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $hotel_edit->direccion; ?>" placeholder="Digite la dirección..">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-number">Precio <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                        <input type="num" class="form-control" id="precio_hotel" name="precio_hotel" value="<?php echo $hotel_edit->precioNoche; ?>" placeholder="Ingrese el precio del hotel">
                    </div>
                </div>   
                                                                            
                <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="ciudad_destino">Destino (Ciudad) <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                    <select class="js-select2 form-control" id="ciudad_destino" name="ciudad_destino" style="width: 100%;">
                     
                    <option value="0">Elige una opción</option>
            <?php foreach ($ciudad as $ci) {
                $selected='';
                if($ci->ciudades_id == $hotel_edit->ciudadhotel){
                      $selected='selected="selected"';
                }
             ?>
            <option value="<?php echo $ci->ciudades_id; ?>" <?php echo $selected; ?>>
            <?php echo $ci->nombreCiudad;?></option>
            <?php }?>   
          </select>
                    </div>
                </div> 
                                        
                        
                                        
                <div class="form-group row">
                    <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-alt-primary">Actualizar</button>
                    </div>
                </div>
                                    
            </form>

            </div>
            </div>
            </div>
               
        </div>  <!-- END  -->
    </div>
</div>

</div>
</main> 


<?php require_once('view/panel/footer.php'); ?>