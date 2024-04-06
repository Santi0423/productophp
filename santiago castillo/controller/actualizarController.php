<?php
include_once('../model/productoDAO.php');

if(isset($_POST['id'], $_POST['nombre'], $_POST['descripcion'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    
    $productoDAO = new ProductoDAO(); // Crear la instancia del ProductoDAO
    if($productoDAO->actualizarProducto($conn, $id, $nombre, $descripcion)) {
        header("Location: ../index.php");
        exit(); 
    } else {
        echo "Error al actualizar el producto.";
    }
}
?>
