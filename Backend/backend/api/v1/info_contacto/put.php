<?php
// backend/api/v1/info_contacto/put.php

require_once '../../../includes/auth.php';
require_once '../../../includes/controller.php';

if ($_metodo === 'PUT') {
    // Obtener los datos del cuerpo de la solicitud
    $data = json_decode(file_get_contents('php://input'), true);

    // Validar los datos recibidos
    if (empty($data['telefono']) || empty($data['email'])) {
        http_response_code(400);
        echo json_encode(['message' => 'Se requiere un teléfono y un correo electrónico']);
        exit;
    }

    // Actualizar la información de contacto
    $controlador = new Controlador();
    $resultado = $controlador->actualizarInfoContacto($data); // Método ficticio para actualizar la información de contacto

    if ($resultado) {
        http_response_code(200);
        echo json_encode(['message' => 'Información de contacto actualizada con éxito']);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'No se pudo actualizar la información de contacto']);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => 'Método no permitido']);
}
?>
