<main class="main-content col-lg-8 col-md-12">
    <div class="d-flex justify-content-between align-items-center my-4">
        <a href="<?php echo BD_URL ?>?admin=compras" class="btn btn-warning">
            <i class="bi bi-arrow-left-circle"></i> Regresar
        </a>
        <h2 class="text-center m-0">Actualizar Compra</h2>
    </div>
    <form id="formCompra" action="">
        <div class="form-group">
            <input type="hidden" class="form-control" id="id_compra" name="id_compra" required>
        </div>
        <div class="form-group">
            <label for="producto">Producto:</label>
            <select class="form-control" id="producto" name="producto" onchange="obtenerPrecioUnitario()" required>
                <option value="">Selecciona un producto</option>
            </select>
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
        </div>

        <div class="form-group">
            <label for="precio">Precio Unitario:</label>
            <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="trabajador">Trabajador que registra la compra:</label>
            <select class="form-control" id="trabajador" name="trabajador" required>
                <option value="">Selecciona un trabajador</option>
            </select>
        </div>
        <br>

        <button type="button" class="btn btn-success" onclick="actualizar_compra()">Actualizar Compra</button>
    </form>

    <script src="<?php echo BD_URL ?>views/js/functions_compras.js"></script>

    <script>
        const id_compra = <?php echo $_GET['id_compra']; ?>;
        verCompra(id_compra);
        listar_productos();
        listar_trabajadores();
    </script>