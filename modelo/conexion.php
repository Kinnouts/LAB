<?php
class conexionBD {
    public static function conexionPDO() {
        $dsn = 'mysql:host=localhost;dbname=sistema_laboratorio;charset=utf8';
        $usuario = 'root';
        $contrasena = '';

        try {
            $pdo = new PDO($dsn, $usuario, $contrasena);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die('Error de conexión: ' . $e->getMessage());
        }
    }
}
