<?php
include_once('../config/conexion.php');
$conexion = new Conexion();
$conn = $conexion->conectar();

class ProductoDAO {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function agregarProducto($nombre, $descripcion) {
        $conn = $this->conexion->conectar();
        $sql = "INSERT INTO producto (Nombre, Descripcion) VALUES ('$nombre', '$descripcion')";
        return mysqli_query($conn, $sql);
    }

    public function obtenerProductos() {
        $conn = $this->conexion->conectar();
        $sql = "SELECT * FROM productos";
        $query = mysqli_query($conn, $sql);
        $productos = [];
        while ($row = mysqli_fetch_array($query)) {
            $productos[] = $row;
        }
        return $productos;
    }

 
}
?>
