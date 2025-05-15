<?php
require_once('config.php');

$email = $_POST['email'];
$password_hash = $_POST['password_hash'];

$query = "SELECT * FROM usuario WHERE email = '$email' AND password_hash = '$password_hash'";
$result = $conexion->query($query);

if ($result->num_rows > 0) {
    session_start();
    $usuario = $result->fetch_assoc();
    $rol = $usuario['rol'];
    $_SESSION['user'] = $email;
    $_SESSION['rol'] = $rol;

    // Redirigir según el rol
    if ($rol == 'admin') {
        header("Location: /proyecto/modulos/productos/lista_productos.php");
    } elseif ($rol == 'client') {
        header("Location: /proyecto/modulos/productos/productos.php"); }
} else {
    // Si no existe el usuario
    header("Location: /proyecto/index.php");
}
?>