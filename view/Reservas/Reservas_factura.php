<?php require_once('view/panel/header.php'); ?>

  <main id="main-container">


<div class="content">
  <h2 class="content-heading"> Gestión de reservas</h2>
    <div class="row">
      <div class="col-xl-12">
                
        <h2 class=" text-center">Factura de reserva</h2>
                                
<form class="js-validation-bootstrap" action="#" method="post">
                                                                                 
    <div class="row row-deck gutters-tiny">
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Datos del cliente</h3>
                </div>

            <div class="block-content">
                <div class="font-size-lg text-black mb-5">
                <strong>Cédula: </strong><?php echo $view_cliente->cedula;?>
                <br>
                <strong>Nombres: </strong><?php echo $view_cliente->nombre;?> <br>
                <strong>Apellidos: </strong><?php echo $view_cliente->Apellido;?> <br>
                    <strong>Correo: </strong>          <?php echo $view_cliente->Correo;?><br>
                    <strong>Telefono: </strong>            <?php echo $view_cliente->telefono;?><br>
                    <strong>Direccion: </strong>             <?php echo $view_cliente->Direccion;?><br><br>                                    
                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Billing Address -->

                        <!-- Shipping Address -->
                        <div class="col-md-6">
                            <div class="block block-rounded">
                                <div class="block-header block-header-default">
                                    <h5 class="block-title fw-bold">Datos del Agente</h5>
                                </div>
                                <div class="block-content">
                                    <div class="font-size-lg text-black mb-5"><strong class="fw-bold">Nombre:</strong> <?php echo $_SESSION['agente'];?></div>
                                    <div class="font-size-lg text-black mb-5"><strong class="fw-bold">Apellido:</strong> <?php echo $_SESSION['apellido'];?></div>
                                    <div class="font-size-lg text-black mb-5"><strong class="fw-bold">Correo:</strong> <?php echo $_SESSION['user'];?></div>
                                   
                                    
                                </div>
                            </div>
                        </div>
            
              </div>

              <div class="row row-deck gutters-tiny">
                        <!-- Billing Address -->
                        <div class="col-md-12">
                            <div class="block block-rounded">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Detalles de la reserva</h3>
                                </div>
                              
                                <div class="block-content">
                               
                                    <div class="font-size-lg text-black mb-5"> 
                                    <strong>Hotel: </strong>    <?php echo $view_cliente->nombre_hotel;?> <br>
                                <strong>Valoración de estrellas: </strong>    <?php echo $view_cliente->valoracion;?> <br>
                                <strong>Ubicación: </strong>    <?php echo $view_cliente->direccion;?> <br>
                                <strong>Ciudad: </strong>    <?php echo $view_cliente->nombreCiudad;?> <br>          
                                       </div>
                                       <br><br>
                                    <address style="font-size:20px; font-weight:bold;">
                                        Precio ----------------------------$<?php echo $view_cliente->precioNoche;?><br>
                                        SubTotal -------------------------$<?php echo $view_cliente->precioNoche;?><br>
                                        Total  ----------------------------$<?php echo $view_cliente->precioNoche;?><br>
                          
                                    </address>
                                </div>
                            </div>
                        </div>
                        <!-- END Billing Address -->
                 
            
              </div>
            
            
             

                 
              
        <!--         <div class="col-xl-6">
                        <button type="submit" class="btn btn-square btn-info min-width-125 mb-10">Generar</button>
                    </div> -->
                 

            </form>               
          <!-- END Form -->
                            
               
        </div>  <!-- END  -->
    </div>
</div>

</div>
</main> 


<?php require_once('view/panel/footer.php'); ?>