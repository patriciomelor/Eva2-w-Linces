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

    public function getAllParcelas()
    {
        $conn = $this->conexion->getConnection();
        $sql = "SELECT * FROM parcelas";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $parcelas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->conexion->closeConnection();
        return $parcelas;
    }

    public function crearParcela($tipo, $lote, $servicio)
    {
        $conn = $this->conexion->getConnection();
        $sql = "INSERT INTO parcelas (tipo, lote, servicio) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$tipo, $lote, $servicio]);
        $this->conexion->closeConnection();
        return true; // Opcional: puedes devolver un indicador de éxito o error
    }

    public function actualizarParcela($id, $tipo, $lote, $servicio)
    {
        $conn = $this->conexion->getConnection();
        $sql = "UPDATE parcelas SET tipo = ?, lote = ?, servicio = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$tipo, $lote, $servicio, $id]);
        $this->conexion->closeConnection();
        return true; // Opcional: puedes devolver un indicador de éxito o error
    }

    public function actualizarParcialParcela($id, $datos)
    {
        // Implementa la lógica para actualizar parcialmente una parcela según los datos proporcionados
        // Puedes usar la función json_decode para convertir los datos JSON en un array PHP
        // y luego actualizar solo los campos necesarios en la base de datos
    }

    public function eliminarParcela($id)
    {
        $conn = $this->conexion->getConnection();
        $sql = "DELETE FROM parcelas WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $this->conexion->closeConnection();
        return true; // Opcional: puedes devolver un indicador de éxito o error
    }
}
?>
