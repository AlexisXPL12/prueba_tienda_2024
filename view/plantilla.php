<?php

require_once "./controller/vistas_control.php";

$mostrar = new vistasControlador();

$vista =  $mostrar->obtenerVistaControlador();

if ($vista == "login" || $vista == "404") {
    require_once  "./view/" . $vista . ".php";
}else {
    include "./view/include/header.php";
    include $vista;
    include "./view/include/footer.php";
}


?>