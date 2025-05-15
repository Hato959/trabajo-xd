<?php
require_once('config.php');
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];
$fecha_creacion = date('Y-m-d'); 
$activo = 1;
$query = "INSERT INTO Producto 
(nombre, precio, stock, categoria_id, descripcion, fecha_creacion, activo)
VALUES 
('$nombre', '$precio', '$stock', '$categoria', '$descripcion', '$fecha_creacion', '$activo')";
$conexion->query($query);

header("Location: /proyecto/modulos/productos/lista_productos.php");
?>