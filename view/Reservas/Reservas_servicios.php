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

                                                                                 
            <div class="form-group row">
                <label class="col-lg-2 col-form-label" for="val-select2">Tipo de Servicio <span class="text-danger">*</span></label>
                    <div class="col-lg-4">
                    <select class="js-select2 form-control" id="val-select2" name="val-select2" style="width: 100%;" data-placeholder="Elige una opcion..">
                     <option value="">Selecione una opcion</option>
                        <option value="html">Hotel</option>
                        <option value="css">Vuelo</option>
                        <option value="javascript">Paquetes</option>                    
                    </select>
                    
                    </div>
                    <div class="col-lg-2">
                    <button type="button" class="btn btn-secondary min-width-125"><i class="fa fa-search"></i> Consultar</button>
                    </div>
                    
                </div> 
                
             
                                        
<br>
            <div class="form-group">
            <div class="col-xl-12">
            <h4 class="text-center mt-2"> <small>Servicios de Hoteles Disponebles</small></h4>
        <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 15%;">Acción</th>
                                        <th class="text-center">Nombre</th>
                                        <th>Valoración</th>
                                        <th class="d-none d-sm-table-cell">Dirección</th>
                                        <th class="d-none d-sm-table-cell">Precio</th>
                                        <th class="text-center">Destino</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-success">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    </td>
                                        <td class="text-center">1</td>
                                        <td class="font-w600">Jeffrey Shaw</td>
                                        <td class="d-none d-sm-table-cell">customer1@example.com</td>
                                        <td class="d-none d-sm-table-cell">98</td>
                                        <td class="text-center">Guayaquil</td>
                                    </tr>
                                    <tr>
                                    <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>
                    </button>
                                    </td>
                                        <td class="text-center">2</td>
                                        <td class="font-w600">Ralph Murray</td>
                                        <td class="d-none d-sm-table-cell">customer2@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            50
                                        </td>
                                        <td class="text-center">
                                            quito
                                        </td>
                                    </tr>
                                    <tr>
                                    <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>
                    </button>
                                    </td>
                                        <td class="text-center">3</td>
                                        <td class="font-w600">Carol Ray</td>
                                        <td class="d-none d-sm-table-cell">customer3@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                          90
                                        </td>
                                        <td class="text-center">
                                           manta
                                        </td>
                                    </tr>
                                    </tbody>
                            </table>
                            </div>
                            </div>
<!-- vuelos -->
<div class="form-group">
            <div class="col-xl-12">
            <h4 class="text-center mt-2"> <small>Servicios de Vuelos Disponebles</small></h4>
        <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 15%;">Acción</th>
                                        <th class="text-center">Aerolinea</th>
                                        <th class="text-center">Fecha de partida</th>
                                        <th class="">Orgien</th>
                                        <th class="">Destino</th>
                                        <th class="text-center">Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>
                    </button>
                                    </td>
                                        <td class="text-center">1</td>
                                        <td class="font-w600">Jeffrey Shaw</td>
                                        <td class="d-none d-sm-table-cell">customer1@example.com</td>
                                        <td class="d-none d-sm-table-cell">98</td>
                                        <td class="text-center">Guayaquil</td>
                                    </tr>
                                    <tr>
                                    <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>
                    </button>
                                    </td>
                                        <td class="text-center">2</td>
                                        <td class="font-w600">Ralph Murray</td>
                                        <td class="d-none d-sm-table-cell">customer2@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            50
                                        </td>
                                        <td class="text-center">
                                            quito
                                        </td>
                                    </tr>
                                    <tr>
                                    <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>
                    </button>
                                    </td>
                                        <td class="text-center">3</td>
                                        <td class="font-w600">Carol Ray</td>
                                        <td class="d-none d-sm-table-cell">customer3@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                          90
                                        </td>
                                        <td class="text-center">
                                           manta
                                        </td>
                                    </tr>
                                    </tbody>
                            </table>
                            </div>
                            </div>
                            <!-- paquetes -->
                            <div class="form-group">
            <div class="col-xl-12">
            <h4 class="text-center mt-2"> <small>Servicios de Paquetes Disponebles</small></h4>
        <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 15%;">Acción</th>
                                        <th class="text-center">Nombre</th>
                                        <th>Vuelo</th>
                                        <th class="d-none d-sm-table-cell">Hotel</th>
                                        <th class="d-none d-sm-table-cell">Precio</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>
                    </button>
                                    </td>
                                        <td class="text-center">1</td>
                                        <td class="font-w600">Jeffrey Shaw</td>
                                        <td class="d-none d-sm-table-cell">customer1@example.com</td>
                                        <td class="d-none d-sm-table-cell">98</td>
                                        
                                    </tr>
                                    <tr>
                                    <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>
                    </button>
                                    </td>
                                        <td class="text-center">2</td>
                                        <td class="font-w600">Ralph Murray</td>
                                        <td class="d-none d-sm-table-cell">customer2@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            50
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                    <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>
                    </button>
                                    </td>
                                        <td class="text-center">3</td>
                                        <td class="font-w600">Carol Ray</td>
                                        <td class="d-none d-sm-table-cell">customer3@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                          90
                                        </td>
                                       
                                    </tr>
                                    </tbody>
                            </table>
                            </div>
                            </div>



                 
                
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