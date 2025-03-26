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

/* Fondo general con un tono oscuro y elegante */
body {
    background-color: #2B2B2B; /* Gris oscuro elegante */
    font-family: 'Poppins', sans-serif; /* Fuente moderna y elegante */
    color: #EAEAEA; /* Blanco suave para mejor contraste */
}

/* ============================= */
/* BARRA DE NAVEGACIÓN */
/* ============================= */

/* Fondo de la barra de navegación */
.navbar {
    background-color: #1E3A5F !important; /* Azul Marino profundo */
    padding: 12px 18px; /* Espaciado más cómodo */
}

/* Color del texto en la barra de navegación */
.navbar-brand, .nav-link {
    color: #EAEAEA !important; /* Blanco suave */
    font-weight: 500; /* Negrita moderada */
    transition: color 0.3s ease-in-out;
}

/* Efecto hover en los enlaces */
.nav-link:hover {
    color: #C9A66B !important; /* Dorado suave */
}

/* ============================= */
/* CONTENEDOR PRINCIPAL */
/* ============================= */

/* Fondo del contenedor principal */
.container {
    padding: 25px; /* Espaciado interno */
    background-color: #1E1E1E; /* Negro con un toque cálido */
    border-radius: 10px; /* Bordes redondeados elegantes */
    box-shadow: 0 0 15px rgba(201, 166, 107, 0.2); /* Sombra dorada sutil */
    margin-top: 25px; /* Margen superior */
}

/* ============================= */
/* TÍTULOS Y TEXTOS */
/* ============================= */

/* Estilo para los títulos de sección */
.section-title {
    font-size: 2.2rem; /* Tamaño llamativo */
    font-weight: bold; /* Negrita */
    color: #C9A66B; /* Dorado Suave */
    text-transform: uppercase;
    margin-bottom: 20px; /* Espaciado inferior */
}

/* ============================= */
/* TABLAS */
/* ============================= */

/* Fondo de la tabla */
.table {
    background-color: #202020; /* Gris oscuro */
    color: #EAEAEA; /* Texto blanco suave */
    border-radius: 10px; /* Bordes redondeados */
    overflow: hidden; /* Oculta el contenido que sobresalga */
}

/* Encabezados de la tabla */
.table thead {
    background-color: #1E3A5F; /* Azul Marino */
    color: #C9A66B; /* Dorado Suave */
    font-weight: bold;
}

/* ============================= */
/* BOTONES */
/* ============================= */

/* Botón principal */
.btn-custom {
    background-color: #1E3A5F; /* Azul Marino */
    color: #EAEAEA; /* Blanco suave */
    border: none; /* Sin borde */
    font-weight: 600;
    transition: background 0.3s ease-in-out;
    padding: 10px 15px;
    border-radius: 8px;
}

/* Cambio de color al pasar el cursor */
.btn-custom:hover {
    background-color: #C9A66B; /* Dorado elegante */
    color: #1E1E1E; /* Negro suave */
}

/* Botón de acción peligrosa (eliminar, etc.) */
.btn-danger {
    background-color: #8B0000; /* Rojo Burdeos elegante */
    color: #EAEAEA; /* Blanco suave */
    border: none;
    transition: background 0.3s ease-in-out;
    padding: 10px 15px;
    border-radius: 8px;
}

/* Cambio de color al pasar el cursor */
.btn-danger:hover {
    background-color: #C9A66B; /* Dorado suave */
    color:  
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
