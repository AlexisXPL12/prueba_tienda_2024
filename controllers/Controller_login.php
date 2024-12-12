<?php
require_once('../models/Model_persona.php');

$objPersona = new PersonaModel();
$tipo = $_GET['tipo'];

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

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
}
if($tipo == 'cerrar_sesion') {
    session_start();
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
    $arr_Respuesta = array('status' => true, 'mensaje' => 'Cerrar sesión correctamente');
    echo json_encode($arr_Respuesta);
        
}
die;

?>