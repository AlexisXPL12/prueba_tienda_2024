<main class="main-content col-lg-8 col-md-12">
<div class="d-flex justify-content-between align-items-center my-4">
    <a href="<?php echo BD_URL ?>?admin=productos" class="btn btn-warning">
        <i class="bi bi-arrow-left-circle"></i> Regresar
    </a>
    <h2 class="text-center m-0">Agregar Producto</h2>
</div>
<form id="formProducto" action="">
    <div class="form-group">
        <label for="codigo">Código:</label>
        <input type="text" class="form-control" id="codigo" name="codigo" maxlength="20" required>
    </div>

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" required>
    </div>

    <div class="form-group">
        <label for="detalle">Detalle:</label>
        <input type="text" class="form-control" id="detalle" name="detalle" maxlength="100" required>
    </div>

    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="number" class="form-control" id="precio" name="precio" step="0.01" min="0" max="9999.99" required>
    </div>

    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" class="form-control" id="stock" name="stock" min="0" max="99999" required>
    </div>

    <div class="form-group">
        <label for="categoria">Categoría</label>
        <select class="form-control" id="categoria" name="categoria" required>
            <option value="">Seleccione una categoría</option>
        </select>
    </div>

    <div class="form-group">
        <label for="imagen">Imagen del Producto</label>
        <div class="file-upload-wrapper" id="file-upload-wrapper">
            <input type="file" id="imagen" name="imagen" required>
        </div>
    </div>

    <div class="form-group">
        <label for="proveedor">Proveedor</label>
        <select class="form-control" id="proveedor" name="proveedor" required>
            <option value="">Seleccione un proveedor</option>
        </select>
    </div>
    <br>

    <button id="botonproducto" type="button" class="btn btn-success" onclick="registrar_producto()">Agregar Producto</button>
</form>
</main>

<script src="<?php echo BD_URL ?>views/js/functions_productos.js"></script>
<script>
    listar_categoria();
    listar_proveedor();
</script>