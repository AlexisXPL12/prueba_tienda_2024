<?php
require_once "../library/conexion.php";

class CompraModel
{
    private $conexion;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function obtenerCompras(){
        $arrRespuesta = [];
        $sql = $this->conexion->query("SELECT * FROM compras");
        while ($fila = $sql->fetch_object()) {
            array_push($arrRespuesta, $fila);
        }
        return $arrRespuesta;
    }

    public function registrarCompra($producto, $cantidad, $precio, $trabajador)
    {

        $this->conexion->begin_transaction();

        $sqlCompra = "INSERT INTO compras (id_producto, cantidad, precio, id_trabajador) VALUES ('{$producto}', '{$cantidad}', '{$precio}', '{$trabajador}')";
        if (!$this->conexion->query($sqlCompra)) {
            throw new Exception("Error al registrar la compra: " . $this->conexion->error);
        }

        $sqlUpdateStock = "UPDATE producto SET stock = stock + {$cantidad} WHERE id = '{$producto}'";
        if (!$this->conexion->query($sqlUpdateStock)) {
            throw new Exception("Error al actualizar el stock: " . $this->conexion->error);
        }

        $this->conexion->commit();

        return (object) ['status' => true, 'id' => $this->conexion->insert_id, 'mensaje' => 'Compra registrada exitosamente y stock actualizado'];
    }
    public function verCompra($id) {
        $id = $this->conexion->real_escape_string($id);
        $sql = $this->conexion->query("SELECT * FROM compras WHERE id = '{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function ObtenerPrecioProducto($ProductoId)
    {
        $sql = "SELECT precio FROM producto WHERE id='{$ProductoId}'";
        $result = $this->conexion->query($sql);
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['precio'];
        }
        return null;
    }
    public function editarCompra($id, $producto_id, $cantidad, $precio_unitario, $trabajador_id) {
        $this->conexion->begin_transaction();
    
        // Obtener la cantidad actual de la compra
        $sqlGetCantidadCompra = "SELECT cantidad FROM compras WHERE id = '{$id}'";
        $result = $this->conexion->query($sqlGetCantidadCompra);
        if (!$result) {
            throw new Exception("Error al obtener la cantidad de la compra: " . $this->conexion->error);
        }
        $row = $result->fetch_assoc();
        $cantidadActualCompra = $row['cantidad'];
        $result->free(); // Liberar el resultado
    
        // Actualizar la compra
        $sqlCompra = "UPDATE compras SET id_producto = '{$producto_id}', cantidad = '{$cantidad}', precio = '{$precio_unitario}', id_trabajador = '{$trabajador_id}' WHERE id = '{$id}'";
        if (!$this->conexion->query($sqlCompra)) {
            throw new Exception("Error al actualizar la compra: " . $this->conexion->error);
        }
    
        // Calcular la diferencia de cantidad
        if ($cantidad > $cantidadActualCompra) {
            $diferenciaCantidad = $cantidad - $cantidadActualCompra;
        } elseif ($cantidad < $cantidadActualCompra) {
            $diferenciaCantidad = $cantidadActualCompra - $cantidad;
        } else {
            $diferenciaCantidad = 0;
        }
    
        // Actualizar el stock del producto
        if ($cantidad > $cantidadActualCompra) {
            $sqlUpdateStock = "UPDATE producto SET stock = stock + {$diferenciaCantidad} WHERE id = '{$producto_id}'";
        } elseif ($cantidad < $cantidadActualCompra) {
            $sqlUpdateStock = "UPDATE producto SET stock = stock - {$diferenciaCantidad} WHERE id = '{$producto_id}'";
        } else {
            $sqlUpdateStock = "UPDATE producto SET stock = stock WHERE id = '{$producto_id}'";
        }
    
        if (!$this->conexion->query($sqlUpdateStock)) {
            throw new Exception("Error al actualizar el stock: " . $this->conexion->error);
        }
    
        $this->conexion->commit();
    
        return (object) ['status' => true, 'id' => $id, 'mensaje' => 'Compra actualizada exitosamente y stock actualizado'];
    }
    
    public function eliminarCompra($id)
    {
        $sql = $this->conexion->query("CALL eliminar_compra('{$id}')");
        if (!$sql) {
            die("Error en la ejecución: ". $this->conexion->error);
        }
        $resultado = $sql ->fetch_object();
        if ($resultado && $resultado->filas_afectadas > 0) {
            return true;
        }
        return false;
    }
}
