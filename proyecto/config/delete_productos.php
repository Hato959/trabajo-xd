<?php
require_once('config.php');
$id= $_GET['id'];
$query= "DELETE FROM producto WHERE producto_id = $id";
$conexion->query($query);
header("Location: /proyecto/modulos/productos/lista_productos.php");
?>
