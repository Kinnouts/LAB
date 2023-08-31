<?php   
//requerimos PDO
require_once 'modelo_conexion.php';//Modelo se comunicará con servidor para hacer consultas

//Extiende de la clase conexion de modelo_conexion en la misma carpeta
class Modelo_usuario extends conexionBD{
public function Verificar_user($user, $pass){
    $c=conexionBD::conexionPDO();
    //Procedimiento almacenado
    $sql="CALL SP_VERIFICAR_USUARIO(?)";//Solo voy a mandar usuario único
    $arreglo=array();
    $query=$c->prepare($sql);//método prepare en pdo
    //Se envían los parámetros
    $query->bindParam(1,$user);
    $query->execute();

    $resultado=$query->fetchAll();

    foreach($resultado as $resp){

        $arreglo[]=$resp;//Almaceno los datos en arreglo. Si el arreglo tiene datos arroja encode, sino 0
        /*
        if(password_verify($pass,$resp['Pass_user'])){

            
        }*/
       
    }
    return $arreglo;
    conexionBD::cerrar_conexion();//llamo a cerrar_conexion de modelo conexion
}

}


?>