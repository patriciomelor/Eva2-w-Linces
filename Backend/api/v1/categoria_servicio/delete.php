<?php
// backend/api/v1/categoria_servicio/delete.php

require_once '../../../includes/auth.php';
require_once '../../../includes/controller.php';

if ($_metodo === 'DELETE') {
    $controlador = new Controlador();
    $resultado = $controlador->eliminarCategoriasServicio(); // Método ficticio para eliminar todas las categorías de servicio

    if ($resultado) {
        http_response_code(200);
        echo json_encode(['message' => 'Todas las categorías de servicio fueron eliminadas']);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'No se pudieron eliminar las categorías de servicio']);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => 'Método no permitido']);
}
?>
