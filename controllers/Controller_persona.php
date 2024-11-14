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
} else if ($tipo == 'listarTrabajadores') {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrTrabajadores = $objPersona->obtenerTrabajadores();
    for ($i = 0; $i < count($arrTrabajadores); $i++) {
        $arrTrabajadores[$i]->options = '<a href="" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arrTrabajadores;
    echo json_encode($arr_Respuesta);
} else if ($tipo == "registrar") {
    if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $codigo_postal = $_POST['codigo_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $password = password_hash($_POST['codigo'], PASSWORD_DEFAULT);

        if (
            $codigo == "" || $nombre == "" || $telefono == "" || $correo == "" ||
            $departamento == "" || $provincia == "" || $distrito == "" || $codigo_postal == "" ||
            $direccion == "" || $rol == "" || $password == ""
        ) {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Campos vacíos');
        } else {
            // Registro de la persona en el modelo
            $arrPersona = $objPersona->registrarPersona($codigo, $nombre, $telefono, $correo, $departamento, $provincia, $distrito, $direccion, $rol, $codigo_postal, $password);

            if ($arrPersona->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar persona');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}
