<div class="container product-section my-5">
        <!-- DETALLE DE PRODUCTO -->
        <div class="row">
            <div class="col-md-6">
                <img id="mainImage" src="img/img1.png" alt="Esfera Navideña" class="product-img"
                    onclick="changeImage('img/img1.png')">
                <div class="d-flex justify-content-center mt-3">
                    <img src="img/img.png" alt="Thumbnail 1" class="thumbnail-img" onclick="changeImage('img/img.png')">
                    <img src="img/img2.png" alt="Thumbnail 2" class="thumbnail-img"
                        onclick="changeImage('img/img2.png')">
                    <img src="img/img4.png" alt="Thumbnail 3" class="thumbnail-img"
                        onclick="changeImage('img/img4.png')">
                    <img src="img/img.png" alt="Thumbnail 4" class="thumbnail-img" onclick="changeImage('img/img.png')">
                </div>
            </div>
            <div class="col-md-6" style="border: #ccc solid 1px;">
                <div class="d-flex align-items-center mb-2">
                    <h1 class="font-weight-bold m-0">Esferas Navideñas en MDF</h1>
                    <button class="btn btn-outline-warning mr-2" data-toggle="modal" data-target="#shareModal">
                        <i class="fas fa-share-alt"></i>
                    </button>
                    <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="shareModalLabel">Compartir en redes sociales</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Comparte este contenido en:</p>
                                    <div class="d-flex justify-content-around">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL"
                                            class="btn btn-primary" target="_blank">
                                            <i class="fab fa-facebook-f"></i> Facebook
                                        </a>
                                        <a href="https://twitter.com/intent/tweet?url=YOUR_URL&text=YOUR_TEXT"
                                            class="btn btn-info" target="_blank">
                                            <i class="fa-brands fa-x-twitter"></i> Twitter
                                        </a>
                                        <a href="https://www.linkedin.com/shareArticle?url=YOUR_URL&title=YOUR_TITLE"
                                            class="btn btn-primary" target="_blank">
                                            <i class="fab fa-linkedin-in"></i> LinkedIn
                                        </a>
                                        <a href="mailto:?subject=YOUR_SUBJECT&body=YOUR_BODY" class="btn btn-danger">
                                            <i class="fa-regular fa-envelope"></i> Email
                                        </a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo BD_URL ?>deseados" class="btn btn-outline-warning mr-2">
                        <i class="fas fa-star"></i>
                    </a>
                </div>
                <p class="mb-3">Linda colección de esferas navideñas, fabricada en MDF de 3 milímetros. Precioso regalo
                    para Navidad.</p>
                <p><strong>Medidas:</strong> Alto 12 cms – Ancho 10 cms</p>
                <div class="row">
                    <div class="col-6">
                        <div class="bg-warning text-center py-3 mb-4 rounded">
                            <p class="text-white font-weight-bold m-0" style="font-size: 1.5rem;">PEN 41.00</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-warning text-center py-3 mb-4 rounded">
                            <p class="text-white font-weight-bold m-0" style="font-size: 1.5rem;"><strong>-10%</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div style="justify-content: space-around; display: flex;">
                    <button class="btn btn-outline-warning mb-2 col-5">Medidas</button>
                    <button class="btn btn-outline-warning mb-2 col-5">Stock</button>
                </div>
                <a href="Carrito.html">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center">
                                <button class="btn btn-warning btn-lg">
                                    <img src="img/iconoagregar.png" alt="Icono Carrito" class="mr-1"
                                        style="max-width: 40px;">
                                    <img src="img/iconocarritot.png" alt="Icono Carrito" class="mr-1"
                                        style="max-width: 80px;">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <!-- Features Section -->
        <div class="container">
            <div class="row text-center mt-4 py-4 rounded">
                <div class="col-md-3 col-sm-6 mb-3">
                    <i class="far fa-clock fa-4x" style="color: #f4921e;"></i>
                    <p class="mt-2 mb-0">Entrega en 24 Horas</p>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <i class="far fa-credit-card fa-4x" style="color: #f4921e;"></i>
                    <p class="mt-2 mb-0">Paga con tarjeta de Crédito</p>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <i class="far fa-building fa-4x" style="color: #f4921e;"></i>
                    <p class="mt-2 mb-0">Por Transferencia Bancaria</p>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <i class="fas fa-truck-fast fa-4x" style="color: #f4921e;"></i>
                    <p class="mt-2 mb-0">Envíos a Todo el País</p>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        <div class="mt-4">
            <h3>Productos Relacionados</h3>
            <div class="row related-products">
                <div class="col-md-3 col-sm-6 mb-3">
                    <img src="img/producto1r.png" alt="Producto Relacionado 1">
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <img src="img/producto2r.png" alt="Producto Relacionado 2">
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <img src="img/produto3r.png" alt="Producto Relacionado 3">
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <img src="img/producto4r.png" alt="Producto Relacionado 4">
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }
    </script>