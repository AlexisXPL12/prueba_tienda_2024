<?php
require_once('../models/Model_persona.php');

$objPersona = new PersonaModel();
$tipo = $_GET['tipo'];

if ($tipo == 'iniciar_sesion') {
    // print_r($_POST);
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);

    $arr_Respuesta = array('status' => false, 'mensaje' => '');

    $arr_Persona = $objPersona->BuscarPersonaDNI($usuario);
    if (empty($arr_Persona)) {
        $arr_Respuesta['mensaje'] = 'Error: Usuario no encontrado';
    } else {
        // Verificar la contraseña que esta con el metodo hash
        if (password_verify($password, $arr_Persona->password)) {
            session_start();
            $_SESSION['sesion_ventas2024_id'] = $arr_Persona->id;
            $_SESSION['sesion_ventas2024_dni'] = $arr_Persona->nro_identidad;
            $_SESSION['sesion_ventas2024_nombres'] = $arr_Persona->razon_social;

            $arr_Respuesta = array('status' => true, 'mensaje' => 'Ingresar al sistema');
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error: Contraseña incorrecta');
        }
    }
    echo json_encode($arr_Respuesta);  
}elseif($tipo == 'cerrar_sesion') {
        session_start();
        session_unset();
        session_destroy();
        $arr_Respuesta = array('status' => true, 'mensaje' => 'Cerrar sesión correctamente');
        echo json_encode($arr_Respuesta);
}

die;

?>