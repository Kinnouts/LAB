
<script src="../JS/Usuario.js?rev=<?php echo time();?>"></script>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mantenimiento usuario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   
    <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0"><b>Listado de Usuarios</b></h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 table-responsive"><!--Inserto código de tabla responsiva del sitio de datatable -->
                  <table id="tabla_usuario_simple" class="display" style="width:100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Status</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                    <!-- Los datos se llenarán aquí con JavaScript -->
                    <script >listar_usuario_simple();</script>
                    </tbody>
                  </table>

                  </div>
                </div>
              </div>
            </div>
            
            

<!-- //Script de inicializacion de datatable,SI es requerido,pero a veces lo sacan. Recordar que en el resto de referencias y links lo de datatable va luego de JQuery para que pueda funcionar correctamente -->          
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<!-- script que lista los usuarios-->
<!--<script>
  $("#tabla_usuario_simple").DataTable({
        "ordering": false,
        "lengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../Controlador/Usuario/controlador_usuario_listar.php", // Reemplaza "obtener_datos.php" con la ruta a tu script PHP
            "dataSrc": "data" // "data" es la clave que contiene el arreglo de datos en tu JSON
        },
        "columns": [
            { "data": "usu_id" },
            { "data": "usu_nombre" },
            { "data": "rol_nombre" },
            { "data": "usu_status" },
            { "data": "usu_email" }
        ]
       
    });
</script>-->



