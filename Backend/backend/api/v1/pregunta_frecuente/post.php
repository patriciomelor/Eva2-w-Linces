<?php
// backend/api/v1/pregunta_frecuente/post.php

require_once '../../../includes/auth.php';
require_once '../../../includes/controller.php';

if ($_metodo === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    // Validación de los datos recibidos
    if (isset($data['pregunta'], $data['respuesta'])) {
        $pregunta = $data['pregunta'];
        $respuesta = $data['respuesta'];

        $controlador = new Controlador();
        $result = $controlador->crearPreguntaFrecuente($pregunta, $respuesta); // Método ficticio para crear una nueva pregunta frecuente

        if ($result) {
            http_response_code(201);
            echo json_encode(['message' => 'Pregunta frecuente creada exitosamente']);
        } else {
            http_response_code(400);
            echo json_encode(['message' => 'Error al crear pregunta frecuente']);
        }
    } else {
        http_response_code(400);
        echo json_encode(['message' => 'Datos incompletos']);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => 'Método no permitido']);
}
?>
