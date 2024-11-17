<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const base_url = '<?php echo BD_URL ?>';
    </script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('<?php echo BD_URL ?>img/fondoiniciodesesion.png') no-repeat center center fixed;
            background-size: cover;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
        }

        .login-container h1 {
            font-weight: bold;
            color: #FF8C00;
            text-align: center;
            margin-bottom: 25px;
        }

        .login-container .form-control {
            border-radius: 8px;
            padding: 10px;
        }

        .login-container .btn-primary,
        .login-container .btn-outline-secondary {
            background-color: #FF8C00;
            border: 1px solid #FF8C00;
            border-radius: 8px;
            color: white;
            width: 100%;
            padding: 10px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .login-container .btn-primary:hover,
        .login-container .btn-outline-secondary:hover {
            background-color: #e07a00;
            border-color: #e07a00;
        }

        .register-link,
        .guest-mode {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #FF8C00;
            font-weight: bold;
            text-decoration: none;
        }

        .register-link:hover,
        .guest-mode:hover {
            color: #e07a00;
            text-decoration: underline;
        }

        .login-logo {
            width: 120px;
            display: block;
            margin: 20px auto 0;
        }

        .input-group .form-control {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            padding: 0 15px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>INICIAR SESIÓN</h1>
        <form method="post" action="" id="form_iniciarSesion">
            <div class="form-group">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Introduce tu usuario">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Introduce tu contraseña">
                    <div class="input-group-append">
                        <button id="togglePassword" class="btn btn-outline-secondary" type="button"><i class="fa fa-eye"></i></button>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
        <a href="<?php echo BD_URL ?>registrate" class="register-link">¿No tienes cuenta? Regístrate</a>
        <img src="<?php echo BD_URL ?>img/xtremeai.png" alt="Logo" class="login-logo">
    </div>


    <script src="<?php echo BD_URL ?>views/js/functions_login.js"></script>
    <!-- Toggle Password Script -->
    

<!-- Bootstrap and JQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
    <script src="https://kit.fontawesome.com/34fad0bc74.js" crossorigin="anonymous"></script>

</html>