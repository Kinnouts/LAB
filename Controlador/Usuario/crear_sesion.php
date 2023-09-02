<?php
$idusuario=htmlspecialchars($_POST['idAdmin'],ENT_QUOTES,'UTF-8');//Para saltar inyecciones
$nombre=htmlspecialchars($_POST['Nombre'],ENT_QUOTES,'UTF-8');//Para saltar inyecciones
$apellido=htmlspecialchars($_POST['Apellido'],ENT_QUOTES,'UTF-8');//Para saltar inyecciones

session_start();
$_SESSION['S_IDUSER']=$idAdmin;
$_SESSION['S_NOMBRE']=$Nombre;
$_SESSION['S_APELLIDO']=$Apellido;



?>