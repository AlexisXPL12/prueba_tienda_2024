<?php
require_once('../models/Model_persona.php');
$tipo = $_REQUEST['tipo'];

$objPersona = new PersonaModel();

if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrProveedores = $objPersona->obtenerProveedores();

    if (!empty($arrProveedores)) {
        for ($i = 0; $i < count($arrProveedores); $i++) { 
            $arrProveedores[$i]->options = '<a href="" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arrProveedores;
    }
    echo json_encode($arr_Respuesta);
}

else if ($tipo == "registrar") {
    if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $password = $_POST['password'];

        if (
            $codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || 
            $departamento == "" || $provincia == "" || $distrito == "" || 
            $direccion == "" || $rol == "" || $password == ""
        ) {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Campos vacíos');
        } else {
            // Registro de la persona en el modelo
            $arrPersona = $objPersona->registrarPersona($codigo, $nombre, $detalle, $precio, $departamento, $provincia, $distrito, $direccion, $rol, $password);

            if ($arrPersona->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar persona');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}
?>