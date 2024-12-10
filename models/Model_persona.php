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

    public function obtenerPersonas(){
        $arrRespuesta = [];
        $sql = $this->conexion->query("SELECT * FROM persona");
        while ($fila = $sql->fetch_object()) {
            array_push($arrRespuesta, $fila);
        }
        return $arrRespuesta;
    }

    public function verPersona($id){
        $id = $this->conexion->real_escape_string($id);
        $sql = $this->conexion->query("SELECT * FROM persona WHERE id = '{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function obtenerPersonaPorId($id){
        $id = $this->conexion->real_escape_string($id);
        $sql = $this->conexion->query("SELECT * FROM persona WHERE id = '{$id}'");
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
    public function editarPersona($id, $codigo, $nombre, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol,$password, $estado) {
        $sql = $this->conexion->query("CALL actualizar_persona('{$id}', '{$codigo}', '{$nombre}', '{$telefono}', '{$correo}', '{$departamento}', '{$provincia}', '{$distrito}', '{$codigo_postal}', '{$direccion}', '{$rol}','{$password}', '{$estado}')");
        $result = $sql->fetch_object();
        return $result;
    }
    public function eliminarPersona($id) {
        $id = $this->conexion->real_escape_string($id);
        $sql = $this->conexion->query("CALL eliminar_persona('{$id}')");
        if (!$sql) {
            die("Error en la ejecución: " . $this->conexion->error);
        }
        $resultado = $sql->fetch_object();
        if ($resultado && $resultado->filas_afectadas > 0) {
            return true;
        }
        return false;
    }

    public function hayPersonasAsociadas($id) {
        $id = $this->conexion->real_escape_string($id);
        $sql = $this->conexion->query("
            SELECT COUNT(*) as count
            FROM venta
            WHERE id_cliente = '{$id}' OR id_vendedor = '{$id}'
            UNION ALL
            SELECT COUNT(*) as count
            FROM compras
            WHERE id_trabajador = '{$id}'
        ");
        if (!$sql) {
            die("Error en la ejecución: " . $this->conexion->error);
        }
        $result = $sql->fetch_object();
        return $result->count > 0;
    }
}

?>