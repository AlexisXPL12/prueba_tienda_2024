<!-- Imagen encabezado -->
<div class="cart-header">
        <div class="col-2">
            <button onclick="goBack()" class="btn btn-danger">Volver</button>
        </div>
        <div class="col-8">
            <h1><img src="img/logocontactarco.png" alt="Carrito Icon" class="cart-icon">Contactar</h1>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <!--CONTENIDO-->

    <div class="container-2 mt-5">
        <div class="contact-card shadow p-3">
            <div class="contact-info">
                <div>
                    <div class="icon-container-2">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <p><strong>Localización</strong><br>Av. San Martín 427 Huanta<br>Abierto de lunes a viernes de 8
                            a.m. a 8:30 p.m.</p>
                    </div>
                </div>
                <div>
                    <div class="icon-container-2">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <p><strong>Contactar</strong><br>+51 934 717 131</p>
                    </div>
                </div>
                <div>
                    <div class="icon-container-2">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <p><strong>Correo</strong><br>Ingrese Correo</p>
                    </div>
                </div>
            </div>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nombre (requerido)</label>
                        <input type="text" class="form-control" id="name" placeholder="Tu nombre*" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email (requerido)</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingrese su Email*" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone">Teléfono (opcional)</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Ingrese su Teléfono">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="service">Servicios (requerido)</label>
                        <select type="text" class="form-control" id="service" placeholder="Ingrese consulta" required>
                            <option value="1">Seleccione una opción</option>
                            <option value="1">Consulta</option>
                            <option value="2">Reclamo</option>
                            <option value="3">Sugerencia</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Tu Mensaje*" required></textarea>
                </div>
                <button type="submit" class="btn btn-warning btn-block">Enviar</button>
            </form>
        </div>
    </div>