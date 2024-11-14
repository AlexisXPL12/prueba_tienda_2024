async function registrar_persona() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.getElementById('nombre').value;
    let detalle = document.getElementById('telefono').value;
    let precio = document.getElementById('correo').value;
    let departamento = document.getElementById('departamento').value;
    let provincia = document.getElementById('provincia').value;
    let distrito = document.getElementById('distrito').value;
    let codigo_postal = document.getElementById('codigo_postal').value
    let direccion = document.getElementById('direccion').value;
    let rol = document.getElementById('rol').value;
    let password = document.getElementById('password').value;

    // Verificar que todos los campos estén completos
    if (
        codigo === "" || nombre === "" || telefono === "" || correo === "" ||
        departamento === "" || provincia === "" || distrito === "" || codigo_postal == "" ||
        direccion === "" || rol === "" || password === ""
    ) {
        Swal.fire('Por favor, complete todos los campos.');
        return;
    }

    try {
        // Crear el FormData a partir del formulario formPersona
        const datos = new FormData(document.getElementById('formPersona'));

        // Enviar la solicitud al backend
        let respuesta = await fetch(base_url + '/controllers/Controller_persona.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        // Convertir la respuesta a JSON
        let json = await respuesta.json();

        // Mostrar alerta de éxito o error
        if (json.status) {
            Swal.fire("Registro exitoso", json.mensaje, "success");
        } else {
            Swal.fire("Registro fallido", json.mensaje, "error");
        }

    } catch (error) {
        console.error("Oops, ocurrió un error: " + error);
        Swal.fire("Error", "Ocurrió un error al registrar la persona.", "error");
    }
}
