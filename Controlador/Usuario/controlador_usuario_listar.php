<?php   
//requerimos un modelo
require '../../Modelo/modelo_usuario.php';
$MU=new Modelo_usuario();


$consulta=$MU->listar_usuario();

if($consulta){
    header("Content-Type: application/json");
    echo json_encode($consulta);
}else{
    echo '{
        "sEcho": 1,
        "iTotalRecords": "0",
        "iTotalDisplayRecords": "0",
        "aaData": []
    }';
}
?>