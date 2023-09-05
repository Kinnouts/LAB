<script src="../JS/Usuario.js?rev=<?php echo time();?>"></script>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mantenimiento Médicos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   
    <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0"><b>Listado de Médicos</b></h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 table-responsive"><!--Inserto código de tabla responsiva del sitio de datatable -->
                  <table id="tablaMed" class="display" style="width:100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>DNI</th>
                        <th>Especialidad</th>
                        <th>Accion</th>
                      </tr>
                    </thead>
                    <tbody>
                    <!-- Los datos se llenarán aquí con JavaScript -->
                    <script >listar_usuario_bq();</script>
                    </tbody>
                  </table>

                  </div>
                </div>
              </div>
            </div>
            
            

<!-- //Script de inicializacion de datatable,SI es requerido,pero a veces lo sacan. Recordar que en el resto de referencias y links lo de datatable va luego de JQuery para que pueda funcionar correctamente -->          
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>



