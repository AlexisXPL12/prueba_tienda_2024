<?php

require_once "../library/conexion.php";

class CategoriaModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function obtenerCategorias(){
        $arrRespuesta = [];
        $sql = $this->conexion->query("SELECT * FROM categoria");
        while ($fila = $sql->fetch_object()) {
            array_push($arrRespuesta, $fila);
        }
        return $arrRespuesta;
    }  
}

?>