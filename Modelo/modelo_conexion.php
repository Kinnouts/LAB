<?php
$dsn= 'mysql:dbname=mybqq;host=localhost';
$usuario= 'root';
$contraseña= '';

try{
    $gbd=new PDO($dsn,$usuario,$contraseña);
}catch(PDOException $e){
    echo 'Falló la conexión: '.$e->getMessage();
}
class conexionBD
{
    public function conexionPDO(){
        $host='localhost';
        $usuario='root';
        $contraseña='';
        $dbName='mybqq';
        try{
            $pdo=new PDO("mysql:host=$host;dbname=$$dbname;",$usuario,$contraseña);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Validación de tildes
            $pdo->exec("set names utf8");
            return $pdo;
       
        }catch(Exception $e){
            echo "La conexión ha fallado";
        }
    }
    function cerrar_conexion(){
        $this->$pdo=null;
    
    }
}    
