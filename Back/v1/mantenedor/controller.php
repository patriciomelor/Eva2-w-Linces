<?php
// controller.php

include_once 'conexion.php';

class Controlador
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function getAll()
    {
        // Obtener una conexión a la base de datos
        $conn = $this->conexion->getConnection();

        // Consulta SQL para obtener todos los datos del mantenedor
        $sql = "SELECT id, nombre, activo FROM mantenedor;";

        // Ejecutar la consulta
        $result = mysqli_query($conn, $sql);

        // Verificar si la consulta fue exitosa
        if ($result) {
            // Array para almacenar los datos del mantenedor
            $mantenedor = array();

            // Recorrer los resultados y almacenarlos en el array
            while ($row = mysqli_fetch_assoc($result)) {
                $row['activo'] = $row['activo'] == 1 ? true : false;
                $mantenedor[] = $row;
            }

            // Liberar el resultado
            mysqli_free_result($result);

            // Cerrar la conexión
            $this->conexion->closeConnection();

            // Devolver los datos del mantenedor
            return $mantenedor;
        } else {
            // Si la consulta falla, mostrar un mensaje de error y cerrar la conexión
            echo "Error: " . mysqli_error($conn);
            $this->conexion->closeConnection();
            return null;
        }
    }

    // Métodos adicionales para insertar, actualizar, eliminar datos, etc.
}

// Ejemplo de uso:
// Crear una instancia del controlador
$controlador = new Controlador();

// Llamar al método getAll para obtener todos los datos del mantenedor
$datos = $controlador->getAll();

// Imprimir los datos obtenidos
var_dump($datos);
?>
