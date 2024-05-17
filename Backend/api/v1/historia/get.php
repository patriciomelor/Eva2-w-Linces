<?php
// backend/api/v1/historia/get.php

require_once '../../../includes/auth.php';
require_once '../../../includes/controller.php';

if ($_metodo === 'GET') {
    $controlador = new Controlador();
    $historia = $controlador->getHistoria(); // Método ficticio para obtener la historia con imágenes

    if (!empty($historia)) {
        http_response_code(200);
        echo json_encode($historia);
    } else {
        http_response_code(404);
        echo json_encode(['message' => 'No se encontró la historia']);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => 'Método no permitido']);
}
?>
