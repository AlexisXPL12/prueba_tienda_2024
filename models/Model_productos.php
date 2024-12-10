<?php

require_once "../library/conexion.php";

class ProductoModel{

    private $conexion;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    
    public function obtenerProductos(){
        $arrRespuesta = [];
        $sql = $this->conexion->query("SELECT * FROM producto");
        while ($fila = $sql->fetch_object()){
            array_push($arrRespuesta, $fila);
        }
        return $arrRespuesta;
    }

    public function verProducto($id){
        $id = $this->conexion->real_escape_string($id);
        $sql = $this->conexion->query("SELECT * FROM producto WHERE id = '{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function ObtenerProductoPorId($id){
        $id = $this->conexion->real_escape_string($id);
        $sql = $this->conexion->query("SELECT * FROM producto WHERE id = '{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function registrarProducto($codigo,$nombre,$detalle, $precio,$stock,$categoria,
    $imagen,$proveedor,$tipoArchivo){
        $sql = $this->conexion->query("CALL insertProducto('{$codigo}','{$nombre}',
                                                            '{$detalle}','{$precio}','{$stock}',
                                                            '{$categoria}','{$imagen}','{$proveedor}','{$tipoArchivo}')");
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function actualizar_imagen($id,$imagen){
        $sql = $this->conexion->query("UPDATE productos SET imagen='{$imagen}' WHERE id='{$id}'");
        return $sql;
    }

    public function editarProducto($id,$nombre, $detalle, $precio, $stock, $categoria, $proveedor){
        $sql = $this->conexion->query("CALL actualizar_producto('{$id}','{$nombre}','{$detalle}','{$precio}','{$stock}','{$categoria}','{$proveedor}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function hayDependencias($id){
        $id = $this->conexion->real_escape_string($id);
        $sql = $this->conexion->query("SELECT COUNT(*) as count FROM producto WHERE id_categoria = '{$id}'");
        $result = $sql->fetch_object();
        return $result->count > 0;
    }
    public function eliminarProducto($id){
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
    
}

?>