<?php
require_once "./models/vistas_model.php";

class vistasControlador extends vistaModelo
{
    // Método para obtener la plantilla principal
    public function obtenerPlantillaControlador()
    {
        return require_once "./views/plantilla.php";
    }

    // Método para obtener la vista, tanto para el usuario como para el administrador
    public function obtenerVistaControlador()
    {
        $vista = null;

        if (isset($_GET['views'])) {
            $ruta = explode("/", $_GET['views']); // Separar la ruta si tiene "/"
            $vista = vistaModelo::obtener_vistas($ruta[0]); // Pasar el primer segmento para validar
        } elseif (isset($_GET['admin'])) {
            $ruta = explode("/", $_GET['admin']);
            $vista = vistaModelo::obtener_vistas("admin/" . $ruta[0]);
        } else {
            $vista = "login"; // Valor por defecto
        }

        return $vista;
    }
}
