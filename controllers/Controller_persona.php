<?php
require_once('../models/Model_persona.php');
$tipo = $_REQUEST['tipo'];

$objPersona = new PersonaModel();

if ($tipo == 'listar') {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrPersonas = $objPersona->obtenerPersonas();

    if (!empty($arrPersonas)) {
        for ($i = 0; $i < count($arrPersonas); $i++) {
            $id_persona = $arrPersonas[$i]->id;
            $nro_identidad = $arrPersonas[$i]->nro_identidad;
            $razon_social = $arrPersonas[$i]->razon_social;
            $telefono = $arrPersonas[$i]->telefono;
            $correo = $arrPersonas[$i]->correo;
            $departamento = $arrPersonas[$i]->departamento;
            $provincia = $arrPersonas[$i]->provincia;
            $distrito = $arrPersonas[$i]->distrito;
            $codigo_postal = $arrPersonas[$i]->codigo_postal;
            $direccion = $arrPersonas[$i]->direccion;
            $rol = $arrPersonas[$i]->rol;
            $password = $arrPersonas[$i]->password;
            $estado = $arrPersonas[$i]->estado;
            $fecha_reg = $arrPersonas[$i]->fecha_reg;
            $opciones = '<a class="btn btn-warning btn-sm m-2" href="' . BD_URL . '?admin=usuarios-editar&id_u=' . $id_persona . '"">
                                        <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <button class="btn btn-danger btn-sm m-2" onclick="eliminar_persona('.$id_persona.');">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                        </button>';
            $arrPersonas[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arrPersonas;
    }
    echo json_encode($arr_Respuesta);
}
if ($tipo == "listar_proveedor") {
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
if ($tipo == 'listarTrabajadores') {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arrTrabajadores = $objPersona->obtenerTrabajadores();
    for ($i = 0; $i < count($arrTrabajadores); $i++) {
        $arrTrabajadores[$i]->options = '<a href="" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arrTrabajadores;
    echo json_encode($arr_Respuesta);
}
if ($tipo == "registrar") {
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
if ($tipo == 'ver_persona') {
    $id_persona = $_POST['idPersona'];
    $arr_Respuesta = $objPersona->verPersona($id_persona);
    if (empty($arr_Respuesta)){
        $response = array('status' => false, 'mensaje' => 'Usuario no encontrado');
    }else{
        $response = array('status' => true, 'mesaje' => 'Usuario encontrado', 'datos' => $arr_Respuesta);
    }
    echo json_encode($response);
}
if ($tipo == "editar") {
    if ($_POST) {
        $id = $_POST['id_persona'];
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
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $estado = $_POST['estado'];

        if ($id == "" || $codigo == "" || $nombre == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == "" || $distrito == "" || $codigo_postal == "" || $direccion == "" || $rol == "" || $estado == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: campos vacíos');
        } else {
            $arrPersona = $objPersona->editarPersona($id, $codigo, $nombre, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol,$password, $estado);
            if ($arrPersona->p_id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualización exitosa');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar la persona');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

if ($tipo == 'eliminar') {
    $id_persona = $_POST['id'];
    if($objPersona->hayPersonasAsociadas($id_persona)){
        $arr_Respuesta = array('status' => false,'mensaje' => 'No se puede eliminar la persona, posee compras o productos asociados.');
    }else{
        $resultado = $objPersona->eliminarPersona($id_persona);
        if ($resultado) {
            $arr_Respuesta = array('status' => true,'mensaje' => 'Persona eliminada correctamente');
        } else {
            $arr_Respuesta = array('status' => false,'mensaje' => 'Error al eliminar la persona');
        }
    }
    echo json_encode($arr_Respuesta);
}