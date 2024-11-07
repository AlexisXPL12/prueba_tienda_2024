<?php
require_once "../library/conexion.php";

class PersonaModel {
    private $conexion;
    
    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function obtenerProveedores() {
        $arrRespuesta = [];
        $sql = $this->conexion->query("SELECT * FROM persona WHERE rol = 'proveedor'");
        while ($fila = $sql->fetch_object()) {
            array_push($arrRespuesta, $fila);
        }
        return $arrRespuesta;
    }
}
?>