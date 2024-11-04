<?php 
require_once('../models/Model_productos.php');
$tipo  = $_REQUEST['tipo'];

//instancio la clase modeloproducto
$objProducto = new ProductoModel();

if ($tipo == "registrar") {
    //print_r($_POST);
    if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $imagen = $_POST['imagen'];
        $proveedor = $_POST['proveedor'];

        if ($codigo == "" || $nombre == "" || $detalle == "" || 
        $precio == "" || $stock == "" || $categoria == "" || 
        $imagen === "" || $proveedor == "") {
            $arr_Respuesta = array('status'=> false,'mensaje'=>'Error campos vacíos');
        }else{
            $arrProducto = $objProducto-> registrarProducto($codigo,$nombre,$detalle,$precio,$stock,$categoria,$imagen,$proveedor);
            
            if ($arrProducto->id>0) {
                $arr_Respuesta = array('status'=> true,'mensaje'=>'Registro exitoso');
            }else{
                $arr_Respuesta = array('status'=> false,'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }

    }
}

?>