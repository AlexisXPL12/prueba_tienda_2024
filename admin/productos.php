<div class="text-center mt-4">
    <a href="<?php echo BD_URL ?>admin/newproducto" class="btn btn-warning">
        <i class="bi bi-plus-circle"></i> Agregar Producto
    </a>
</div>
<main class="main-content col-lg-8 col-md-12">
    <div class="container py-4">
        <h2 class="text-center">Bienvenido al Panel de Usuario</h2>
        <p class="text-center">Gestiona tus productos desde esta interfaz.</p>

        <!-- Tabla de productos -->
        <div class="table-responsive" id="tabla-contenido">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Categoría</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="7" class="text-center">No hay productos registrados.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>