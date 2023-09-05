<?php
session_start();
if(isset($_SESSION['S_IDUSER'])){//Si  existe una sesion de usuario
  header('Location: ../Vista/index.php');//Redirecciona ala vista de sesión 
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Sistema BQ</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Plantilla/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../Plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Plantilla/dist/css/adminlte.min.css">

  

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.php" class="h1"><b>Login </b>Sistema BQ</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingresa para empezar tu sesión</p>

      
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="txt_user">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="txt_pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="rememberMe">
              <label for="rememberMe">
                Recordarme
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" onclick="Iniciar_sesion()" >Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      
      <!--
        <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Ingresar usando Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Ingresar usando Google+
        </a>
      </div>
      -->
      
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Olvidé mi contraseña</a>
      </p>
      <!--
        <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
       -->
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../Plantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../Plantilla/dist/js/adminlte.min.js"></script>
<script src="../JS/Usuario.js?rev=<?php echo time();?>"></script>
<!--Llamo al utilitario de sweetalert-->
<script src="../Utilitarios/sweetalert2.js"></script>
<script>
  //Para guardar los datos de user y pass cuando está checkeado remember me
    const  rmcheck=document.getElementById('rememberMe'),//Con la coma no necesito declarar otra constante, le indico que todas son ctes las sucesivas
          usuarioInput=document.getElementById('txt_user'),
          passInput=document.getElementById('txt_pass');
    if(localStorage.checkbox && localStorage.checkbox !==""){
      rmcheck.setAttribute("checked","checked");
      usuarioInput.value=localStorage.user;
      passInput.value=localStorage.pass;
    }else{
      rmcheck.removeAttribute("checked");
      usuarioInput.value="";
      passInput.value="";
    }
</script>

<script>
  function cargar_contenido(id,vista){
  $("#"+id).load(vista);
  }
  var idioma_espanol = {
    select: {
      rows: "%d fila seleccionada"
    },
    "sProcessing":  "Procesando...",
    "sLengthMenu":  "Mostrar _MENU_ registros",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable":  "Ningun dato disponible en esta table",
    "sInfo":        "Registros del (_START_ al _END_) total de _TOTAL_ registros",
    "sInfoEmpty":   "Registros del (0 al 0) total de 0 registros",
    "sInforFiltered": "(filtrado de un total de _MAX_ registros)",
    "sInforPostFix": "",
    "sSearch":       "Buscar:",
    "sUrl":          "",
    "sInfoThousands": ",",
    "sLoadingRecords": "<b>No se encontraron datos</b>",
    "oPaginate": {
      "sFirst": "Primero",
      "sLast":  "Ultimo",
      "sNext":  "Siguiente",
      "sPrevious":  "Anterior"
    },
    "oAria": {
      "sSortAscendingD": ":  Activar para ordenar la columna de manera ascendente",
      "sSortDescending": ":  Activar para ordenar la columna de manera descendente"
    }


  }
  $(function(){
        var menues = $(".nav-link");
        menues.click(function(){
          menues.removeClass("active");
          $(this).addClass("active");
        })
  })
</script>
</body>
</html>
