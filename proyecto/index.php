<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="text-center">
  <main class="form-signin w-100 m-auto">
    <form action="config/login.php" method="POST">
      <h1>SANAMARKET</h1>
      <h2 class="h3 mb-3 fw-normal">Iniciar Sesión</h2>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
        <label for="floatingInput">Correo electrónico</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password_hash">
        <label for="floatingPassword">Contraseña</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2025-Actualidad</p>
    </form>
  </main>
</body>
    
</html>