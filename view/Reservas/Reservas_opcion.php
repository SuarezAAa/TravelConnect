<?php require_once('view/panel/header.php'); ?>

<main id="main-container">
<div class="content">
  <h2 class="content-heading"> Gestión de reservas</h2>
    <div class="row">
      <div class="col-xl-12">
                       
      <h3 class="block-title mb-3">Selecione el proceso de reserva a realizar</h3>
                                
    <div class="row gutters-tiny text-center" style="padding-left: 50px;padding-right: 50px;">
        <div class="col-6" style="    padding-left: 50px; padding-right: 50px;">
        
            <a class="block block-transparent text-center bg-earth" href="index.php?c=Reservas&a=new_reservas">
                <div class="block-content bg-black-op-5">
                    <p class="font-w600 text-white">Nuevo Cliente</p>
                </div>
                <div class="block-content">
                    <p>
                        <i class="si si-user-follow fa-4x text-white-op"></i>
                    </p>
                </div>
            </a>
        </div>

        <div class="col-6" style="padding-left: 50px;padding-right: 50px;">
            <a class="block block-transparent text-center bg-corporate" href="index.php?c=Reservas&a=existente_reservas">
                <div class="block-content bg-black-op-5">
                    <p class="font-w600 text-white">Cliente Existente</p>
                </div>
                <div class="block-content">
                    <p>
                        <i class="si si-user-following fa-4x text-white-op"></i>
                    </p>
                </div>
            </a>
        </div>
    </div>
               
        </div>  <!-- END  -->
    </div>
</div>

</div>
</main> 


<?php require_once('view/panel/footer.php'); ?>