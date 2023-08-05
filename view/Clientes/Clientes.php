<?php require_once('view/panel/header.php'); ?>

<main id="main-container">


<div class="content">
  <h2 class="content-heading"> Gestión de Clientes</h2>
    <div class="row">
      <div class="col-xl-12">
<!-- Dynamic Table Full -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Listado <small>Full</small></h3>
        </div>

        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
            <table id="example" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                      
                        <th>Nombres</th>
                        <th class="d-none d-sm-table-cell">Apellidos</th>
                        <th class="text-center">Correo</th>
                        <th class="d-none d-sm-table-cell">Cédula</th>
                        <th class="text-center">Dirección</th>
                        <th class="text-center">Telefono</th>
                        <th>Ciudad</th>
                       
                    </tr>
                </thead>

                <tbody>
                  
                        
                </tbody>
            </table>
        </div>
    </div>
                    <!-- END Dynamic Table Full -->



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
		"aProcessing": true,//Activamos el procesamiento del datatables
 	    "aServerSide": true,//Paginación y filtrado realizados por el servidor 
	
        "ajax":{
            url: 'index.php?c=Clientes&a=Lista_cliente',
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