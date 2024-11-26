<?php
require_once "./config/config.php";
require_once "./controllers/vistas_control.php";

$mostrar = new vistasControlador();

$vista = $mostrar->obtenerVistaControlador();  // Llamada única al método

// Comprobación de vista para cargar diferentes tipos de vistas
if ($vista == "login" || $vista == "404") {
    require_once "./views/" . $vista . ".php";  // Vista común
} elseif ($vista == "registrate") {
    require_once "./views/registrate.php";  // Vista de registro
} elseif ($vista == "configuracionAdmin") {
    require_once "./admin/" . $vista . ".php";  // Vista de configuración de admin
} else {
    // Si la vista pertenece al admin
    if (isset($_GET['admin'])) {
        include "./views/admin/include/barralateral.php";  // Barra lateral del admin
        include $vista;  // Vista específica de admin
        include "./views/admin/include/footer.php";  // Pie de página del admin
    } else {
        // Vista común del usuario
        include "./views/include/header.php";  // Cabecera del usuario
        include $vista;  // Vista específica del usuario
        include "./views/include/footer.php";  // Pie de página del usuario
    }
}
?>

