<form id="formProducto" action="">
    <h2>Agregar Producto</h2>
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

    <button id="botonproducto" type="button" class="btn btn-warning" onclick="registrar_producto()">Agregar Producto</button>
</form>

<script src="<?php echo BD_URL ?>views/js/functions_productos.js"></script>
<script>
    listar_categoria();
    listar_proveedor();
</script>