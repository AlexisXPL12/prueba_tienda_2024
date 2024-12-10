<?php

require_once "../library/conexion.php";

class CategoriaModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarCategoria($nombre, $detalle)
    {
        $nombre = $this->conexion->real_escape_string($nombre);
        $detalle = $this->conexion->real_escape_string($detalle);
        $sql = $this->conexion->query("CALL insertar_categoria('{$nombre}', '{$detalle}')");
        $result = $sql->fetch_object();
        return $result;
    }
    public function obtenerCategorias()
    {
        $arrRespuesta = [];
        $sql = $this->conexion->query("SELECT * FROM categoria");
        while ($fila = $sql->fetch_object()) {
            array_push($arrRespuesta, $fila);
        }
        return $arrRespuesta;
    }
    public function verCategoria($id)
    {
        $id = $this->conexion->real_escape_string($id);
        $sql = $this->conexion->query("SELECT * FROM categoria WHERE id = '{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function obtenerCategoriasPorId($id)
    {
        $id = $this->conexion->real_escape_string($id);
        $sql = $this->conexion->query("SELECT * FROM categoria WHERE id = '{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function editarCategoria($id, $nombre, $detalle)
    {
        $id = $this->conexion->real_escape_string($id);
        $nombre = $this->conexion->real_escape_string($nombre);
        $detalle = $this->conexion->real_escape_string($detalle);
        $sql = $this->conexion->query("CALL actualizar_categoria('{$id}', '{$nombre}', '{$detalle}')");
        $result = $sql->fetch_object();
        return $result;
    }
    public function eliminarCategoria($id)
    {
        $id = $this->conexion->real_escape_string($id);
        $sql = $this->conexion->query("CALL eliminar_categoria('{$id}')");
        if (!$sql) {
            die("Error en la ejecución: " . $this->conexion->error);
        }
        $resultado = $sql->fetch_object();
        if ($resultado && $resultado->filas_afectadas > 0) {
            return true;
        }
        return false;
    }

    public function hayProductosAsociados($id)
    {
        $id = $this->conexion->real_escape_string($id);
        $sql = $this->conexion->query("SELECT COUNT(*) as count FROM producto WHERE id_categoria = '{$id}'");
        $result = $sql->fetch_object();
        return $result->count > 0;
    }
}
