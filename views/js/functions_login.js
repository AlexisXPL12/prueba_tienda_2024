document.getElementById('togglePassword').addEventListener('click', function() {
    const password = document.getElementById('password');
    const icon = this.querySelector('i');
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

async function iniciar_Sesion() {
    let usuario = document.getElementById('usuario').value;
    let password = document.getElementById('password').value;
    
    if (usuario == "" || password == "") {
        Swal.fire('Por favor, complete todos los campos.');
        return;
    }
    try {
        const datos = new FormData(document.getElementById('form_iniciarSesion'));
        let respuesta = await fetch(base_url + '/controllers/Controller_login.php?tipo=iniciar_sesion', {
            method: 'POST',
            body: datos
        });
        let resultado = await respuesta.json();
        if (resultado.error) {
            Swal.fire('Error', resultado.mensaje, 'error');
        } else {
            //Swal.fire('Éxito', 'Has iniciado sesión correctamente','success');
            location.replace(base_url + "inicio");
        }
    } catch (error) {
        console.error('Oops, ocurrió un error:', error);
        Swal.fire('Error', 'Ocurrió un error al iniciar sesión', 'error');
    }
}

if (document.getElementById('form_iniciarSesion')){
    let form_iniciarSesion = document.getElementById('form_iniciarSesion');
    form_iniciarSesion.onsubmit = function (e){
        e.preventDefault();
        iniciar_Sesion();
    }
}

async function cerrarSesion(){
    try {
        let respuesta = await fetch(base_url + 'controllers/Controller_login.php?tipo = cerrar_sesion',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });
        json = await respuesta.json();
        if (json.status) {
            //Swal.fire('Éxito', 'Has cerrado sesión correctamente','success');
            location.replace(base_url + "login");
        }
    } catch (error) {
        console.log('Ocurrio un error'.error);
    }
}

