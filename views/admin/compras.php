<main class="main-content col-lg-12 col-md-12">
    <div class="text-center mt-4">
        <a href="<?php echo BD_URL ?>?admin=newcompra" class="btn btn-warning">
            <i class="bi bi-plus-circle"></i> Agregar Compras
        </a>
    </div>
    <div class="container py-4 col-12">
        <h2 class="text-center">Bienvenido al Panel de Admnistrador</h2>
        <p class="text-center">Gestiona tus compras desde esta interfaz.</p>
        <!-- Tabla de compras -->
        <div class="table-responsive" id="tabla-contenido">
            <table class="table table-bordered col-12" id="tabla_compras">
                <thead class="table text-center">
                    <tr>
                        <th>N°</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Fecha de la compra</th>
                        <th>Trabajador que registra la compra</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <!-- Cuerpo de la tabla -->
                    <!-- Aquí se cargan las compras -->
                    <!-- Fin de la carga de compras -->
                </tbody>
            </table>
        </div>
    </div>
    </div>
</main>
<script src="<?php echo BD_URL ?>views/js/functions_compras.js"></script>
<script>
    listar_compras();
</script>