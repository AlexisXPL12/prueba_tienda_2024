<?php

require_once "./models/vistas_model.php";

class vistasControlador extends vistaModelo
{
    public function obtenerPlantillaControlador()
    {
        return require_once "./views/plantilla.php";
    }
    public function obtenerVistaControlador()
    {
        if (isset($_GET['views'])) {
            $ruta = explode("/", $_GET['views']);
            $respuesta = vistaModelo::obtener_vistas($ruta[0]);
        } else {
            $respuesta = "login";
        }

        return $respuesta;
    }
    public function obtenerVistaAdmin()
    {
        if (isset($_GET["admin"])) {
            $ruta = explode("/", $_GET["admin"]);
            $respuesta = vistaModelo::obtener_vistaAdmin($ruta[0]);
        } else {
            $respuesta = "configuracionAdmin";
        }

        return $respuesta;
    }
}
