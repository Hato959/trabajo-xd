<?php
require_once('../../config/config.php');
require_once('../../config/validate_session.php');

$query = "SELECT * FROM producto";
$result = $conexion->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Catálogo de Productos - SanaMarket</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary px-3">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">SanaMarket</a>
            <div class="ms-auto">
                <a class="btn btn-light" href="config/logout.php">Cerrar Sesión</a>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Lista de Productos<a href="form_insert_productos.php" class="btn btn-secondary">Añadir</a></h2>
        <div class="row">
            <?php while ($row = $result->fetch_assoc()): ?>
                <?php if ($row['activo'] == 1 && $row['stock'] > 0): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['nombre']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($row['descripcion']); ?></p>
                                <p><strong>S/ <?php echo number_format($row['precio'], 2); ?></strong></p>
                                <p class="text-muted">Stock: <?php echo $row['stock']; ?></p>
                                <a href="form_update_productos.php?id=<?php echo $row['producto_id']; ?>" class="btn btn-success">Editar</a>
                                <a href="/proyecto/config/delete_productos.php?id=<?php echo $row['producto_id']; ?>" class="btn btn-danger">Eliminar</a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
    <footer class="text-center mt-5">
        <p>&copy; 2025 SanaMarket. Todos los derechos reservados.</p>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>