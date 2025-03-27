<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestor de Inventarios')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        /* ============================= */
        /* ESTILOS GENERALES */
        /* ============================= */

        body {
            background-color: #2B2B2B; /* Gris oscuro elegante */
            font-family: 'Poppins', sans-serif;
            color: #EAEAEA;
        }

        /* ============================= */
        /* BARRA DE NAVEGACIÓN */
        /* ============================= */

        .navbar {
            background-color: #1E3A5F !important;
            padding: 12px 18px;
        }

        .navbar-brand, .nav-link {
            color: #EAEAEA !important;
            font-weight: 500;
            transition: color 0.3s ease-in-out;
        }

        .nav-link:hover {
            color: #C9A66B !important;
        }

        /* ============================= */
        /* CONTENEDOR PRINCIPAL */
        /* ============================= */

        .container {
            padding: 25px;
            background-color: #1E1E1E;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(201, 166, 107, 0.2);
            margin-top: 25px;
        }

        /* ============================= */
        /* TÍTULOS Y TEXTOS */
        /* ============================= */

        .section-title {
            font-size: 2.2rem;
            font-weight: bold;
            color: #C9A66B;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        /* ============================= */
        /* TABLAS */
        /* ============================= */

        .table {
            background-color: #202020;
            color: #EAEAEA;
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead {
            background-color: #1E3A5F;
            color: #C9A66B;
            font-weight: bold;
        }

        /* ============================= */
        /* BOTONES */
        /* ============================= */

        .btn-custom {
            background-color: #1E3A5F;
            color: #EAEAEA;
            border: none;
            font-weight: 600;
            transition: background 0.3s ease-in-out;
            padding: 10px 15px;
            border-radius: 8px;
        }

        .btn-custom:hover {
            background-color: #C9A66B;
            color: #1E1E1E;
        }

        .btn-danger {
            background-color: #8B0000;
            color: #EAEAEA;
            border: none;
            transition: background 0.3s ease-in-out;
            padding: 10px 15px;
            border-radius: 8px;
        }

        .btn-danger:hover {
            background-color: #C9A66B;
            color: #1E1E1E;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Gestor de Inventarios</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('stocks.index') }}">Stock</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('productos.index') }}">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a></li> <!-- Enlace a Clientes agregado -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
