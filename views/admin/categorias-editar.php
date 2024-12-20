<main class="main-content col-lg-8 col-md-12">
    <div class="container py-4">
        <!-- Encabezado con botón de regresar -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="<?php echo BD_URL ?>?admin=categorias" class="btn btn-warning">
                <i class="bi bi-arrow-left-circle"></i> Regresar
            </a>
            <h2 class="text-center">Actualizar Categoría</h2>
        </div>

        <!-- Formulario para agregar categoría -->
        <form id="formUploadCategoria">
            <div class="form-group mb-3">
                <input type="hidden" class="form-control" id="id_categoria" name="id_categoria" required>
            </div>
            <div class="form-group mb-3">
                <label for="nombre" class="form-label">Nombre de la Categoría:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" maxlength="20" required>
            </div>

            <div class="form-group mb-4">
                <label for="detalle" class="form-label">Detalle:</label>
                <input type="text" class="form-control" id="detalle" name="detalle" maxlength="30" required>
            </div>

            <div class="text-center">
                <button id="botonproducto" type="button" class="btn btn-success" onclick="actualizar_categoria()">
                    <i class="bi bi-plus-circle"></i> Actualizar Categoría
                </button>
            </div>
        </form>
    </div>
</main>

<!-- Script -->
<script src="<?php echo BD_URL ?>views/js/functions_categorias.js"></script>
<script>
    const id_c = <?php echo $_GET['id_c']; ?>;
    verCategoria(id_c);
</script>