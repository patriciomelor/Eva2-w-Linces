<?php
// backend/api/v1/info_contacto/delete.php

require_once '../../../includes/auth.php';
require_once '../../../includes/controller.php';

if ($_metodo === 'DELETE') {
    $controlador = new Controlador();
    $resultado = $controlador->eliminarInfoContacto(); // Método ficticio para eliminar la información de contacto

    if ($resultado) {
        http_response_code(200);
        echo json_encode(['message' => 'Información de contacto eliminada']);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'No se pudo eliminar la información de contacto']);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => 'Método no permitido']);
}
?>
