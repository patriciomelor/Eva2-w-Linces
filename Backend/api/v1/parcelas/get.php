<?php
// backend/api/v1/parcelas/get.php

require_once '../../../includes/auth.php';
require_once '../../../includes/controller.php';

if ($_metodo === 'GET') {
    // Lógica para obtener todas las parcelas
    // Implementa la lógica para obtener todas las parcelas desde el controlador
    // $controlador = new Controlador();
    // $parcelas = $controlador->obtenerTodasLasParcelas();
    
    // Simulación de datos de prueba
    $parcelas = [
        ["id" => 1, "tipo" => "Tipo 1", "lote" => "Lote 1", "servicio" => "Servicio 1"],
        ["id" => 2, "tipo" => "Tipo 2", "lote" => "Lote 2", "servicio" => "Servicio 2"]
    ];

    http_response_code(200);
    echo json_encode($parcelas);
} else {
    // Método no permitido
    http_response_code(405);
    echo json_encode(["message" => "Método no permitido"]);
}
?>
