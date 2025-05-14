<?php
header('Content-Type: application/json');
require_once '../../config/conexion.php';

$conexionObj = new conexionBD();
$conexion = $conexionObj->conexionPDO(); // ✅ CORREGIDO

if (isset($_POST['usu_nombre'], $_POST['usu_email'], $_POST['usu_contrasena'], $_POST['usu_rol'])) {
    $nombre = $_POST['usu_nombre'];
    $email = $_POST['usu_email'];
    $contrasena = password_hash($_POST['usu_contrasena'], PASSWORD_BCRYPT);
    $rol = $_POST['usu_rol'];
    $estatus = "activo";
    $fecha = date('Y-m-d H:i:s');

    try {
        $sql = "INSERT INTO usuario (usu_nombre, usu_email, usu_contrasena, usu_rol, usu_estatus, usu_fecha_registro) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([$nombre, $email, $contrasena, $rol, $estatus, $fecha]);

        echo json_encode(["status" => "success", "message" => "Usuario registrado correctamente"]);
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Error al insertar usuario: " . $e->getMessage()]);
    }

} else {
    echo json_encode(["status" => "error", "message" => "Faltan datos en el formulario"]);
}
?>
