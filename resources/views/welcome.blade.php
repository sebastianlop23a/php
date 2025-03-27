<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a tu Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Bienvenido a tu Sistema de Gestión</h1>
        <p class="lead">Gestiona tu inventario, productos y ventas fácilmente.</p>

        <a href="{{ route('login') }}" class="btn btn-primary mt-3">Ver Productos</a>
    </div>
</body>
</html>
