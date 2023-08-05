<?php require_once('view/panel/header.php'); ?>

  <main id="main-container">


<div class="content">
  <h2 class="content-heading"> Gestión de Inventarios</h2>
    <div class="row">
      <div class="col-xl-12">
          
        <div class="block block-themed">
            <div class="block-header bg-pulse-light">
                <h3 class="block-title">Actualizar de registro del paquetes</h3>

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
            <form class="js-validation-bootstrap" action="index.php?c=Paquetes&a=actualizar_paquete" method="post">
 <!-- BOTON DE INVISIBLE -->
 <input type="hidden" name="id" id="id" value="<?php echo $paquete_edit->paquete_id; ?>" >
                <div class="form-group row">
                   
                    <label class="col-lg-4 col-form-label" for="val-username">Nombre <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $paquete_edit->nombreP; ?>" placeholder="Digite el detalle..">
                    </div>
                </div>

                <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="vuelo">Vuelo<span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                    <select class="js-select2 form-control" id="vuelo" name="vuelo" style="width: 100%;" >
                    <option value="0">Elige una opción</option>
            <?php foreach ($vuelo as $vu) {
                $selected='';
                 if($vu->vuelo_id == $paquete_edit->Pvuelo_fk){
                    $selected='selected="selected"';
              }
             ?>
            <option value="<?php echo $vu->vuelo_id; ?>" <?php echo $selected; ?>><?php echo $vu->nombre;?></option>
            <?php }?>   
          </select>
                    </div>
                </div> 
                  
                <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="hotel">Hotel<span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                    <select class="js-select2 form-control" id="hotel" name="hotel" style="width: 100%;" >
                    <option value="0">Elige una opción</option>
            <?php foreach ($hotel as $hot) {
                $selected='';
                if($hot->hotel_id == $paquete_edit->Photel_fk){
                    $selected='selected="selected"';
              }
             ?>
            <option value="<?php echo $hot->hotel_id; ?>" <?php echo $selected; ?>>
            <?php echo $hot->nombre_hotel;?></option>
            <?php }?>   
          </select>
                    </div>
                </div> 
                
             

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="precio">Precio <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                        <input type="num" class="form-control" id="precio" name="precio" value="<?php echo $paquete_edit->precio; ?>" placeholder="Ingrese el precio del paquete..">
                    </div>
                </div>   
                                                                            
                
                                        
                        
                                        
                <div class="form-group row">
                    <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-alt-primary">Guardar</button>
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