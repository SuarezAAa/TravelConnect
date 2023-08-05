<?php require_once('view/panel/header.php'); ?>

  <main id="main-container">


<div class="content">
  <h2 class="content-heading"> Gestión de reservas</h2>
    <div class="row">
      <div class="col-xl-12">
          
       
                      
      <h3 class="block-title mb-3">Detalles de la reserva</h3>
                                
            <form class="js-validation-bootstrap" action="index.php?c=Reservas&a=view_factura_reservas" method="post">

                                                                                 
            <div class="block" style="display: flex;">

            <div class="block-header block-header-default bg-flat-dark">
                <h3 class="block-title" style="font-weight:bold;font-text:center;color:white;">Reserva Hotel</h3>                           
            </div>
            <div class="block-content">
                            <table class="table table-borderless table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Nombre</th>
                                        <th>Ciudad</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Precio</th>
                                        <th class="text-center" style="width: 100px;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center" scope="row">1</th>
                                        <td>Barbara Scott</td>
                                        <td>Quito</td>
                                        <td class="d-none d-sm-table-cell">
                                           90
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">                                          
                                            <button type="button" class="btn btn-danger mr-5 mb-5" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-times"> Quitar</i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr> 
                                                                                                                                                                        
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="block"  style="display:flex;">
            <div class="block-header block-header-default bg-corporate-dark">
                            <h3 class="block-title" style="font-weight:bold;color:white;">Reserva Vuelo</h3>
                            
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Nombre</th>
                                        <th>Origen</th>
                                        <th>Destino</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Precio</th>
                                        <th class="text-center" style="width: 100px;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center" scope="row">1</th>
                                        <td>Barbara Scott</td>
                                        <td>Quito</td>
                                        <td>Guayaquil</td>
                                        <td class="d-none d-sm-table-cell">
                                           90
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">                                          
                                            <button type="button" class="btn btn-danger mr-5 mb-5" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-times"> Quitar</i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>                                                                                                                                     
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="block" style="display:flex;" >
            <div class="block-header block-header-default bg-corporate-dark" >
                            <h3 class="block-title" style="font-weight:bold;color:white;">Reserva Paquete</h3>
                            
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Nombre</th>
                                        <th>Hotel</th>
                                        <th>Vuelo</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Precio</th>
                                        <th class="text-center" style="width: 100px;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center" scope="row">1</th>
                                        <td>Barbara Scott</td>
                                        <td>Oro verde</td>
                                        <td>Guayaquil</td>
                                        <td class="d-none d-sm-table-cell">
                                           90
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">                                          
                                            <button type="button" class="btn btn-danger mr-5 mb-5" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-times"> Quitar</i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>                                                                                                                                     
                                </tbody>
                            </table>
                        </div>
                    </div>
             

                 
                <div class="form-group row">
                    <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-alt-primary">Confirmar selección</button>
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