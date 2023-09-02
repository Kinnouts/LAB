<?php
$idusuario=htmlspecialchars($_POST['idusuario'],ENT_QUOTES,'UTF-8');
$nombre=htmlspecialchars($_POST['nombre'],ENT_QUOTES,'UTF-8');
$apellido=htmlspecialchars($_POST['apellido'],ENT_QUOTES,'UTF-8');//Los valores dentro de los corchetes son como se los ha llamado en ajax


session_start(); //creo sesion
$_SESSION['S_IDUSER']=$idusuario;//entre corchetes como se les llamará en php
$_SESSION['S_NOMBRE']=$nombre;
$_SESSION['S_APELLIDO']=$apellido;



?>