<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtreme AI - Inicio</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            transition: background-color 0.3s, color 0.3s;
        }

        .dark-mode {
            background-color: #121212;
            color: #ffffff;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #ffffff;
            border-bottom: 1px solid #ddd;
        }

        .header.dark-mode {
            background-color: #1f1f1f;
            border-bottom: 1px solid #333;
        }

        .icon {
            cursor: pointer;
            font-size: 24px;
        }

        .navbar-custom-1 {
            background-color: #ffa64d;
        }

        .navbar-custom-1 .nav-link {
            color: #000;
            background-color: #ffb56a;
            border-radius: 8px;
            margin: 0 5px;
            padding: 5px 10px;
        }

        .navbar-custom-1 .nav-link:hover {
            background-color: #ff9f3a;
        }

        .navbar-custom-2 {
            background-color: #ffa64d;
        }

        .navbar-custom-2 .navbar-brand img {
            max-height: 50px;
        }

        .navbar-custom-2 .navbar-text {
            color: #000;
        }

        .navbar-custom-2 .social-icons a {
            color: #000;
            margin-right: 10px;
        }

        .navbar-custom-2 .social-icons a:hover {
            color: #ff6347;
        }

        .navbar-custom-2 .search-bar input {
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 5px 10px;
            margin-right: 5px;
        }

        .navbar-custom-2 .search-bar button {
            background: none;
            border: none;
            color: #ff6347;
            font-size: 20px;
        }

        .navbar-custom-2 .icon-text img {
            max-height: 30px;
            margin-right: 5px;
        }

        .navbar-custom-2 .moon-icon {
            font-size: 1.5rem;
        }

        .image-container {
            position: relative;
            text-align: center;
        }

        .image-container img {
            width: 100%;
            height: auto;
        }

        .image-container .centered-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
            /* Fondo semi-transparente para el texto */
            width: 100%;
            height: 100%;
            align-content: center;
        }

        /*HEADER CARRITO*/

        .cart-header {
            background-color: black;
            opacity: 0.8;
            color: white;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 80px;
            display: flex;
            align-items: center;
        }

        .cart-header h1 {
            margin: 0;
            font-size: 40px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .cart-icon {
            width: 60px;
            margin-right: 10px;
            /* Espacio a la derecha del icono */
            vertical-align: middle;
            /* Alineación vertical */
        }

         /*HEADER CARRITO*/

        .category-img,
        .product-img {
            width: 100%;
            height: 250px;
            border-radius: 15px;
        }

        .container button {
            margin-bottom: 10px;
        }

        .container p {
            height: 40px;
        }

        /*CONTENIDO INICIO*/
        
        .hero-section {
            background-image: url('img/imagenencabezado1.png');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 0;
            height: 600px;
        }

        .hero-section h1 {
            font-size: 3rem;
        }

        .hero-section .btn {
            background-color: #FFA500;
            color: white;
            border: none;
            margin-top: 20px;
        }

        .hero-section .btn:hover {
            background-color: #FF8C00;
        }

        .carousel-item img {
            border-radius: 15px;
            height: 400px;
            max-width: 80%;
            margin: auto;
        }

        .carousel-caption {
            bottom: 10px;
        }

        /*CONTENIDO CARRITO*/

        .promo-section {
            margin-top: 20px;
            text-align: center;
        }

        .promo-input {
            margin-right: 10px;
            padding: 5px;
        }

        .total-section {
            text-align: right;
            margin-top: 20px;
        }

        .details-icon {
            margin-left: 10px;
            cursor: pointer;
        }

        .payment-methods {
            margin-top: 30px;
            text-align: center;
        }

        .payment-methods img {
            width: 100px;
            height: auto;
            margin: 10px;
        }

        /* Floating buttons */
        .floating-btn {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 50px;
            right: 50px;
            background-color: #FFA500;
            color: white;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
            z-index: 1000;

        }

        .floating-btn i {
            margin-top: 16px;
        }

        .floating-cart {
            bottom: 110px;
            /* Adjusted to be above the WhatsApp button */
        }

        .floating-whatsapp {
            bottom: 50px;
            background-color: #25D366;
        }

        .cart-dropdown {
            position: fixed;
            right: 50px;
            bottom: 110px;
            width: 300px;
            background-color: white;
            box-shadow: 0px 0px 10px 0px #000;
            border-radius: 10px;
            display: none;
            z-index: 999;
        }

        .cart-dropdown .cart-header {
            background-color: #FFA500;
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
        }

        .cart-dropdown .cart-body {
            padding: 15px;
        }

        /*CONTENIDO TIENDA*/

        .category-img,
        .product-img {
            width: 100%;
            height: 250px;
            border-radius: 15px;
        }

        .container button {
            margin-bottom: 10px;
        }

        .container p {
            height: 40px;
        }

        /*CONTENIDO PRODUCTO*/
        .product-section {
            padding: 30px;
            background-color: #f8f8f8;
        }

        .product-img {
            width: 100%;
            height: auto;
        }

        .thumbnail-img {
            width: 60px;
            height: 60px;
            margin: 5px;
            cursor: pointer;
        }

        .price {
            font-size: 1.5rem;
            color: #FFA500;
        }

        .btn-custom {
            background-color: #FFA500;
            color: white;
            border: none;
            margin-top: 20px;
        }

        .btn-custom:hover {
            background-color: #FF8C00;
        }

        .features-section img {
            width: 50px;
            height: 50px;
        }

        .related-products img {
            width: 100%;
            height: auto;
        }

        /*CONTENIDO SERVICIOS*/
        .icon-section img {
            width: 50px;
            height: 50px;
        }

        .cta-button {
            background-color: #FFA500;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .cta-button:hover {
            background-color: #FF8C00;
        }

        .section-title {
            color: #FFA500;
        }

        .bg-dark-custom {
            background-color: #333;
            color: white;
        }

        .bg-dark-custom h2 {
            color: #FFA500;
        }

        /*CONTENIDO CONTACTAR*/
        .body {
            background-color: #f8b400;
            background-image: url('your-background-image.jpg');
            background-size: cover;
            background-position: center;
        }

        .contact-card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            max-width: 800px;
            margin: auto;
            margin-bottom: 50px;
        }

        .contact-info {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
            margin-bottom: 20px;

        }

        .contact-info>div {
            width: 30%;
            padding: 20px;
            background-color: #FFF;
            /* Cambio de color de fondo */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            /* Alineación del texto a la izquierda */
            color: #333;
            /* Color del texto */
            display: flex;
            align-items: center;
            /* Alinear elementos verticalmente */
            border-radius: 25px;
        }

        .icon-container {
            margin-right: 15px;
            /* Espacio a la derecha del contenedor de icono */
        }

        .icon-container i {
            font-size: 24px;
            color: #f8b400;
            /* Color del icono */
        }

        .contact-info p {
            margin: 0;
            /* Eliminar márgenes del párrafo */
        }

        /*CONTENIDO DESEADOS*/
        .wishlist-section {
            padding: 30px;
            text-align: center;
            min-height: 800px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .wishlist-icon {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
        }

        .wishlist-button {
            background-color: #FFA500;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            margin-top: 20px;
        }

        .wishlist-button:hover {
            background-color: #FF8C00;
        }

        /*CONTENIDO PERFIL*/
        .profile-card {
            max-width: 600px;
            /* Ancho máximo de la tarjeta */
            margin: auto;
            /* Centrar la tarjeta */
        }

        /* Estilo para alinear el botón "Cambiar Foto" */
        .change-photo-button {
            margin-top: 10px;
            /* Espacio arriba del botón */
        }

        .form-control:valid {
            border-color: #28a745;
        }

        .form-control:invalid {
            border-color: #dc3545;
        }

        .valid {
            border-color: green;
        }

        .invalid {
            border-color: red;
        }

        .alert {
            display: none;
            margin-top: 10px;
            padding: 10px;
            color: white;
        }

        .alert.success {
            background-color: green;
        }

        .alert.error {
            background-color: red;
        }

        /*FOOTER*/
        .footer {
            position: relative;
            color: white;
        }

        .footer img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
            opacity: 0.7;
            /* para oscurecer la imagen */
        }

        .footer .container {
            position: relative;
            z-index: 2;
            margin: 0px;
        }

        .footer p,
        .footer li {
            color: white;
        }

        .footer .menu,
        .footer .services {
            list-style-type: none;
            padding-left: 0;
        }

        .footer .menu li,
        .footer .services li {
            margin-bottom: 10px;
        }

        .footer .contact-info {
            margin-top: 10px;
        }

        .footer .social-icons a {
            color: white;
            margin-right: 15px;
            font-size: 50px;
        }

        .footer .contact-info p {
            margin-bottom: 5px;
        }

        .footer .contact-info i {
            margin-right: 10px;
            font-size: 40px;
        }
    </style>
</head>

<body>
    <!-- MENU-->
    <!-- Header 1 -->
    <nav class="navbar navbar-expand-lg navbar-custom-1">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar1"
                aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation"
                style="background-color:white; opacity: 0.8;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1" style="justify-content: space-around;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BD_URL ?>inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BD_URL ?>tienda">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BD_URL ?>servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Cursos.html">Cursos</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 d-flex flex-row">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BD_URL ?>carrito"><i class="fas fa-shopping-cart"></i> Carrito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BD_URL ?>deseados"><i class="fas fa-star"></i> Deseados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BD_URL ?>contactar"><i class="fas fa-comment-dots"></i> Contáctenos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header 2 -->
    <nav class="navbar navbar-expand-lg navbar-custom-2 col-12">
        <a href="Perfil.html" class="d-flex align-items-center col-1" style="display: block; text-decoration: none;">
            <img src="img/logoperfil.png" alt="Perfil" style="max-height: 70px; position: relative; width: 80%;">
            <span class="navbar-text ms-2">Perfil</span>
        </a>
        <a class="navbar-brand mx-auto" href="#"><img src="img/xtremeai.png" alt="XTREME AI"
                style="max-height: 50px; position: relative; width: 90%; justify-content: center;"></a>
        <div class="d-flex search-bar col-6">
            <button type="button"><i class="fas fa-search"></i></button>
            <input type="text" placeholder="Buscar..." class="col-11">
        </div>
        <div class="d-flex align-items-center ms-3 col-3" style="justify-content: space-around;">
            <div class="social-icons" style="font-size: 20px;">
                <a href="#" style="color: #4267B2;"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" style="color: #25D366;"><i class="fab fa-whatsapp"></i></a>
                <a href="#" style="color: #F56040"><i class="fab fa-instagram"></i></a>
            </div>
            <span class="navbar-text ms-3">Atención 24/7</span>
            <div>
                <span class="icon" id="darkModeToggle">🌙</span>
            </div>
        </div>
    </nav>