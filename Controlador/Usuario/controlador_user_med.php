<?php   
//requerimos un modelo
require '../../Modelo/modelo_usuario.php';
$MU=new Modelo_usuario();


$consulta=$MU->listar_med();

if($consulta){
   // header("Content-Type: application/json");//:O
    $jsonData = json_encode($consulta);
    echo $jsonData;
    
}else{
    echo '{
        "sEcho": 1,
        "iTotalRecords": "0",
        "iTotalDisplayRecords": "0",
        "aaData": []
    }';
}
?>