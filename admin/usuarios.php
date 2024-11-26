<main class="main-content col-lg-12 col-md-12 ">
    <div class="text-center mt-4">
        <a href="<?php echo BD_URL ?>?admin=newpersona" class="btn btn-warning">
            <i class="bi bi-plus-circle"></i> Agregar Usuario
        </a>
    </div>
    <div class="container py-4 col-12">
        <h2 class="text-center">Bienvenido al Panel de Admnistrador</h2>
        <p class="text-center">Gestiona tus usuarios desde esta interfaz.</p>

        <!-- Tabla de productos -->
        <div class="table-responsive" id="tabla-contenido">
            <table class="table table-bordered col-12" id="tabla_personas">
                <thead class="table text-center">
                    <tr>
                        <th>N°</th>
                        <th>Numero Identidad</th>
                        <th>Razon Social</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Departamento</th>
                        <th>Provincia</th>
                        <th>Distrito</th>
                        <th>Codigo Postal</th>
                        <th>Dirección</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th>Fecha Registro</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <!-- Cargar las personas en la tabla -->
                </tbody>
            </table>
        </div>
    </div>
</main>
<script src="<?php echo BD_URL ?>views/js/functions_personas.js"></script>
<script>
    listar_personas();
</script>