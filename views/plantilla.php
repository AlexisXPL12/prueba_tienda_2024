<?php
require_once "./config/config.php";
require_once "./controllers/vistas_control.php";

$mostrar = new vistasControlador();

$vista = null;

if (isset($_GET['views'])) {
    $vista = $mostrar->obtenerVistaControlador();
} elseif (isset($_GET['admin'])) {
    $vista = $mostrar->obtenerVistaAdmin();
} else {
    $vista = "login";
}


if ($vista == "login" || $vista == "404") {
    require_once "./views/" . $vista . ".php";
} elseif ($vista == "registrate") {
    require_once "./views/registrate.php";
} elseif ($vista == "configuracionAdmin") {
    require_once "./admin/" . $vista . ".php";
} else {
    if (isset($_GET['admin'])) {
        include "./admin/include/barralateral.php";
        include $vista;
        include "./admin/include/footer.php";
    } else {
        include "./views/include/header.php";
        include $vista;
        include "./views/include/footer.php";
    }
}
