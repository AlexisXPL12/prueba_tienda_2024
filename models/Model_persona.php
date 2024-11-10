<?php
require_once "../library/conexion.php";

class PersonaModel {
    private $conexion;
    
    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarPersona($codigo, $nombre, $detalle, $telefono, $departamento, $provincia, $distrito, $direccion, $rol, $password) {
        // Ejecutar el procedimiento almacenado insertPersona
        $sql = $this->conexion->query("CALL insertar_persona('{$codigo}', '{$nombre}', '{$detalle}', '{$telefono}', '{$departamento}', '{$provincia}', '{$distrito}', '{$direccion}', '{$rol}', '{$password}')");
        
        // Obtener el resultado como un objeto (suponiendo que el procedimiento devuelve un id o un status)
        $sql = $sql->fetch_object();
        return $sql;
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