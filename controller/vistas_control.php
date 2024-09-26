<?php

require_once "./model/vistas_model.php";

class vistasControlador extends vistaModelo{
    public function obtenerPlantillaControlador(){
        return require_once "./view/plantilla.php";
    }
    public function obtenerVistaControlador(){
        if ($_GET['view']) {
            $ruta = explode("/",$_GET['view']);
            $respuesta = vistaModelo::obtener_vistas($ruta[0]);
        }else {
            $respuesta = "login";
        }
        return $respuesta;
    }

}
?>