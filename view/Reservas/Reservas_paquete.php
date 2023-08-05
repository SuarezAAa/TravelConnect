<?php require_once('view/panel/header.php'); ?>

  <main id="main-container">



<div class="content">
<a  style="color:gray;" href="javascript:history.back()">
            <div class="btn btn-lg btn-circle btn-alt-secondary mr-10 mb-10">
            <i class="fa fa-reply"></i>
            </div> 
            </a> Volver 

  <h2 class="content-heading"> Servicios de gestion de Paquetes</h2>
                            
           
    <div class="row">
      <div class="col-xl-12">
                               
            <form class="js-validation-bootstrap" action="index.php?c=Reservas&a=view_detalles_reservas"method="post">

                                                                                                                               
<br>
                            <!-- paquetes -->
    <div class="form-group">
        <div class="col-xl-12">
            <h4 class="text-center mt-2"> <small>Servicios de Paquetes Disponebles</small></h4>

        <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                            <thead>
                                    <tr>
                                        
                                        <th class="text-center">Nombre</th>
                                        <th>Vuelo</th>
                                        <th class="d-none d-sm-table-cell">Hotel</th>
                                        <th class="d-none d-sm-table-cell">Precio</th>
                                        <th class="text-center" style="width: 15%;">Acción</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    
                                        <td class="text-center">1</td>
                                        <td class="font-w600">Jeffrey Shaw</td>
                                        <td class="d-none d-sm-table-cell">customer1@example.com</td>
                                        <td class="d-none d-sm-table-cell">98</td>
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
                                    <button type="button" class="btn btn-sm btn-primary">
                        <i class="fa fa-plus"> Reservar</i>
                    </button>
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
<script>
$(document).ready(function(){ 

var table = $('#example').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'copy', 'excel', 'pdf'
    ],
    searching: false,
		"aProcessing": true,//Activamos el procesamiento del datatables
 	    "aServerSide": true,//Paginación y filtrado realizados por el servidor 
	
        "ajax":{
            url: 'index.php?c=&a=',
            type : "get",
        },
        "bDestroy": true,
		"responsive": true,
		"bInfo":true,
		"iDisplayLength": 5,//Por cada 10 registros hace una paginación
        "lengthMenu":  [ 5, 10, 15, 20, 25],
	    "order": [[ 0, "asc" ]],//Ordenar (columna,orden)
	    "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
		},
       
	})
  
});


</script>


<?php require_once('view/panel/footer.php'); ?>