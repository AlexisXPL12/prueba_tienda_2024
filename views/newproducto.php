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
        <input type="text" class="form-control" id="detalle" name="detalle" maxlength="100" rows="3" required></textarea>
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
        <input type="number" class="form-control" id="categoria" name="categoria" required>
    </div>

    <div class="form-group">
        <label for="imagen">Imagen</label>
        <input type="text" class="form-control" id="imagen" name="imagen" required>
    </div>

    <div class="form-group">
        <label for="proveedor">Proveedor</label>
        <input type="number" class="form-control" id="proveedor" name="proveedor" required>
    </div>

    <button type="submit" class="btn btn-primary" onclick="registrar_producto()">Agregar Producto</button>
</form>

<script src="<?php echo BD_URL ?>views/js/functions_productos.js"></script>