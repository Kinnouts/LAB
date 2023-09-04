
<script src="../../JS/Usuario.js?rev=<?php echo time();?>"></script>
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
                  <table id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Row 1 Data 1</td>
                                        <td>Row 1 Data 2</td>
                                    </tr>
                                    <tr>
                                        <td>Row 2 Data 1</td>
                                        <td>Row 2 Data 2</td>
                                    </tr>
                                </tbody>
                            </table>
                  </div>
                </div>
              </div>
            </div>
            
            

<!-- //Script de inicializacion de datatable,SI es requerido,pero a veces lo sacan. Recordar que en el resto de referencias y links lo de datatable va luego de JQuery para que pueda funcionar correctamente -->          
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
