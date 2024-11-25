<?php
session_start();

class vistaModelo
{
    protected static function obtener_vistas($vista)
    {
        $palabras_permitidas = [
            'producto',
            'inicio',
            'carrito',
            'tienda',
            'contactar',
            'tienda-producto',
            'servicios',
            'deseados',
            'perfil',
            'cursos',
            'tienda-p-select',
            'categoria',
        ];

        // if(!isset($_SESSION['sesion_ventas2024_id'])){
        //     return "login";
        // }

        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "login" || $vista == "index") {
            $contenido = "login";
        } elseif ($vista == "registrate") {
            $contenido = "registrate";
        } else {
            $contenido  = "404";
        }
        return $contenido;
    }

    protected static function obtener_vistaAdmin($vista)
    {
        $palabras_permitidas = [
            'paneladmin',
            'usuarios',
            'usuario-nuevo',
            'usuarios-editar',
            'usuarios-eliminar',
            'categorias',
            'categorias-nueva',
            'categorias-editar',
            'categorias-eliminar',
            'productos',
            'producto-nuevo',
            'producto-editar',
            'producto-eliminar',
            'compras',
            'compras-nueva',
            'compras-editar',
            'compras-eliminar',
            'newcompra',
            'newpersona',
            'newcategoria',
            'newproducto'
        ];
        // if(!isset($_SESSION['sesion_ventas2024_id'])){
        //     return "login";
        // }
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./admin/" . $vista . ".php")) {
                $contenido = "./admin/" . $vista . ".php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "configuracionAdmin") {
            $contenido = "configuracionAdmin";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
