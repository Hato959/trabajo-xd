<?php
$host="localhost";
$usuario="root";
$contraseña="";
$nombre_bd="sanamarket";
$conexion = new mysqli($host, $usuario, $contraseña, $nombre_bd);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>