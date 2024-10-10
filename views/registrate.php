<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('img/fondocontacto.png') no-repeat center center fixed;
            background-size: cover;
        }

        .register-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px 0px #000;
            max-width: 400px;
            width: 100%;
        }

        .register-container h1 {
            font-weight: bold;
            color: #FFA500;
            text-align: center;
            margin-bottom: 30px;
        }

        .register-container .form-control {
            margin-bottom: 15px;
        }

        .register-container .btn {
            background-color: #FFA500;
            border: none;
        }

        .register-container .btn:hover {
            background-color: #e69500;
        }

        .register-container .form-check-label {
            margin-bottom: 15px;
            display: block;
        }

        .register-container .login-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #FFA500;
            text-decoration: none;
        }

        .register-container .login-link:hover {
            text-decoration: underline;
        }

        .register-logo {
            width: 150px;
            display: block;
            margin: 20px auto 0;
        }

        input {
            width: 80%;
            height: 30px;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <h1>REGISTRO</h1>
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Usuario</label>
                <div class="input-group"><input type="text" class="form-control" id="username"
                        placeholder="Introduce tu usuario">
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="email" placeholder="Introduce tu correo electrónico">
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña">
                    <button id="togglePassword" style="background:none;" class="btn btn-outline-secondary"
                        type="button"><i class="fa-regular fa-eye"></i></button>
                </div>
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirmar Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="confirm-password"
                        placeholder="Confirma tu contraseña">
                    <button id="togglePassword" style="background:none;" class="btn btn-outline-secondary"
                        type="button"><i class="fa-regular fa-eye"></i></button>
                </div>
            </div>
            <div class="mb-3 form-check"
                style="border :rgb(180, 175, 180) solid 1px; display: flex; padding: 10px; margin: 10px 0px; align-items: center; border-radius: 12px;">
                <input type="checkbox" class="form-check-input" id="terms" style="width: 20px; height: 20px;">
                <label class="form-check-label" for="terms" style="font-size: 14px; margin: 10px;">Acepto los términos y
                    condiciones</label>
            </div>
            <button type="submit" class="btn btn-primary w-100"
                style="width:100%; padding: 10px; margin: 5px; border-radius: 10px; text-align: center;"><a
                    style="text-decoration: none; color: white;" href="Inicio.html">REGISTRARSE</a></button>
            <a href="../index.html" class="login-link">¿Ya tienes una cuenta? Iniciar sesión</a>
        </form>
        <img src="img/xtremeai.png" alt="Logo" class="register-logo">
    </div>


</body>
<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
<script src="https://kit.fontawesome.com/34fad0bc74.js" crossorigin="anonymous"></script>

</html>