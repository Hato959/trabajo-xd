<?php
require_once('config.php');
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];
$fecha_creacion = date('Y-m-d'); 
$activo = 1;
$id= $_POST['id'];
$query= "UPDATE producto SET nombre='$nombre', precio='$precio', stock='$stock', categoria_id='$categoria', descripcion='$descripcion' WHERE producto_id = $id";
$conexion->query($query);

header("Location: /proyecto/modulos/productos/lista_productos.php");
?>