<main class="main-content col-lg-8 col-md-12">
    <div class="container py-4">
        <!-- Botón para agregar categoría -->
        <div class="text-center mb-4">
            <a href="<?php echo BD_URL ?>admin/newcategoria" class="btn btn-warning">
                <i class="bi bi-plus-circle"></i> Agregar Categoría
            </a>
        </div>

        <!-- Título y descripción -->
        <h2 class="text-center">Gestión de Categorías</h2>
        <p class="text-center">Administra las categorías desde esta interfaz.</p>

        <!-- Tabla de categorías -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Detalle</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4" class="text-center">No hay categorías registradas.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
