<?php
require_once "../library/conexion.php";

class PersonaModel
{
    private $conexion;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarPersona($codigo, $nombre, $telefono, $correo, $departamento, $provincia, $distrito, $direccion, $rol, $codigo_postal, $password)
    {
        // Ejecutar el procedimiento almacenado insertPersona
        $sql = $this->conexion->query("CALL insertar_persona('{$codigo}', '{$nombre}', '{$telefono}', '{$correo}', '{$departamento}', '{$provincia}', '{$distrito}','{$codigo_postal}', '{$direccion}','{$rol}', '{$password}')");

        // Obtener el resultado como un objeto (suponiendo que el procedimiento devuelve un id o un status)
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function BuscarPersonaDNI($usuario){
        $sql = $this->conexion->query("SELECT * FROM persona WHERE nro_identidad = '{$usuario}'");
        $sql = $sql->fetch_object();
        return $sql;
    }        

    public function obtenerProveedores()
    {
        $arrRespuesta = [];
        $sql = $this->conexion->query("SELECT * FROM persona WHERE rol = 'proveedor'");
        while ($fila = $sql->fetch_object()) {
            array_push($arrRespuesta, $fila);
        }
        return $arrRespuesta;
    }

    public function obtenerTrabajadores()
    {
        $arrRespuesta = [];
        $sql = $this->conexion->query("SELECT * FROM persona WHERE rol = 'trabajador'");
        while ($fila = $sql->fetch_object()) {
            array_push($arrRespuesta, $fila);
        }
        return $arrRespuesta;
    }
}

?>