<?php   
//requerimos PDO
require_once 'modelo_conexion.php';//Modelo se comunicará con servidor para hacer consultas


//Extiende de la clase conexion de modelo_conexion en la misma carpeta
class Modelo_usuario extends conexionBD{
public function Verificar_user($user, $pass){
    $c=conexionBD::conexionPDO();//Llama a conexion pdo
    //Procedimiento almacenado
    $sql="CALL SP_VERIFICAR_USUARIO(?)";//Solo voy a mandar usuario único porque voy a encriptar contraseña
    $arreglo=array();
    $query=$c->prepare($sql);//método prepare en pdo
    //Se envían los parámetros
    $query->bindParam(1,$user);
    $query->execute();

    $resultado=$query->fetchAll();

    //PArte problemática del manejo de contraseña. Ahora sí funciona OK porque está dentro del mismo doc php
    $password="admin";
    $hash=password_hash($password,PASSWORD_DEFAULT);


    foreach($resultado as $resp){

        if(password_verify($pass,$hash)){

            $arreglo[]=$resp;//Almaceno los datos en arreglo. Si el arreglo tiene datos arroja encode, sino 0
        }
       
    }
    return $arreglo;//Arreglo vacío de valor 0
    conexionBD::cerrar_conexion();//llamo a cerrar_conexion de modelo conexion
}

}


?>