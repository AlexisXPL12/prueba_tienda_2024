
<div class="container-fluid p-0">
        <!-- Hero Section -->
        <div class="hero-section" style="justify-content: center; display: flex; align-items: center;">
            <div style="display: block;">
                <p>CORTE & GRAVADO LÁSER</p>
                <h1 class="font-weight-bold" style="font-size: 60px;">Corte Láser <br>en Huanta</h1>
                <p>¡Tú tienes la idea, nosotros la hacemos realidad!</p>
                <a href="<?php echo BD_URL ?>servicios" class="btn">Cotizar Mi Proyecto</a>
            </div>
        </div>

        <!-- Product Links Section -->
        <div class="container-">
            <div class="row no-gutters text-center">
                <div class="col-md-4">
                    <div class="card bg-dark text-white border-0">
                        <img src="img/imagenencabezado2.png" class="card-img" alt="imagen encabezado 1">
                        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title">TIENDA</h5>
                            <p class="card-text">Ir a Tienda</p>
                            <a href="<?php echo BD_URL ?>tienda" class="btn btn-warning"
                                style="background-color: #f8b400; border-radius: 15px;">Ir a Tienda</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark text-white border-0">
                        <img src="img/imagenencabezado3.png" class="card-img" alt="imagen encabezado 2">
                        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title">PERSONALIZAR</h5>
                            <p class="card-text">Ver Productos Disponibles</p>
                            <a href="<?php echo BD_URL ?>tienda-producto" class="btn btn-warning"
                                style="background-color: #f8b400; border-radius: 15px;">Ver Productos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark text-white border-0">
                        <img src="img/imagenencabezado4.png" class="card-img" alt="iamgen encabezado 3">
                        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title">COTIZAR</h5>
                            <p class="card-text">Cotizar Mi Proyecto</p>
                            <a href="<?php echo BD_URL ?>servicios" class="btn btn-warning"
                                style="background-color: #f8b400; border-radius: 15px;">Cotizar Proyecto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div class="container py-4">
            <div class="row justify-content-center text-center service-section">
                <div class="col-md-4 mb-3">
                    <img src="img/imageninfo1e1.png" alt="Corte Láser" class="img-fluid rounded-circle mb-3"
                        style="max-width: 150px;">
                    <h5 class="font-weight-bold text-warning">Corte Láser</h5>
                    <p>Corte láser en MDF, plywood y acrílico.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/imageninfo1e2.png" alt="Grabado Láser" class="img-fluid rounded-circle mb-3"
                        style="max-width: 150px;">
                    <h5 class="font-weight-bold text-warning">Grabado Láser</h5>
                    <p>Grabado láser en MDF, plywood y acrílico.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/imageninfo1e3.png" alt="Personalización" class="img-fluid rounded-circle mb-3"
                        style="max-width: 150px;">
                    <h5 class="font-weight-bold text-warning">Personalización</h5>
                    <p>Adaptamos tu idea a nuestros productos.</p>
                </div>
            </div>
        </div>

        <!-- Product Section -->
        <div class="text-center my-5">
            <h2 class="font-weight-bold text-warning" style="font-size: 20px;">Conoce Más del Mundo del</h2>
            <h2 class="font-weight-bold text-warning" style="font-size: 50px;">CORTE LASÉR</h2>
            <p>Te mostramos algunos ejemplos de nuestros trabajos en corte láser.</p>
        </div>
        <div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <img src="img/cajabotelladevino.png" class="d-block w-100" alt="Caja para botellas de vino">
                            <p>Caja botellas de vino</p>
                        </div>
                        <div class="col-md-4">
                            <img src="img/cajaregaloscompartidos.png" class="d-block w-100"
                                alt="Caja para regalos corporativos">
                            <p>Caja para regalos corporativos con motivos navideños</p>
                        </div>
                        <div class="col-md-4">
                            <img src="img/cajabotelladevinograbado.png" class="d-block w-100"
                                alt="Caja para botellas de vino con grabado en tapa">
                            <p>Caja para botellas de vino con grabado en tapa</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <img src="img/cajabotelladevinograbado.png" class="d-block w-100" alt="Otro producto 1">
                            <p>Otro producto 1</p>
                        </div>
                        <div class="col-md-4">
                            <img src="img/cajaregaloscompartidos.png" class="d-block w-100" alt="Otro producto 2">
                            <p>Otro producto 2</p>
                        </div>
                        <div class="col-md-4">
                            <img src="img/cajabotelladevino.png" class="d-block w-100" alt="Otro producto 3">
                            <p>Otro producto 3</p>
                        </div>
                    </div>
                </div>
                <!-- Agrega más carousel-item aquí si es necesario -->
            </div>
            <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Delivery Section -->
        <div class="container-fluid p-0 position-relative"
            style="background-image: url('img/imagenfondo24h.png'); background-size: cover; background-position: center; height: 300px;">
            <div class="position-absolute w-100 h-100 d-flex flex-column justify-content-center align-items-center"
                style="background-color: rgba(0, 0, 0, 0.6);">
                <h2 class="text-white font-weight-bold">ENTREGAS EN 24 HORAS</h2>
                <p class="text-white">Conoce nuestro proceso</p>
            </div>
        </div>

        <!-- Process Section -->
        <div class="container py-4">
            <div class="row justify-content-center text-center">
                <div class="col-md-2 col-sm-4 mb-3">
                    <img src="img/imagenideas.png" alt="Envío de Idea" class="img-fluid mb-2">
                    <h5 class="font-weight-bold text-warning">Envías tu idea</h5>
                    <p>Mandanos una imagen, un bosquejo o tus vectores.</p>
                </div>
                <div class="col-md-2 col-sm-4 mb-3">
                    <img src="img/imagencotizamos.png" alt="Cotizamos" class="img-fluid mb-2">
                    <h5 class="font-weight-bold text-warning">Cotizamos</h5>
                    <p>Te enviamos el costo de tu proyecto.</p>
                </div>
                <div class="col-md-2 col-sm-4 mb-3">
                    <img src="img/imagenpagar.png" alt="Pagas" class="img-fluid mb-2">
                    <h5 class="font-weight-bold text-warning">Pagas</h5>
                    <p>Si el precio te conviene, haces el pago.</p>
                </div>
                <div class="col-md-2 col-sm-4 mb-3">
                    <img src="img/imagenfabricamos.png" alt="Fabricamos" class="img-fluid mb-2">
                    <h5 class="font-weight-bold text-warning">Fabricamos</h5>
                    <p>Procedemos al corte y fabricación de tu proyecto.</p>
                </div>
                <div class="col-md-2 col-sm-4 mb-3">
                    <img src="img/imagenenviamos.png" alt="Enviamos" class="img-fluid mb-2">
                    <h5 class="font-weight-bold text-warning">Enviamos</h5>
                    <p>Enviamos a todo el país.</p>
                </div>
            </div>
        </div>