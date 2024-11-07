<!-- Footer -->
<footer class="footer text-md-left w-100">
            <img src="img/imagenpiedepagina.png" alt="Background Image">
            <div class="container-f col-12">
                <div class="row">
                    <div class="col-9">
                        <h5 style="font-size: 30px;">¿Tienes una consulta? <br> ¡¡Escribenos!!</h5>
                    </div>
                    <div class="col-3">
                        <h5>Consultas</h5>
                        <div class="social-icons">
                            <a href="#" style="color: #000000;"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" style="color: #25D366;"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" style="color: #F56040"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                </div>
                <div class="row p-4" style="background-color: #f4921e; opacity: 0.9;">
                    <div class="col-3 text-center" style="justify-content: center;">
                        <div class="col-9">
                            <img src="img/xtremeai.png" alt="" style="width: 100%; height: auto; position: relative;">
                        </div>
                        <p style="text-align: justify;">Empresa Huantina que ofrece servicios de corte y grabado láser,
                            personalización de productos, especialistas en maquilado para carpintería acrílica.</p>
                    </div>
                    <div class="col-2" style="font-size: 12px;">
                        <h5>Menú</h5>
                        <ul class="menu">
                            <li><a href="<?php echo BD_URL ?>inicio" class="text-white">Inicio</a></li>
                            <li><a href="<?php echo BD_URL ?>tienda" class="text-white">Tienda</a></li>
                            <li><a href="<?php echo BD_URL ?>servicios" class="text-white">Servicios</a></li>
                            <li><a href="<?php echo BD_URL ?>categoria" class="text-white">Personalización</a></li>
                        </ul>
                    </div>
                    <div class="col-3" style="font-size: 12px;">
                        <h5>Servicios</h5>
                        <ul class="services">
                            <li><a href="<?php echo BD_URL ?>servicios" class="text-white">Corte Láser</a></li>
                            <li><a href="<?php echo BD_URL ?>servicios" class="text-white">Grabado Láser</a></li>
                            <li><a href="<?php echo BD_URL ?>servicios" class="text-white">Personalización</a></li>
                            <li><a href="<?php echo BD_URL ?>servicios" class="text-white">Carpintería Acrílica</a></li>
                            <li><a href="<?php echo BD_URL ?>servicios" class="text-white">Promociones Empresariales</a></li>
                        </ul>
                    </div>
                    <div class="col-4 text-md-left">

                        <div class="contact-info-4">
                            <p><strong>Escríbenos o Llámanos</strong></p>
                            <p style="align-items: center; display: flex;"><i class="fa-solid fa-square-phone"></i>+51
                                934
                                717 131</p>
                            <p style="text-align: justify;">Escríbenos y te asesoramos <br>inmediatamente!</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

</body>
<script>
    const toggle = document.getElementById('darkModeToggle');
    toggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        document.querySelector('.header').classList.toggle('dark-mode');
    });
</script>
<!-- Bootstrap and JQuery scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
<script src="https://kit.fontawesome.com/34fad0bc74.js" crossorigin="anonymous"></script>
</html>