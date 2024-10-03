<?php

require_once "./controllers/vistas_control.php";

$mostrar = new vistasControlador();

$vista =  $mostrar->obtenerVistaControlador();

if ($vista == "login" || $vista == "404") {
    require_once  "./views/" . $vista . ".php";
}else {
    include "./views/include/header.php";
    include $vista;
    include "./views/include/footer.php";
}


?>