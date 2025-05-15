<?php
require_once('../../config/config.php');
require_once('../../config/validate_session.php');

$query = "SELECT * FROM categoria";
$result = $conexion->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Insertar Producto</title>
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
        <div class="row mt-5">
            <div class ="col">
                <h1>Insertar Producto<a href="lista_productos.php" class="btn btn-secondary">Regresar</a></h1>
            </div>
        </div>
        <form action="/proyecto/config/insert_productos.php" method="POST">
            <div class="row mt-5">
                    <div class="col-6">
                        <label for="nombre" class="form-label">Nombre del producto</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                
                    <div class="col-6">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="text" class="form-control" name="precio" id="precio">
                    </div>
                    <div class="col-6">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="text" class="form-control" name="stock" id="stock">
                    </div>
                    <div class="col-6">
                        <label for="categoria" class="form-label">Categoría</label>
                        <select name ="categoria" id="categoria" class="form-select">
                            <option value="0" selected>Selecciona tu opción</option>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $row['categoria_id']; ?>"><?php echo $row['nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="descipcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion">
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
            </div>
        </form>
    </div>
    <footer class="text-center mt-5">
        <p>&copy; 2025 SanaMarket. Todos los derechos reservados.</p>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>