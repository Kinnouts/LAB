<?php   
//requerimos un modelo
require '../../Modelo/modelo_usuario.php';
$MU=new Modelo_usuario();
$usu=htmlspecialchars($_POST['u'],ENT_QUOTES,'UTF-8');//Para saltar inyecciones
$pass=htmlspecialchars($_POST['p'],ENT_QUOTES,'UTF-8');//Para saltar inyecciones


$consulta=$MU->Verificar_user($usu,$pass);
//$data=json_decode($consulta); 

if(count($consulta)>0){
    echo json_encode($consulta);
}else{
    echo 0;
}
?>