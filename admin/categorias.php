<main class="main-content col-lg-8 col-md-12">
        <!-- Botón para agregar categoría -->
        <div class="text-center mb-4">
            <a href="<?php echo BD_URL ?>admin/newcategoria" class="btn btn-warning">
                <i class="bi bi-plus-circle"></i> Agregar Categoría
            </a>
        </div>
        <div class="container py-4 col-12">
        <!-- Título y descripción -->
        <h2 class="text-center">Gestión de Categorías</h2>
        <p class="text-center">Administra las categorías desde esta interfaz.</p>

        <!-- Tabla de categorías -->
        <div class="table-responsive">
            <table class="table table-bordered col-12" id="tabla_categorias">
                <thead class="table text-center">
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Detalle</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                        <!-- Cargar los productos en la tabla -->
                </tbody>
            </table>
        </div>
    </div>
</main>
<script src="<?php echo BD_URL?>views/js/functions_categorias.js"></script>
<script>
    listar_categorias();
</script>
