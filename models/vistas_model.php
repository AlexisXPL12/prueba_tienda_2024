<?php

class vistaModelo{
    protected static function obtener_vistas($vista)
    {
        $palabras_permitidas = ['usuarios','usuario','usuario-modificar', 'productos','producto-modificar','producto','inicio','carrito',
                                'tienda','contactar','tienda-producto','servicios','deseados','perfil','registrarse','cursos','tienda-p-select'];
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "login" || $vista == "index") {
            $contenido = "login";
        } else {
            $contenido  = "404";
        }
        return $contenido;
    }
}
