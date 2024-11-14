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

    public function registrarCompra($producto, $cantidad, $precio, $trabajador)
    {

        $this->conexion->begin_transaction();

        $sqlCompra = "INSERT INTO compras (id_producto, cantidad, precio, id_trabajador) VALUES ('{$producto}', '{$cantidad}', '{$precio}', '{$trabajador}')";
        if (!$this->conexion->query($sqlCompra)) {
            throw new Exception("Error al registrar la compra: " . $this->conexion->error);
        }

        $sqlUpdateStock = "UPDATE producto SET stock = stock - {$cantidad} WHERE id = '{$producto}'";
        if (!$this->conexion->query($sqlUpdateStock)) {
            throw new Exception("Error al actualizar el stock: " . $this->conexion->error);
        }

        $this->conexion->commit();

        return (object) ['status' => true, 'id' => $this->conexion->insert_id, 'mensaje' => 'Compra registrada exitosamente y stock actualizado'];
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
}
