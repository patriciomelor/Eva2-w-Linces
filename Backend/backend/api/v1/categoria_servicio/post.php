<?php
// backend/api/v1/categoria_servicio/post.php

require_once '../../../includes/auth.php';
require_once '../../../includes/controller.php';

if ($_metodo === 'POST') {
    // Obtener los datos del cuerpo de la solicitud
    $data = json_decode(file_get_contents('php://input'), true);

    // Validar los datos recibidos
    if (empty($data['nombre'])) {
        http_response_code(400);
        echo json_encode(['message' => 'Se requiere el nombre de la categoría de servicio']);
        exit;
    }

    // Crear una nueva categoría de servicio
    $controlador = new Controlador();
    $resultado = $controlador->crearCategoriaServicio($data); // Método ficticio para crear una categoría de servicio

    if ($resultado) {
        http_response_code(201);
        echo json_encode(['message' => 'Categoría de servicio creada con éxito']);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'No se pudo crear la categoría de servicio']);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => 'Método no permitido']);
}
?>
