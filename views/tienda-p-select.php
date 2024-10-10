<div class="container product-section my-5">
        <!-- Product Details -->
        <div class="row">
            <div class="col-md-6">
                <img id="mainImage" src="img/angel.png" alt="Esfera Navideña" class="product-img"
                    onclick="changeImage('img/img1.png')">
                <div class="d-flex justify-content-center mt-3">
                    <img src="img/angel1.png" alt="Thumbnail 1" class="thumbnail-img"
                        onclick="changeImage('img/angel3.png')">
                    <img src="img/angel2.png" alt="Thumbnail 2" class="thumbnail-img"
                        onclick="changeImage('img/angel2.png')">
                    <img src="img/angel3.png" alt="Thumbnail 3" class="thumbnail-img"
                        onclick="changeImage('img/angel4.png')">
                    <img src="img/angel4.png" alt="Thumbnail 4" class="thumbnail-img"
                        onclick="changeImage('img/angel1.png')">
                </div>
            </div>

            <div class="col-6">
                <div class="border p-3">
                    <div class="d-flex align-items-center mb-2">
                        <h1>Ángel de la guarda para primera comunión</h1>
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
                                            <a href="mailto:?subject=YOUR_SUBJECT&body=YOUR_BODY"
                                                class="btn btn-danger">
                                                <i class="fa-regular fa-envelope"></i> Email
                                            </a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="<?php echo BD_URL ?>deseados" class="btn btn-outline-warning mr-2">
                            <i class="fas fa-star"></i>
                        </a>
                    </div>
                    <p>Ángel de la guarda para primera comunión. Un regalo ideal para los comulgantes o para cualquier
                        persona creyente. Este ángel tiene diferentes usos. Puede ser una decoración o una base.</p>
                    <p class="price-range">S/. 37 - S/. 41</p>

                    <div class="form-group">
                        <label for="tamano">Tamaño</label>
                        <select class="form-control" id="tamano">
                            <option>10 centímetros</option>
                            <option>12 centímetros</option>
                            <option>15 centímetros</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Selecciona la oración</label>
                        <div class="row">
                            <div class="col-6 product-image">
                                <label>
                                    <input type="radio" name="oracion" value="angel" class="d-none">
                                    <img src="img/angelguarda.pnh.jpg" alt="Ángel de la Guarda">
                                    <p>Ángel de la Guarda</p>
                                </label>
                            </div>
                            <div class="col-6 product-image">
                                <label>
                                    <input type="radio" name="oracion" value="devocionario" class="d-none">
                                    <img src="img/deuto.png" alt="Devocionario 6-4">
                                    <p>Devocionario 6-4</p>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Con Base o Colgante</label>
                        <div class="row">
                            <div class="col-6 product-image">
                                <label>
                                    <input type="radio" name="base_colgante" value="base" class="d-none">
                                    <img src="img/singravado.png" alt="Con Base">
                                    <p>Con base</p>
                                </label>
                            </div>
                            <div class="col-6 product-image">
                                <label>
                                    <input type="radio" name="base_colgante" value="colgante" class="d-none">
                                    <img src="img/conhueco.png" alt="Colgante de Pared">
                                    <p>Colgante de pared</p>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Tipo de base</label>
                        <div class="row">
                            <div class="col-6 product-image">
                                <label>
                                    <input type="radio" name="tipo_base" value="lisa" class="d-none">
                                    <img src="img/singravado.png" alt="Base Lisa">
                                    <p>Lisa</p>
                                </label>
                            </div>
                            <div class="col-6 product-image">
                                <label>
                                    <input type="radio" name="tipo_base" value="personalizada" class="d-none">
                                    <img src="img/congravado.png" alt="Base Personalizada">
                                    <p>Personalizada con grabado (Hasta 25 caracteres)</p>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="textoBase">Ingrese el texto para su base (Máximo 25 caracteres)</label>
                        <input type="text" class="form-control" id="textoBase" maxlength="25">
                    </div>

                    <a href="Carrito.html" type="button" class="btn btn-warning col-4">Añadir al carrito</a>

                    <div class="mt-4">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>DESCRIPCIÓN</th>
                                    <th>RANGO</th>
                                    <th>DESCUENTO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Precio Antiguo</td>
                                    <td>6-11</td>
                                    <td>S/. 39.37</td>
                                </tr>
                                <tr>
                                    <td>Precio Mayorista</td>
                                    <td>12-25</td>
                                    <td>S/. 38.31</td>
                                </tr>
                                <tr>
                                    <td>Precio Especial</td>
                                    <td>26-50</td>
                                    <td>S/. 37.50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="font-weight-bold">COMPRA 6 PIEZAS O MÁS PARA OBTENER MEJORES PRECIOS</p>
                </div>
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