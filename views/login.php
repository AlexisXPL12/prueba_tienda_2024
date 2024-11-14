<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('img/fondoiniciodesesion.png') no-repeat center center fixed;
            background-size: cover;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px 0px #000;
            max-width: 400px;
            width: 100%;
        }

        .login-container h1 {
            font-weight: bold;
            color: #FFA500;
            text-align: center;
            margin-bottom: 30px;
        }

        .login-container .form-control {
            margin-bottom: 15px;
        }

        .login-container .btn {
            background-color: #FFA500;
            border: none;
        }

        .login-container .btn:hover {
            background-color: #e69500;
        }

        .login-container .form-check-label {
            margin-bottom: 15px;
            display: block;
        }

        .login-container .register-link,
        .login-container .guest-mode {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #FFA500;
            text-decoration: none;
        }

        .login-container .register-link:hover,
        .login-container .guest-mode:hover {
            text-decoration: underline;
        }

        .login-logo {
            width: 150px;
            display: block;
            margin: 20px auto 0;
        }

        input {
            width: 80%;
            padding: 0px;
            height: 30px;
        }

        .botoncitos input {
            width: 100%;
        }

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
    </style>
</head>

<body>
    <div class="login-container">
        <h1>INICIAR SESIÓN</h1>
        <form method="post" action="page/login.php">
            <div class="mb-3 row">
                <label for="username" class="form-label">Usuario</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="username" placeholder="Introduce tu usuario">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña">
                    <button id="togglePassword" style="background:none;" class="btn btn-outline-secondary"
                        type="button"><i class="fa-regular fa-eye"></i></button>
                </div>
            </div>
            <div style="text-align: center; width:100%;" class="botoncitos">
                <div class="mb-3 form-check row"
                    style="border: rgb(180, 175, 180) solid 1px; border-radius: 10px; width: 100%; justify-content: space-around; display: flex;">
                    <div style="display: flex; align-items: center; width: 100%;">
                        <input type="checkbox" class="form-check-input col-4" id="recaptcha" style="width: 30%;">
                        <label class="form-check-label" for="recaptcha" style="margin: 7px;">
                            <p>No soy un robot</p>

                        </label>
                        <img src="img/recaptchalogo-1.png" alt="Imagen de verificación"
                            style="width: 50px; height: 50px;">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary row"
                    style="border-radius: 5px; width: 50%; height: 30px; margin: 10px;"><a
                        style="text-decoration: none; color: white;" href="<?php echo BD_URL ?>inicio">INICIAR SESIÓN</a></button>
            </div>
        </form>
        <a href="<?php echo BD_URL ?>registrate" class="register-link">Regístrate</a>
        <a href="<?php echo BD_URL ?>inicio" class="btn btn-secondary w-100 guest-mode"
            style="text-decoration: none; color: white; border-radius: 5px;">MODO INVITADO</a>
        <img src="img/xtremeai.png" alt="Logo" class="login-logo">
    </div>

</body>
<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        const password = document.getElementById('password');
        const icon = document.getElementById('toggleIcon');
        if (password.type === 'password') {
            password.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            password.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
</script>

<!-- Bootstrap and JQuery scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
<script src="https://kit.fontawesome.com/34fad0bc74.js" crossorigin="anonymous"></script>

</html>