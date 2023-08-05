<?php require_once('view/panel/header.php'); ?>

  <main id="main-container">


<div class="content">
  <h2 class="content-heading"> Gestión de Inventarios</h2>
    <div class="row">
      <div class="col-xl-12">
          
        <div class="block block-themed">
            <div class="block-header bg-pulse-light">
                <h3 class="block-title">Actualizar registro del vuelo</h3>

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
            <form class="js-validation-bootstrap" action="index.php?c=Vuelo&a=actualizar_vuelo" method="post">
  <!-- BOTON DE INVISIBLE -->
  <input type="hidden" name="id" id="id" value="<?php echo $vuelo_edit->vuelo_id; ?>" >
                <div class="form-group row">
                   
                    <label class="col-lg-4 col-form-label" for="origen">Origen <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                    <select class="js-select2 form-control" id="origen" name="origen" style="width: 100%;">
                     
                     <option value="0">Elige una opción</option>
             <?php foreach ($ciudad as $ci) {
                 $selected='';
                 if($ci->ciudades_id == $vuelo_edit->origen){
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
                <label class="col-lg-4 col-form-label" for="aerolinea">Aerolinea<span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                    <select class="js-select2 form-control" id="aerolinea" name="aerolinea" style="width: 100%;">
                     
                     <option value="0">Elige una opción</option>
             <?php foreach ($aerolinea as $ae) {
                 $selected='';
                 if($ae->aerolinea_id == $vuelo_edit->aerolinea_fk){
                       $selected='selected="selected"';
                 }
              ?>
             <option value="<?php echo $ae->aerolinea_id; ?>" <?php echo $selected; ?>>
             <?php echo $ae->nombre;?></option>
             <?php }?>   
           </select>
                    </div>
                </div> 
                         
                
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="fecha_p">Fecha de partida <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                        <input type="date" class="form-control" id="fecha_p" name="fecha_p" value="<?php echo $vuelo_edit->fecha; ?>" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="precio_vuelo">Precio <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                        <input type="num" class="form-control" id="precio_vuelo" name="precio_vuelo" value="<?php echo $vuelo_edit->precio; ?>"  placeholder="Ingrese el precio del vuelo">
                    </div>
                </div>   
                                                                            
                <div class="form-group row">
                <label class="col-lg-4 col-form-label" for="destino_vuelo">Destino (Ciudad) <span class="text-danger">*</span></label>
                    <div class="col-lg-8">
                    <select class="js-select2 form-control" id="destino_vuelo" name="destino_vuelo" style="width: 100%;">
                     
                    <option value="0">Elige una opción</option>
            <?php foreach ($ciudad as $ci) {
                $selected='';
                if($ci->ciudades_id == $vuelo_edit->destino){
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