async function listar_compras() {
    try {
        let respuesta = await fetch(base_url + '/controllers/Controller_compras.php?tipo=listar');
        let json = await respuesta.json();

        if (json.status) {
            let datos = json.contenido;
            let cont = 0;

            datos.forEach(element => {
                let fila = document.createElement("tr");
                cont += 1;
                fila.innerHTML = `
                                <th scope="row" class="text-center">${cont}</th>
                                <td class="text-center">${element.producto.nombre}</td>
                                <td class="text-center">${element.cantidad}</td>
                                <td class="text-center">${element.precio_total}</td>
                                <td class="text-center">${element.fecha_compra}</td>
                                <td class="text-center">${element.trabajador.razon_social}</td>
                                <td class="text-center">${element.options}</td>
                `;
                document.getElementById('tabla_compras').appendChild(fila);
            });
        } else {
            Swal.fire('No se encontraron compras.');
        }
        console.log(json);

        if (document.getElementById('tablaCompras')) {
        }

    } catch (error) {
        console.error("Oops, ocurrió un error: " + error);
        Swal.fire('Error al listar compras.', 'Ocurrió un error al procesar la solicitud.', 'error');
    }
}
async function registrar_compra() {
    let producto = document.getElementById('producto').value;
    let cantidad = document.getElementById('cantidad').value;
    let precio = document.getElementById('precio').value;
    let trabajador = document.getElementById('trabajador').value;

    if (producto === "" || cantidad === "" || precio === "" || trabajador === "") {
        Swal.fire('Por favor, complete todos los campos.');
        return;
    }

    try {
        const datos = new FormData(document.getElementById('formCompra'));

        let respuesta = await fetch(base_url + '/controllers/Controller_compras.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        let json = await respuesta.json();
        console.log(json);

        if (json.status) {
            Swal.fire({ title: "Registro exitoso", text: json.mensaje, icon: "success" });
            document.getElementById('formCompra').reset();
        } else {
            Swal.fire("Registro fallido", json.mensaje || "Hubo un problema al procesar la solicitud", "error");
        }
    } catch (error) {
        console.error("Oops, ocurrió un error: " + error);
        Swal.fire("Error en la solicitud", "Ocurrió un error al procesar la compra", "error");
    }
}

async function listar_productos() {
    try {
        let respuesta = await fetch(base_url + '/controllers/Controller_productos.php?tipo=listar');
        let json = await respuesta.json();

        if (json.status) {
            let datos = json.contenido;
            datos.forEach(element => {
                $('#producto').append($('<option />', {
                    text: `${element.nombre}`,
                    value: `${element.id}`
                }));
            });
        }
        console.log(respuesta);
    } catch (error) {
        console.error("Oops, ocurrió un error al listar productos: " + error);
    }
}

async function obtenerPrecioUnitario() {
    let ProductoId = document.getElementById('producto').value;
    if (ProductoId) {
        try {
            let response = await fetch(`${base_url}/controllers/Controller_compras.php?tipo=obtener_precio&producto_id=${ProductoId}`);
            let data = await response.json();
            if (data.status) {
                document.getElementById('precio').value = data.precio;
            } else {
                document.getElementById('precio').value = "Error al obtener precio";
            }
        } catch (error) {
            console.error("Error al obtener el precio unitario:", error);
        }
    } else {
        document.getElementById('precio').value = "";
    }
}

async function listar_trabajadores() {
    try {
        let respuesta = await fetch(base_url + '/controllers/Controller_persona.php?tipo=listarTrabajadores');
        let json = await respuesta.json();

        if (json.status) {
            let datos = json.contenido;
            datos.forEach(element => {
                $('#trabajador').append($('<option />', {
                    text: `${element.razon_social}`,
                    value: `${element.id}`
                }));
            });
        }
        console.log(respuesta);

    } catch (error) {
        console.error("Oops, ocurrió un error al listar trabajadores: " + error);
    }
}