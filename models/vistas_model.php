<?php
session_start();

class vistaModelo
{
    protected static function obtener_vistas($vista)
    {
        // Lista de vistas permitidas
        $palabras_permitidas = [
            'producto', 'inicio', 'carrito', 'tienda', 'contactar', 'tienda-producto', 
            'servicios', 'deseados', 'perfil', 'cursos', 'tienda-p-select', 'categoria',
            'admin/paneladmin', 'admin/usuarios', 'admin/usuario-nuevo', 'admin/usuarios-editar', 
            'admin/usuarios-eliminar', 'admin/categorias', 'admin/categorias-nueva', 'admin/categorias-editar', 
            'admin/categorias-eliminar', 'admin/productos', 'admin/producto-nuevo', 'admin/producto-editar', 
            'admin/producto-eliminar', 'admin/compras', 'admin/compras-nueva', 'admin/compras-editar', 
            'admin/compras-eliminar', 'admin/newcompra', 'admin/newpersona', 'admin/newcategoria', 'admin/newproducto'
        ];

        // Si no hay sesión activa, redirigir al login, excepto para la vista de registro
        // if (!isset($_SESSION['sesion_ventas2024_id']) && $vista != 'registrate') {
        //     return "login"; // Redirige a login si no hay sesión activa y no es 'registrate'
        // }

        // Comprobaciones de vistas específicas
        if ($vista == "login" || $vista == "index") {
            return "login";
        }
        if ($vista == "registrate") {
            return "registrate";
        }

        // Verificar si la vista está permitida
        if (in_array($vista, $palabras_permitidas)) {
            // Verificar si es una vista de "admin"
            if (str_starts_with($vista, "admin/")) {
                $ruta = "./views/" . $vista . ".php";
            } else {
                $ruta = "./views/" . $vista . ".php";
            }

            // Comprobar si el archivo existe
            if (is_file($ruta)) {
                return $ruta;
            }
        }

        // Si no coincide ninguna condición, devolver 404
        return "404";
    }
}
?>
