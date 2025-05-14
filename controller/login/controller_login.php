<?php
require '../../modelo/modelo-usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
    $clave = isset($_POST['clave']) ? trim($_POST['clave']) : '';

    if (empty($usuario) || empty($clave)) {
        echo json_encode(['status' => 'error', 'message' => 'El usuario y la contraseña son requeridos']);
        exit;
    }

    $MU = new Modelo_Usuario();
    $resultado = $MU->verificarUsuario($usuario, $clave);

    if ($resultado) {
        if ($resultado['usu_estatus'] !== 'activo') {
            echo json_encode(['status' => 'error', 'message' => 'El usuario está desactivado']);
            exit;
        }

        session_start();
        $_SESSION['S_ID_USUARIO'] = $resultado['usu_id'];
        $_SESSION['S_USUARIO'] = $resultado['usu_nombre'];
        $_SESSION['S_ROL'] = $resultado['usu_rol'];

        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Usuario o contraseña incorrectos']);
    }
    exit;
}

header('Location: ../../index.php');
exit;
?>