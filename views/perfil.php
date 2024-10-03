<!-- Imagen encabezado -->
<div class="cart-header">
        <div class="col-2">
            <button onclick="goBack()" class="btn btn-danger">Volver</button>
        </div>
        <div class="col-8">
            <h1><img src="img/logoperfil.png" alt="Carrito Icon" class="cart-icon">Perfil</h1>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <!--CONTENIDO-->
    <div class="container col-12 my-5">
        <div class="row" style="justify-content: center;">
            <div class="col-md-4">
                <div class="container" style="margin-top: 30%;">
                    <div class="row justify-content-center">
                        <a href="#">
                            <img src="img/iamgenesdetalleperfil.svg" alt="Profile Image" class="img-fluid" width="200">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="profile-card shadow p-3">
                    <form id="perfilForm">
                        <div class="form-group">
                            <label for="apodo">Apodo</label>
                            <input type="text" class="form-control" id="apodo">
                            <span class="invalid-feedback">Por favor, ingresa tu apodo.</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos">
                                <span class="invalid-feedback">Por favor, ingresa tu nombre.</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fechaNacimiento">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="fechaNacimiento">
                                <span class="invalid-feedback">Por favor, ingresa tu fecha de nacimiento.</span>
                                <span class="invalid-feedback">Por favor, ingresa tus apellidos.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="genero">Género</label>
                                <select id="genero" class="form-control">
                                    <option selected>Seleccionar...</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Otro</option>
                                </select>
                                <span class="invalid-feedback">Por favor, selecciona tu género.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo">
                            <span class="invalid-feedback">Por favor, ingresa un correo electrónico válido.</span>
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion">
                            <span class="invalid-feedback">Por favor, ingresa tu dirección.</span>
                        </div>
                        <div class="form-group">
                            <label for="telefono">N° de Celular o Teléfono</label>
                            <input type="tel" class="form-control" id="telefono">
                            <span class="invalid-feedback">Por favor, ingresa tu número de celular o teléfono.</span>
                        </div>
                        <button onclick="guardarPerfil()" type="submit" class="btn btn-block"
                            style="background: #f4921e;">Guardar</button>
                        <button class="btn btn-block" style="background: #dc3545;" type="submit"
                            onclick="limpiarPerfil()">Limpiar</button>
                        <div class="alert success" id="success-alert">Perfil guardado correctamente.</div>
                        <div class="alert error" id="error-alert">Hubo un error al guardar el perfil.</div>
                    </form>
                </div>
            </div>
        </div>
    </div>