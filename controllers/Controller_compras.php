<?php
require_once('../models/Model_compras.php');
$tipo  = $_REQUEST['tipo'];

$objCompra = new CompraModel();

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

            if ($arrCompra->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Compra registrada exitosamente');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar la compra');
            }
        }
        echo json_encode($arr_Respuesta);
    }
}