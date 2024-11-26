<main class="main-content col-lg-12 col-md-12 ">
    <div class="text-center mt-4">
        <a href="<?php echo BD_URL ?>?admin=newproducto" class="btn btn-warning">
            <i class="bi bi-plus-circle"></i> Agregar Producto
        </a>
    </div>
    <div class="container py-4 col-12">
        <h2 class="text-center">Bienvenido al Panel de Admnistrador</h2>
        <p class="text-center">Gestiona tus productos desde esta interfaz.</p>

        <!-- Tabla de productos -->
        <div class="table-responsive" id="tabla-contenido">
            <table class="table table-bordered col-12" id="tabla_productos">
                <thead class="table text-center">
                    <tr>
                        <th>N°</th>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Categoría</th>
                        <th>Proveedor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <!-- Cargar los productos en la tabla -->
                    <!-- Aquí se cargan los productos -->
                    <!-- Fin de la carga de productos -->
                </tbody>
            </table>
        </div>
    </div>
</main>
<script src="<?php echo BD_URL ?>views/js/functions_productos.js"></script>
<script>
    listar_productos();
</script>