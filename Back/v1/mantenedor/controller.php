<?php
// controller.php

// Datos de conexión a la base de datos
$host = "localhost";
$username = "linces";
$password = "l1nc3s_2024T1";
$dbname = "Linces";
class Conexion
{
    private $connection;

    public function getConnection()
    {
        $this->connection = mysqli_connect($host, $username, $password, $dbname);
        mysqli_set_charset($this->connection, "utf8");
        if (!$this->connection) {
            die("Error de conexión: " . mysqli_connect_error());
        }
        return $this->connection;
    }

    public function closeConnection()
    {
        mysqli_close($this->connection);
    }
}
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
