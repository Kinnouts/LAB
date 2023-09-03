<?php
    session_start();//Antes de cerrar sesión debo crearla
    session_destroy();
    header('Location:../../Ppal/index.php');//Redireccion a la pagina de login
?>