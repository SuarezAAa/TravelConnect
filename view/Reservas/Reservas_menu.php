<?php require_once('view/panel/header.php'); ?>

 <main id="main-container">
               
 <div class="row">
      <!-- Page Content -->
 <div class="content">

    <!-- Simple User Widgets -->
    <h2 class="content-heading">Tipo de Servicios <small>Seleccionar</small></h2>
    <a  style="color:gray;" href="javascript:history.back()">
            <div class="btn btn-lg btn-circle btn-alt-secondary mr-10 mb-10">
            <i class="fa fa-reply"></i>
            </div> 
            </a> Volver 
            <br>
                    <div class="row">
                    <!-- <div class="row invisible" data-toggle="appear"> -->
                        
                        <!-- Row #4 -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-link-pop bg-success text-center" href="index.php?c=Reservas&a=servicios_reservas_hotel&idC=<?php echo $idC; ?>">
                                <div class="block-content block-content-full">
                                    <img class="img-avatar img-avatar-thumb" src="public/assets/img/h.png" alt="">
                                </div>
                                <div class="block-content block-content-full bg-black-op-5">
                                    <div class="font-w600 text-white mb-5">Servicio</div>
                                    <div class="font-size-sm text-white-op">Hotel</div>
                                </div>
                                <div class="block-content block-content-full block-content-sm">
                                    <span class="font-w600 font-size-sm text-info-light">De click para seleccionar</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-link-pop bg-elegance text-center" href="index.php?c=Reservas&a=servicios_reservas_vuelo&idC=<?php echo $idC; ?>">
                                <div class="block-content block-content-full">
                                    <img class="img-avatar img-avatar-thumb" src="public/assets/img/vue.png" alt="">
                                   
                                </div>
                                <div class="block-content block-content-full bg-black-op-5">
                                    <div class="font-w600 text-white mb-5">Servicio</div>
                                    <div class="font-size-sm text-white-op">Vuelo</div>
                                </div>
                                <div class="block-content block-content-full block-content-sm">
                                    <span class="font-w600 font-size-sm text-success-light">De click para seleccionar</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-link-pop bg-corporate text-center" href="index.php?c=Reservas&a=servicios_reservas_paquete&idC=<?php echo $idC; ?>">
                                <div class="block-content block-content-full">
                                    <img class="img-avatar img-avatar-thumb" src="public/assets/img/paq.png" alt="">
                                </div>
                                <div class="block-content block-content-full bg-black-op-5">
                                    <div class="font-w600 text-white mb-5">Servicio</div>
                                    <div class="font-size-sm text-white-op">Paquetes</div>
                                </div>
                                <div class="block-content block-content-full block-content-sm">
                                    <span class="font-w600 font-size-sm text-warning-light">De click para seleccionar</span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-8">
                    <a href="index.php?c=Reservas&a=view_factura_reservas" class="btn btn-secondary min-width-125">
                        <i class="si si-doc 2x">

                        </i> Generar Factura</a>
                    </div>
                </div>           
             
                        <!-- END Row #1 -->
                    </div>                               
                   
                </div>
                <!-- END Page Content -->
            </main>

<?php require_once('view/panel/footer.php'); ?>