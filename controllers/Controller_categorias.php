<?php
require_once('../models/Model_categorias.php');
$tipo  = $_REQUEST['tipo'];

$objCategoria = new CategoriaModel();

if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' =>'');
    $arrCategorias = $objCategoria->obtenerCategorias();

    if (!empty($arrCategorias)) {
        //recorremos el array para agregar las opciones de la categoria
        for ($i=0; $i < count($arrCategorias); $i++) { 
            $id_categoria = $arrCategorias[$i]-> id;
            $nombre_categoria = $arrCategorias[$i]-> nombre;
            $opciones = '<a href="" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
            $arrCategorias [$i] -> options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arrCategorias;
    }
    echo json_encode($arr_Respuesta);
}

?>