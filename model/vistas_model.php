<?php

class vistaModelo{
    protected static function obtener_vistas($vista)
    {
        $palabras_permitidas = ['usuario', 'producto'];
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./view/" . $vista . ".php")) {
                $contenido = "./view/" . $vista . ".php";
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
