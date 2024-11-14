<style>
    /*CONTENIDO*/
    .hero-section {
        position: relative;
        background-image: url('img/encabezadocursos.png');
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 6rem 1rem;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
        position: relative;
        z-index: 1;
    }

    .hero-content h1 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }

    .hero-content p {
        font-size: 1.25rem;
        margin-bottom: 2rem;
    }

    .hero-content .btn {
        background-color: #ffffff;
        color: #555555;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        border: none;
        border-radius: 5px;
    }

    .module {
        position: relative;
        overflow: hidden;
    }

    .module-image-container {
        position: relative;
        width: 100%;
        padding-top: 75%;
        /* Aspect ratio 4:3 */
    }

    .module img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .module-content {
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        color: white;
        text-align: center;
        background-color: rgba(139, 69, 19, 0.5);
        /* Fondo semitransparente */
    }

    .feature-item {
        margin-bottom: 2rem;
    }

    .feature-icon img {
        width: 50px;
        height: 50px;
    }

    .feature-title {
        font-size: 1.5rem;
        margin-top: 1rem;
        margin-bottom: 1rem;
        color: #795548;
    }

    .feature-description {
        color: #757575;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 2rem;
        color: #fff;
    }

    .cta-button {
        background-color: white;
        border: none;
        color: black;
        padding: 10px 20px;
        border-radius: 20px;
        font-weight: bold;
    }

    .intro-text {
        font-size: 1rem;
        color: #6c757d;
        margin-bottom: 2rem;
    }

    .feature-title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #4b3621;
    }

    .feature-description {
        font-size: 1rem;
        color: #6c757d;
    }

    .feature-item {
        margin-bottom: 2rem;
    }

    .feature-img {
        width: 100%;
        height: auto;
        margin-bottom: 1rem;
    }

    .course-section {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0px;
        background-color: #f8f9fa;
    }

    .course-image {
        width: 50%;
        height: auto;
    }

    .course-content {
        width: 50%;
        background-color: #d7bfa4;
        color: #fff;
    }

    .course-title {
        font-size: 2rem;
        font-weight: bold;
    }

    .course-highlight {
        font-size: 3rem;
        font-weight: bold;
        color: #fff;
    }

    .course-description {
        font-size: 1rem;
        margin: 1rem 0;
    }

    .course-features {
        list-style: none;
        padding: 0;
    }

    .course-features li {
        margin-bottom: 0.5rem;
        font-size: 1rem;
    }

    .course-features li i {
        color: #28a745;
        margin-right: 0.5rem;
    }

    .enroll-btn {
        background-color: #fff;
        color: #d7bfa4;
        font-size: 1rem;
        font-weight: bold;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 25px;
        margin-top: 1rem;
    }

    .gallery-section {
        padding: 2rem 0;
        text-align: center;
    }

    .gallery-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .gallery-subtitle {
        font-size: 1rem;
        margin-bottom: 2rem;
        color: #555;
    }

    .gallery-item {
        margin-bottom: 2rem;
    }

    .gallery-item img {
        width: 100%;
        height: 300px;
    }

    .gallery-caption {
        margin-top: 0.5rem;
        font-size: 1rem;
        color: #555;
    }

    .promo-card {
        max-width: 600px;
        margin: 3rem auto;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .promo-header {
        background-color: #8B5E3C;
        color: white;
        padding: 1rem;
        text-align: center;
        position: relative;
    }

    .promo-header::after {
        content: "RECOMENDADO";
        position: absolute;
        top: 10px;
        right: -50px;
        background-color: #52C41A;
        color: white;
        padding: 5px 15px;
        transform: rotate(45deg);
        font-size: 0.8rem;
    }

    .promo-body {
        padding: 2rem;
        text-align: center;
        background-color: #f9f9f9;
    }

    .promo-price {
        font-size: 2rem;
        font-weight: bold;
        color: #000;
    }

    .promo-discount {
        text-decoration: line-through;
        color: #999;
        font-size: 1rem;
    }

    .promo-list {
        list-style: none;
        padding: 0;
        margin: 1rem 0;
        color: #000;
    }

    .promo-list li {
        margin: 0.5rem 0;
        font-size: 1rem;
    }

    .promo-button {
        background-color: #8B5E3C;
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
<!--IMAGENES ENCABEZADO-->
<div class="container" style="margin: 0px 0px 40px 0xp; ">
    <div class="hero-section d-flex justify-content-center align-items-center">
        <div class="hero-content text-center">
            <p>APRENDE EN LÍNEA</p>
            <h1>Curso de Grabado Láser</h1>
            <p>Aprende en 2 horas todo lo relacionado al <br> grabado láser.</p>
            <div class="container mt-5">
                <a class="btn btn-warning" id="inscribeteBtn" href="<?php echo BD_URL ?>tienda">INSCRÍBETE AHORA</a>
                <a href="<?php echo BD_URL ?>carrito" id="verCarritoLink" class="text-white ml-3" style="display: none;">Ver
                    carrito</a>
            </div>
        </div>
    </div>
    <!--CUADRES DE ENCABEZADO PEQUEÑOS-->
    <div class="container">
        <div class="row p-4">
            <div class="col-md-4" style="padding: 0px;">
                <div class="module">
                    <div class="module-image-container">
                        <img src="img/encabezadocursos2.png" alt="Módulo 1" class="img-fluid">
                        <div class="module-content">
                            <div class="col-12" style="display: block;">
                                <div class="col-12">
                                    <h3>MODULO 1</h3>
                                </div>
                                <div class="col-12">
                                    <p>Entorno y Parámetros</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="padding: 0px;">
                <div class="module">
                    <div class="module-image-container">
                        <img src="img/encabezadocursos3.png" alt="Módulo 2" class="img-fluid">
                        <div class="module-content">
                            <div class="col-12" style="display: block;">
                                <div class="col-12">
                                    <h3>MODULO 2</h3>
                                </div>
                                <div class="col-12">
                                    <p>Preparación de imágenes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="padding: 0px;">
                <div class="module">
                    <div class="module-image-container">
                        <img src="img/encabezadocursos4.png" alt="Módulo 3" class="img-fluid">
                        <div class="module-content">
                            <div class="col-12" style="display: block;">
                                <div class="col-12">
                                    <h3>MODULO 3</h3>
                                </div>
                                <p>Poner en Práctica</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--EN ESTE CURSO APRENDERAS-->
    <div class="text-center mb-4">
        <p class="text-muted mb-0">EN ESTE CURSO</p>
        <h2 class="section">Aprenderás</h2>
    </div>
    <div class="row my-5">
        <div class="col-md-4">
            <div class="feature-item text-center">
                <div class="feature-icon">
                    <img src="img/imageninfo1e3.png" alt="Icon 1">
                </div>
                <h3 class="feature-title">Introducción al grabado láser</h3>
                <p class="feature-description">Conocerás las diferentes posibilidades que ofrece la técnica de
                    grabado láser, además de su funcionamiento.</p>
            </div>
            <div class="feature-item text-center">
                <div class="feature-icon">
                    <img src="img/imagenideas.png" alt="Icon 4">
                </div>
                <h3 class="feature-title">Lógica de trabajo</h3>
                <p class="feature-description">Conocerás tu equipo y las diferentes herramientas disponibles para
                    poder ejecutar cualquier proyecto.</p>
            </div>
            <div class="feature-item text-center">
                <div class="feature-icon">
                    <img src="img/parametrosymateriales.png" alt="Icon 5">
                </div>
                <h3 class="feature-title">Parámetros y materiales</h3>
                <p class="feature-description">Crearás tus propios parámetros de grabado para los diferentes
                    materiales que se te puedan presentar.</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <img src="img/aprenderas.png" alt="Central Image" class="img-fluid" style="height: 100%;">
        </div>
        <div class="col-md-4">
            <div class="feature-item text-center">
                <div class="feature-icon">
                    <img src="img/analisisimagen.png" alt="Icon 2">
                </div>
                <h3 class="feature-title">Análisis de imágenes</h3>
                <p class="feature-description">Aprenderás a reconocer las características de una buena imagen, para
                    así crear grabados asombrosos.</p>
            </div>
            <div class="feature-item text-center">
                <div class="feature-icon">
                    <img src="img/imageninfo1e2.png" alt="Icon 3">
                </div>
                <h3 class="feature-title">Preparación de imágenes</h3>
                <p class="feature-description">Aprenderás a utilizar las diferentes herramientas digitales para
                    preparación de imágenes.</p>
            </div>
            <div class="feature-item text-center">
                <div class="feature-icon">
                    <img src="img/imageninfo1e1.png" alt="Icon 6">
                </div>
                <h3 class="feature-title">Grabando materiales</h3>
                <p class="feature-description">Optimizarás tus imágenes y harás pruebas en tu máquina láser.</p>
            </div>
        </div>
    </div>
    <div class="promo-card">
        <div class="promo-header">
            <h2>Curso de grabado láser</h2>
            <p>CURSO EN LÍNEA</p>
        </div>
        <div class="promo-body">
            <div class="promo-price">
                S/. 395<sup>00</sup>
            </div>
            <div class="promo-discount">
                S/. 495
            </div>
            <p>PRECIO EN SOLES</p>
            <ul class="promo-list">
                <li>✔️ 100% Práctico</li>
                <li>✔️ Acceso a grabación</li>
                <li>✔️ Cupo limitado</li>
            </ul>
            <a class="promo-button btn" href="<?php echo BD_URL ?>tienda">INSCRÍBETE AHORA</a>
        </div>
    </div>
    <!-- EL NEGOCIO DEL GRAVADO LÁSER -->
    <div class="container-fluid bg-dark text-white my-5"
        style="background: url('img/encabezadoservicios.png') no-repeat center center; background-size: cover; padding: 0px;">
        <div class="p-5" style="background-color: rgba(0, 0, 0, 0.2);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div>
                            <h2 class="section-title">El negocio del grabado láser</h2>
                        </div>
                        <div class="py-2">
                            <p>Actualmente el grabado láser es un servicio de mucha demanda, la calidad y precisión
                                de un láser permite crear productos, promocionales y muchos proyectos de gran
                                belleza y alto valor.</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a class="cta-button btn" href="<?php echo BD_URL ?>tienda">
                                INSCRIBETE AHORA
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6" style="display: flex; justify-content: space-around;">
                        <img src="img/imagennegocio1.png" class="img-fluid" alt="Grabado 1" style="width: 40%;">
                        <img src="img/imagennegocio2.png" class="img-fluid" alt="Grabado 2" style="width: 40%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--AL FINALIZAR EL CURSO-->
    <div class="text-center mb-4">
        <p class="text-muted mb-0">AL FINALIZAR EL CURSO</p>
        <h2 class="title" style="color: #795548;">Tendrás la capacidad de...</h2>
    </div>
    <div class="row">
        <div class="col-md-6 feature-item">
            <div class="row">
                <div class="col-4">
                    <img src="img/capacidadimg1.png" class="feature-img" alt="Conocer las oportunidades">
                </div>
                <div class="col-8">
                    <h3 class="feature-title">Conocer las oportunidades</h3>
                    <p class="feature-description">Podrás conocer el potencial de negocio del grabado láser.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 feature-item">
            <div class="row">
                <div class="col-4">
                    <img src="img/capacidadimg4.png" class="feature-img" alt="Aprovechar tu grabador láser">
                </div>
                <div class="col-8">
                    <h3 class="feature-title">Aprovechar tu grabador láser</h3>
                    <p class="feature-description">Conocerás tu equipo para así poder aprovechar al máximo su
                        capacidad.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 feature-item">
            <div class="row">
                <div class="col-4">
                    <img src="img/capacidadimg2.png" class="feature-img" alt="Crear fotograbados">
                </div>
                <div class="col-8">
                    <h3 class="feature-title">Crear fotograbados</h3>
                    <p class="feature-description">Podrás crear grabados con calidad fotográfica.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 feature-item">
            <div class="row">
                <div class="col-4">
                    <img src="img/capacidadimg5.png" class="feature-img" alt="Crear productos promocionales">
                </div>
                <div class="col-8">
                    <h3 class="feature-title">Crear productos promocionales</h3>
                    <p class="feature-description">Podrás ofrecer servicios promocionales empresariales.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 feature-item">
            <div class="row">
                <div class="col-4">
                    <img src="img/capacidadimg3.png" class="feature-img" alt="Ampliar tu catálogo de servicios">
                </div>
                <div class="col-8">
                    <h3 class="feature-title">Ampliar tu catálogo de servicios</h3>
                    <p class="feature-description">Tendrás el conocimiento para agregar un nuevo servicio a tu
                        catálogo.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 feature-item">
            <div class="row">
                <div class="col-4">
                    <img src="img/capacidadimg6.png" class="feature-img" alt="Crear un negocio rentable">
                </div>
                <div class="col-8">
                    <h3 class="feature-title">Crear un negocio rentable</h3>
                    <p class="feature-description">Aprenderás a hacer un adecuado costeo de productos, que te
                        permitirá ser rentable.</p>
                </div>
            </div>
        </div>
    </div>
    <!--APRENDE EN 2 HORAS-->
    <div class="container-fluid course-section">
        <div class="course-content col-6" style="padding: 0px;">
            <img src="img/2horas.png" class="image-fluid" alt="Curso de Grabado Láser"
                style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="course-content col-6"
            style="background-image: url(img/aprenderas.png); background-size: cover; padding: 0px;">
            <div style="background-color: #795548; opacity: 0.9; padding: 40px;">
                <div style="margin: 0px;">
                    <div class="row">
                        <p>APRENDE EL GRABADO LÁSER EN</p>
                    </div>
                    <div class="row">
                        <h2 class="course-highlight">2 HORAS</h2>
                    </div>
                    <div class="row" style="display: flex; justify-content: space-around;">
                        <div class="row col-6">
                            <p class="course-description">
                                En dos horas aprenderás todos los conceptos teóricos que te ayudarán a sacar máximo
                                provecho a tu maquina láser.
                            </p>
                            <ul class="course-features">
                                <li><i class="fa-solid fa-circle-check"></i>Curso 100% Práctico</li>
                                <li><i class="fa-solid fa-circle-check"></i> Curso en línea vía Google Meets</li>
                                <li><i class="fa-solid fa-circle-check"></i> Cupo LIMITADO</li>
                            </ul>
                        </div>
                        <div class="row col-6">
                            <p class="course-description">
                                Aprenderás desde cómo preparar imágenes en los diferentes programas de diseño, hasta
                                el correcto costeo de tus productos y servicios.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <a class="enroll-btn btn" href="<?php echo BD_URL ?>tienda">INSCRÍBETE AHORA</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--AL FINALIZAR ESTE CURSO-->
    <div class="container gallery-section">
        <p class="gallery-title">AL FINALIZAR ESTE CURSO</p>
        <h2 class="gallery-subtitle">PODRÁS CREAR PROYECTOS <br>COMO ESTOS</h2>
        <p></p>
        <div class="row final">
            <div class="col-md-4 gallery-item">
                <img src="img/llaveroconejo.png" alt="Llavero marcado">
                <p class="gallery-caption">Llavero marcado</p>
            </div>
            <div class="col-md-4 gallery-item">
                <img src="img/etiquetasdeproducto.png" alt="Etiqueta grabada con logo">
                <p class="gallery-caption">Etiqueta grabada con logo</p>
            </div>
            <div class="col-md-4 gallery-item">
                <img src="img/capacidadimg3.png" alt="Grabado en MDF">
                <p class="gallery-caption">Grabado en MDF</p>
            </div>
            <div class="col-md-4 gallery-item">
                <img src="img/imagen4cotizar.png" alt="Pláqueta grabada">
                <p class="gallery-caption">Pláqueta grabada</p>
            </div>
            <div class="col-md-4 gallery-item">
                <img src="img/gravado.png" alt="Grabado láser en melamina">
                <p class="gallery-caption">Grabado láser en melamina</p>
            </div>
            <div class="col-md-4 gallery-item">
                <img src="img/capacidadimg2.png" alt="Fotograbado de perro">
                <p class="gallery-caption">Fotograbado de perro</p>
            </div>
        </div>
    </div>
    <!--CUADRO DE INSCRIPCION-->
    <div class="promo-card">
        <div class="promo-header">
            <h2>Curso de grabado láser</h2>
            <p>CURSO EN LÍNEA</p>
        </div>
        <div class="promo-body">
            <div class="promo-price">
                S/. 395<sup>00</sup>
            </div>
            <div class="promo-discount">
                S/. 495
            </div>
            <p>PRECIO EN SOLES</p>
            <ul class="promo-list">
                <li>✔️ 100% Práctico</li>
                <li>✔️ Acceso a grabación</li>
                <li>✔️ Cupo limitado</li>
            </ul>
            <a style="text-decoration: none; color: #f8f9fa;" href="<?php echo BD_URL ?>tienda" class="promo-button">INSCRÍBETE
                AHORA</a>
        </div>
    </div>

</div>