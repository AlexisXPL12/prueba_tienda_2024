async function verCategoria(id_c) {
    const formData = new FormData();
    formData.append("idCategoria", id_c);
    try {
        let respuesta = await fetch(
            `${base_url}controllers/Controller_categorias.php?tipo=ver_categoria&t=${new Date().getTime()}`,
            {
                method: "POST",
                mode: "cors",
                cache: "no-cache",
                body: formData,
            }
        );
        json = await respuesta.json();
        if (json.status) {
            let categoria = json.datos;
            document.getElementById("id_categoria").value = categoria.id;
            document.getElementById("nombre").value = categoria.nombre;
            document.getElementById("detalle").value = categoria.detalle;
        } else {
            window.location.base_url = "/views/admin/productos.php";
            Swal.fire("Error", "Producto no encontrado: " + json.mensaje, "error");
        }
        console.log(json);
    } catch (error) {
        console.error("Oops, ocurrió un error: " + error);
        Swal.fire("Error", "Ocurrió un error al ver la categoría.", "error");
    }

}
async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url + '/controllers/Controller_categorias.php?tipo=listar');
        let json = await respuesta.json();

        if (json.status) {
            let datos = json.contenido;
            let cont = 0;

            datos.forEach(element => {
                let fila = document.createElement("tr");
                cont += 1;
                fila.innerHTML = `
                        <th scope="row" class="text-center">${cont}</th>
                        <td class="text-center">${element.nombre}</td>
                        <td class="text-center">${element.detalle}</td>
                        <td class="text-center">${element.options}</td>
                        `;
                document.getElementById("tabla_categorias").appendChild(fila);
            });
        } else {
            Swal.fire('No se encontraron categorías.');
        }
        console.log(json);

        if (document.getElementById("tabla_categorias")) {
        }

    } catch (error) {
        console.error("Oops, ocurrió un error: " + error);
        Swal.fire('Oops, ocurrió un error al listar categorías.');
    }
}
async function registrar_categoria() {

    let nombre = document.getElementById('nombre').value;
    let detalle = document.getElementById('detalle').value;
    if (nombre == "" || detalle == "") {
        Swal.fire('Por favor, complete todos los campos.');
        return;
    }

    try {
        const datos = new FormData(formCategoria);
        let respuesta = await fetch(base_url + '/controllers/Controller_categorias.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        json = await respuesta.json();

        if (json.status) {
            Swal.fire({
                title: "Categoría registrada correctamente",
                text: json.mensaje,
                icon: "success",
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
            }).then(() => {
                // Redirige a la página de categorías
                window.location.href = `${base_url}?admin=categorias`;
            });
            
            // Resetea el formulario después de mostrar la alerta
            document.getElementById('formCategoria').reset();
        } else {
            Swal.fire('Error al registrar la categoría', json.mensaje, "error");
        }

    }
    catch (error) {
        console.error("Oops, ocurrió un error: " + error);
    }
}
async function actualizar_categoria() {
    const datos = new FormData(formUploadCategoria);
    try {
        let respuesta = await fetch(
            `${base_url}/controllers/Controller_categorias.php?tipo=editar&t=${new Date().getTime()}`,
            {
                method: "POST",
                mode: "cors",
                cache: "no-cache",
                body: datos
            }
        );
        json = await respuesta.json();
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
                // Redirige a la página de categorias al cerrar la alerta
                window.location.href = `${base_url}?admin=categorias`;
            });
        } else {
            Swal.fire("Error", "No se pudo actualizar la categoría: " + json.mensaje, "error");
        }
    } catch (error) {
        console.error("Oops, ocurrió un error: " + error);
        Swal.fire("Error", "Ocurrió un error al actualizar la categoría.", "error");
    }
}
async function eliminar_categoria(id) {
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
    if(confirmacion.isConfirmed){
        try {
            let respuesta = await fetch(
                `${base_url}/controllers/Controller_categorias.php?tipo=eliminar&id=${id}&t=${new Date().getTime()}`,
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
            console.log(json);
            if (json.status) {
                Swal.fire({
                    title: "Eliminación exitosa",
                    text: json.mensaje,
                    icon: "success",
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: true,
                }).then(() => {
                    // Redirige a la página de categorias al cerrar la alerta
                    window.location.href = `${base_url}?admin=categorias`;
                });
            } else {
                Swal.fire("Error", "No se pudo eliminar la categoría: " + json.mensaje, "error");
            }
        } catch (error) {
            console.error("Oops, ocurrió un error: " + error);
            Swal.fire("Error", "Ocurrió un error al eliminar la categoría.", "error");
        }
    }else{
        Swal.fire("Error", "No se pudo eliminar la categoría: " + json.mensaje, "error");
    }
}
