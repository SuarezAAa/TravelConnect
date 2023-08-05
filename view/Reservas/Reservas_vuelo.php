<?php require_once('view/panel/header.php'); ?>

  <main id="main-container">



<div class="content">
<a  style="color:gray;" href="javascript:history.back()">
            <div class="btn btn-lg btn-circle btn-alt-secondary mr-10 mb-10">
            <i class="fa fa-reply"></i>
            </div> 
            </a> Volver 

  <h2 class="content-heading"> Selección de tipo de servicio</h2>
                            
           
    <div class="row">
      <div class="col-xl-12">
                               
            <form class="js-validation-bootstrap" action="index.php?c=Reservas&a=view_detalles_reservas"method="post">

                                                                                                                 
<br>
            <div class="form-group">
           
<!-- vuelos -->
<div class="form-group">
            <div class="col-xl-12">
            <h4 class="text-center mt-2"> <small>Servicios de Vuelos Disponebles</small></h4>
        <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                                <thead>
                                    <tr>
                                      
                                        <th class="text-center">Aerolinea</th>
                                        <th class="text-center">Fecha de partida</th>
                                        <th class="">Orgien</th>
                                        <th class="">Destino</th>
                                        <th class="text-center">Precio</th>
                                        <th class="text-center" style="width: 15%;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    
                                        <td class="text-center">1</td>
                                        <td class="font-w600">Jeffrey Shaw</td>
                                        <td class="d-none d-sm-table-cell">customer1@example.com</td>
                                        <td class="d-none d-sm-table-cell">98</td>
                                        <td class="text-center">Guayaquil</td>
                                        <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-primary">
                        <i class="fa fa-plus"> Reservar</i>
                    </button>
                                    </td>
                                    </tr>
                                    <tr>                                 
                                        <td class="text-center">2</td>
                                        <td class="font-w600">Ralph Murray</td>
                                        <td class="d-none d-sm-table-cell">customer2@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            50
                                        </td>
                                        <td class="text-center">
                                            quito
                                        </td>
                                        <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-primary">
                        <i class="fa fa-plus"> Reservar</i>
                    </button>
                                    </td>
                                    </tr>
                                    <tr>                                 
                                        <td class="text-center">3</td>
                                        <td class="font-w600">Carol Ray</td>
                                        <td class="d-none d-sm-table-cell">customer3@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                          90
                                        </td>
                                        <td class="text-center">
                                           manta
                                        </td>
                                        <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-primary">
                        <i class="fa fa-plus"> Reservar</i>
                    </button>
                                    </td>
                                    </tr>
                                    </tbody>
                            </table>
                            </div>
                            </div>
                            <!-- paquetes -->
                            
                        



                 
                
                    <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-alt-primary">Continuar</button>
                    </div>                             
            </form>               
          <!-- END Form -->
                            
               
        </div>  <!-- END  -->
    </div>
</div>

</div>
</main> 


<?php require_once('view/panel/footer.php'); ?>