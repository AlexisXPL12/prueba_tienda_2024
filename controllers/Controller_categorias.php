<?php
require_once('../models/Model_categorias.php');
$tipo  = $_REQUEST['tipo'];

$objCategoria = new CategoriaModel();

if ($tipo == "registrar") {
    // print_r($_POST);

    if ($_POST) {
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];

        if ($nombre == "" || $detalle == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error campos vacios');
        } else {
            $arrCategoria = $objCategoria->registrarCategoria($nombre, $detalle);

            if ($arrCategoria->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar categoria');
            }
            echo json_encode($arr_Respuesta);
        }
    }
} else if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrCategorias = $objCategoria->obtenerCategorias();

    if (!empty($arrCategorias)) {
        //recorremos el array para agregar las opciones de la categoria
        for ($i = 0; $i < count($arrCategorias); $i++) {
            $id_categoria = $arrCategorias[$i]->id;
            $nombre_categoria = $arrCategorias[$i]->nombre;
            $detalle = $arrCategorias[$i]->detalle;
            $opciones = '<button class="btn btn-warning btn-sm m-2" onclick="editar_categoria(${element.id})">
                        <i class="fas fa-edit"></i> Editar
                        </button>
                        <button class="btn btn-danger btn-sm m-2" onclick="eliminar_categoria(${element.id})">
                        <i class="fas fa-trash-alt"></i> Eliminar
                        </button>';
            $arrCategorias[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arrCategorias;
    }
    echo json_encode($arr_Respuesta);
}
