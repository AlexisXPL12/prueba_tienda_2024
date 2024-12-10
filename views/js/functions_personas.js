async function verPersona(id_u) {
    const formData = new FormData();
    formData.append("idPersona", id_u);
    try {
        let respuesta = await fetch(
            `${base_url}controllers/Controller_persona.php?tipo=ver_persona&t=${new Date().getTime()}`,
            {
                method: "POST",
                mode: "cors",
                cache: "no-cache",
                body: formData,
            }
        );
        let json = await respuesta.json();
        if (json.status) {
            let persona = json.datos;
            document.getElementById("id_persona").value = persona.id;
            document.getElementById("codigo").value = persona.nro_identidad;
            document.getElementById("nombre").value = persona.razon_social;
            document.getElementById("telefono").value = persona.telefono;
            document.getElementById("correo").value = persona.correo;
            document.getElementById("departamento").value = persona.departamento;
            document.getElementById("provincia").value = persona.provincia;
            document.getElementById("distrito").value = persona.distrito;
            document.getElementById("codigo_postal").value = persona.codigo_postal;
            document.getElementById("direccion").value = persona.direccion;
            document.getElementById("rol").value = persona.rol;
            document.getElementById("estado").value = persona.estado;
        } else {
            window.location.base_url = "/views/admin/usuarios.php";
            Swal.fire('Error', "Usuario no encontrado: " + json.mensaje, 'error');
        }
        console.log(json);
    } catch (error) {
        console.error("Oops, ocurrió un error:", error);
        Swal.fire('Error', 'Ocurrió un error al ver el usuario.', 'error');
    }
}
function togglePasswordVisibility() {
    const passwordField = document.getElementById('password');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
    } else {
        passwordField.type = 'password';
    }
}
async function listar_personas() {
    try {
        let respuesta = await fetch(base_url + '/controllers/Controller_persona.php?tipo=listar');
        let json = await respuesta.json();

        if (json.status) {
            let datos = json.contenido;
            let cont = 0;

            datos.forEach(element => {
                let fila = document.createElement("tr");
                cont += 1;
                fila.innerHTML = `
                            <th scope="row" class="text-center">${cont}</th>
                            <td class="text-center">${element.nro_identidad}</td>
                            <td class="text-center">${element.razon_social}</td>
                            <td class="text-center">${element.telefono}</td>
                            <td class="text-center">${element.correo}</td>
                            <td class="text-center">${element.departamento}</td> 
                            <td class="text-center">${element.provincia}</td>
                            <td class="text-center">${element.distrito}</td>
                            <td class="text-center">${element.codigo_postal}</td>
                            <td class="text-center">${element.direccion}</td>
                            <td class="text-center">${element.rol}</td>
                            <td class="text-center">${getEstadoTexto(element.estado)}</td>
                            <td class="text-center">${element.fecha_reg}</td>
                            <td class="text-center">${element.options}</td>
                            `;
                document.getElementById("tabla_personas").appendChild(fila);
            });
        } else {
            Swal.fire('No se encontraron personas.');
        }
        console.log(json);

        if (document.getElementById("tabla_personas")) {
        }
    } catch (error) {
        console.error("Oops, ocurrió un error: " + error);
        Swal.fire('Oops, ocurrió un error al listar personas.');
    }
}
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
    let password = document.getElementById('codigo').value;

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
async function actualizar_persona() {
    const datos = new FormData(document.getElementById('formPersona'));
    try {
        let respuesta = await fetch(
            `${base_url}/controllers/Controller_persona.php?tipo=editar&t=${new Date().getTime()}`,
            {
                method: "POST",
                mode: "cors",
                cache: "no-cache",
                body: datos
            }
        );
        let json = await respuesta.json();
        console.log(json);
        if (json.status) {
            Swal.fire({
                title: "Actualización exitosa",
                text: json.mensaje,
                icon: "success",
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
            }).then(() => {
                // Redirige a la página de usuarios al cerrar la alerta
                window.location.href = `${base_url}?admin=usuarios`;
            });
        } else {
            Swal.fire("Error", "No se pudo actualizar la persona: " + json.mensaje, "error");
        }
    } catch (error) {
        console.error("Oops, ocurrió un error: " + error);
        Swal.fire("Error", "Ocurrió un error al actualizar la persona.", "error");
    }
}

async function eliminar_persona(id) {
    const confirmacion = await Swal.fire({
        title: '¿Estás seguro?',
        text: 'Esta acción no se puede deshacer.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    });
    if (confirmacion.isConfirmed) {
        try {
            let respuesta = await fetch(
                `${base_url}/controllers/Controller_persona.php?tipo=eliminar&id=${id}&t=${new Date().getTime()}`,
                {
                    method: "POST",
                    mode: "cors",
                    cache: "no-cache",
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `id=${id}`
                }
            );
            let json = await respuesta.json();
            if (json.status) {
                Swal.fire({
                    title: "Eliminación exitosa",
                    text: json.mensaje,
                    icon: "success",
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: true,
                }).then(() => {
                    // Redirige a la página de usuarios al cerrar la alerta
                    window.location.href = `${base_url}?admin=usuarios`;
                });
            } else {
                Swal.fire("Error", "No se pudo eliminar la persona: " + json.mensaje, "error");
            }
        } catch (error) {
            console.error("Oops, ocurrió un error: " + error);
            Swal.fire("Error", "Ocurrió un error al eliminar la persona.", "error");
        }
    } else {
        // Canceló la eliminación
        Swal.fire('Cancelado', 'La eliminación fue cancelada.', 'error');
    }
}
