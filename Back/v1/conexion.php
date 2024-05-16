<?php
// conexion.php

include_once 'config.php';

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
?>
