<?php
// backend/includes/controller.php

require_once __DIR__ . '/../config/config.php';

class Conexion
{
    private $connection;

    public function getConnection()
    {
        global $dsn, $options;
        try {
            $this->connection = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
        return $this->connection;
    }

    public function closeConnection()
    {
        $this->connection = null;
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
        $conn = $this->conexion->getConnection();
        $sql = "SELECT id, nombre, activo FROM mantenedor";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $this->conexion->closeConnection();
        return $result;
    }

    // Métodos adicionales para insertar, actualizar, eliminar datos, etc.
    // postNuevo, patchEncenderApagar, putNombreById, deleteById ...
}
?>
