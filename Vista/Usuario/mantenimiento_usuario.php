
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
                <h3 class="card-title"><b>Listado de Pacientes</b></h5>
                <button class="btn btn-danger btn-sm float-right" onclick="openRegistroPac()"><svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="white" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l44.9 74.7c-16.1 17.6-28.6 38.5-36.6 61.5c-1.9-1.8-3.5-3.9-4.9-6.3L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152zM432 224a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm16 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v48H368c-8.8 0-16 7.2-16 16s7.2 16 16 16h48v48c0 8.8 7.2 16 16 16s16-7.2 16-16V384h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H448V304z"/></svg> Nuevo Paciente</button>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 table-responsive"><!--Inserto código de tabla responsiva del sitio de datatable -->
                  <table id="tablaSimple" class="display" style="width:100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nro ficha</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Accion</th>
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
            
            

<!-- Modal -->
<div class="modal fade" id="modal_registro_paciente" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
        <div class="col-12">
            <label for="">N° Ficha</label>
            <input type="text" id="text_pac" class="form-control">
          </div>
          <div class="col-12">
            <label for="">Nombre</label>
            <input type="text" id="text_pac" class="form-control">
          </div>
          <div class="col-12">
            <label for="">Apellido</label>
            <input type="text" id="text_pac" class="form-control">
          </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- //Script de inicializacion de datatable,SI es requerido,pero a veces lo sacan. Recordar que en el resto de referencias y links lo de datatable va luego de JQuery para que pueda funcionar correctamente -->          
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

