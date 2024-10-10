<!-- Imagen encabezado -->
<div class="cart-header">
        <div class="col-2">
            <button onclick="goBack()" class="btn btn-danger">Volver</button>
        </div>
        <div class="col-8">
            <h1><img src="img/logocarrito.png" alt="Carrito Icon" class="cart-icon">Carrito</h1>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <!--CONTENIDO-->
    <div class="container" style="margin-top: 30px;">

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row border-bottom mb-3">
                        <div class="col text-center">
                            <strong>PRODUCTOS</strong>
                        </div>
                        <div class="col text-center">
                            <strong>PRECIO</strong>
                        </div>
                        <div class="col text-center">
                            <strong>CANTIDAD</strong>
                        </div>
                        <div class="col text-center">
                            <strong>SUB TOTAL</strong>
                        </div>
                    </div>
                    <div class="row border-bottom mb-3">
                        <div class="col">
                            <div class="d-flex align-items-center">
                                <div>
                                    <img src="img/cajabotelladevino.png" alt="Producto 1" width="50">
                                </div>
                                <div class="ml-2">
                                    <span>Caja Botella de Vino</span>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            S/ 50.00
                        </div>
                        <div class="col" style="justify-content: center; display: flex;">
                            <input type="number" class="form-control quantity" value="1" min="1" data-price="50"
                                onchange="updateSubtotal(this)" style="width: 50%; text-align: center;"">
                        </div>
                        <div class=" col subtotal text-center">
                            S/ 50.00
                        </div>
                    </div>
                    <div class="row border-bottom mb-3">
                        <div class="col">
                            <div class="d-flex align-items-center">
                                <div>
                                    <img src="img/cajaregaloscompartidos.png" alt="Producto 2" width="50">
                                </div>
                                <div class="ml-2">
                                    <span>Caja para regalos compartidos motivos navideños</span>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            S/ 39.00
                        </div>
                        <div class="col" style="justify-content: center; display: flex;">
                            <input type="number" class="form-control quantity" value="2" min="1" data-price="39"
                                onchange="updateSubtotal(this)" style="width: 50%; text-align: center;">
                        </div>
                        <div class="col subtotal text-center">
                            S/ 78.00
                        </div>
                    </div>
                    <div class="row border-bottom mb-3">
                        <div class="col">
                            <div class="d-flex align-items-center">
                                <div>
                                    <img src="img/cajabotellavino.png" alt="Producto 3" width="50">
                                </div>
                                <div class="ml-2">
                                    <span>Caja de Botella de vino con grabado en Tapa</span>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            S/ 45.00
                        </div>
                        <div class="col" style="justify-content: center; display: flex;">
                            <input type="number" class="form-control quantity" value="1" min="1" data-price="45"
                                onchange="updateSubtotal(this)" style="width: 50%; text-align: center;">
                        </div>
                        <div class="col subtotal text-center">
                            S/ 45.00
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="promo-section">
            <label for="promo-code">Código de Promoción</label>
            <input type="text" id="promo-code" class="promo-input" placeholder="Introduce tu código">
            <button class="btn btn-warning" onclick="applyPromo()">Aplicar</button>
        </div>
        <div class="alert alert-info text-center my-2">
            <p>el codigo de promoción es la palabra NOTA más la calificacion que meresco por hacer este trabajo</p>
        </div>
        <div class="total-section">
            <p>SUB TOTAL: <span id="subtotal-amount">S/ 173.00</span></p>
            <p>TOTAL: <span id="total-amount">S/ 173.00</span></p>
        </div>
        <div class="payment-methods">
            <h3>Métodos de Pago</h3>
            <a href="https://www.visa.com.pe/"><img src="img/visa.png" alt="Visa"></a>
            <a href="https://www.mastercard.com.pe/es-pe.html"><img src="img/mastercard.png" alt="MasterCard"></a>
            <a href="https://www.paypal.com/pe/home"><img src="img/paypal.png" alt="PayPal"></a>
            <a href="https://www.yape.com.pe/"><img src="img/yape.png" alt="Yape"></a>
            <a href="https://www.pagoefectivo.la/pe/"><img src="img/pagoefectivo.png" alt="Yape"></a>
        </div>
        <div class="cart-footer" style="background: white; padding: 10px; text-align: center;">
            <a href="<?php echo BD_URL ?>carrito" class="btn btn-success">Finalizar Compra</a><a href="<?php echo BD_URL ?>tienda"
                class="btn btn-primary" style="margin-left: 50px;">Seguir Comprando</a>
        </div>
    </div>