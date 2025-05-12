<?php
require_once('config.php');

$email = $_POST['email'];
$password_hash = $_POST['password_hash'];

$query = "SELECT * FROM usuario WHERE email = '$email' AND password_hash = '$password_hash'";
$result = $conexion->query($query);

if ($result && $result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    $rol = $usuario['rol'];

    session_start();
    $_SESSION['usuario_id'] = $usuario['usuario_id'];
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['rol'] = $rol;

    // Redirigir según el rol
    if ($rol === 'admin') {
        header("Location: /proyecto/modulos/productos/lista_productos.php");
    } elseif ($rol === 'client') {
        header("Location: /proyecto/modulos/productos/productos.php"); 
    } else {
        echo "Rol no reconocido.";
    }

} else {
    // Si no existe el usuario
    header("Location: /proyecto/index.php");
}
?>
