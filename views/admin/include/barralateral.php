<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Panel Administrativo</title>

<!-- Bootstrap CSS -->
<link href="<?php echo BD_URL ?>views/admin/css/bootstrap@5.3.0-alpha1.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<!-- CSS Personalizado -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="<?php echo BD_URL ?>views/admin/css/admin.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const base_url = '<?php echo BD_URL ?>';
</script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="sidebar col-lg-3 col-md-4 bg-dark text-white">
                <a href="<?php echo BD_URL ?>inicio" class="d-flex align-items-center py-2 text-white">
                    <i class="bi bi-arrow-bar-left"></i> <i class="bi bi-shop ms-5"></i> Tienda
                </a>
                <h3 class="text-center py-2">Panel de Administrador</h3>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="<?php echo BD_URL ?>?admin=paneladmin" class="nav-link text-white"><i class="bi bi-house-door"></i> Panel</a></li>
                    <li class="nav-item"><a href="<?php echo BD_URL ?>?admin=usuarios" class="nav-link text-white"><i class="bi bi-people"></i> Usuarios</a></li>
                    <li class="nav-item"><a href="<?php echo BD_URL ?>?admin=productos" class="nav-link text-white"><i class="bi bi-file-earmark"></i> Productos</a></li>
                    <li class="nav-item"><a href="<?php echo BD_URL ?>?admin=categorias" class="nav-link text-white"><i class="bi bi-tags"></i> Categorías</a></li>
                    <li class="nav-item"><a href="<?php echo BD_URL ?>?admin=compras" class="nav-link text-white"><i class="bi bi-basket"></i> Compras</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-calendar-check"></i> Reportes</a></li>
                </ul>
                <footer class="text-center mt-auto">
                    &copy; 2024 XTREME-AI. Todos los derechos reservados.
                </footer>
            </nav>

            <!-- Contenido Principal -->
            <main class="main-content col-lg-9 col-md-8 justify-content-center d-flex">