<?php
// backend/api/v1/pregunta_frecuente/put.php

require_once '../../../includes/auth.php';
require_once '../../../includes/controller.php';

if ($_metodo === 'PUT') {
    $data = json_decode(file_get_contents("php://input"), true);

    // Validación de los datos recibidos
    if (isset($data['id'], $data['pregunta'], $data['respuesta'])) {
        $id = $data['id'];
        $pregunta = $data['pregunta'];
        $respuesta = $data['respuesta'];

        $controlador = new Controlador();
        $result = $controlador->actualizarPreguntaFrecuente($id, $pregunta, $respuesta); // Método ficticio para actualizar una pregunta frecuente

        if ($result) {
            http_response_code(200);
            echo json_encode(['message' => 'Pregunta frecuente actualizada exitosamente']);
        } else {
            http_response_code(400);
            echo json_encode(['message' => 'Error al actualizar pregunta frecuente']);
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
