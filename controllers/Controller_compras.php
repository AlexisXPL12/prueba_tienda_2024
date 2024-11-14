<?php
require_once('../models/Model_compras.php');
$tipo  = $_REQUEST['tipo'];

$objCompra = new CompraModel();

if ($tipo == "obtener_precio") {
    $productoId = $_GET['producto_id'] ?? null;
    if ($productoId) {
        $arrPrecio = $objCompra->ObtenerPrecioProducto($productoId);
        if ($arrPrecio !== null) {
            $arr_Respuesta = array('status' => true, 'precio' => $arrPrecio);
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Producto no encontrado');
        }
    } else {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Falta el producto_id');
    }
    echo json_encode($arr_Respuesta);
}

if ($tipo == "registrar") {
    if ($_POST) {
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $trabajador = $_POST['trabajador'];

        if ($producto == "" || $cantidad == "" || $precio == "" || $trabajador == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Campos vacíos');
        } else {
            $arrCompra = $objCompra->registrarCompra($producto, $cantidad, $precio, $trabajador);

            if ($arrCompra->status) {
                $arr_Respuesta = array('status' => true, 'mensaje' => $arrCompra->mensaje);
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => $arrCompra->mensaje);
            }
        }
        echo json_encode($arr_Respuesta);
    }
}
