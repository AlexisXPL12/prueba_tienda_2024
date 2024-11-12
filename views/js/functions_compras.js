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

        if (json.status) {
            Swal.fire("Registro exitoso", json.mensaje, "success");
            document.getElementById('formCompra').reset();
        } else {
            Swal.fire("Registro fallido", json.mensaje, "error");
        }
    } catch (error) {
        console.error("Oops, ocurrió un error: " + error);
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