async function registrar_producto() {

    let codigo = document.getElementById('codigo').value; 
    let nombre = document.getElementById('nombre').value;
    let detalle = document.getElementById('detalle').value;
    let precio = document.getElementById('precio').value;
    let stock = document.getElementById('stock').value;
    let categoria = document.getElementById('categoria').value;
    let imagen = document.getElementById('imagen').value; 
    let proveedor = document.getElementById('proveedor').value;

    if (codigo == "" || nombre == "" || detalle == "" || 
        precio == "" || stock == "" || categoria == "" || 
        imagen === "" || proveedor == "") {
        Swal.fire('Por favor, complete todos los campos.');
        return; 
    }

    try {

        const datos = new FormData(formProducto); 

        let respuesta = await fetch(base_url + '/controllers/Controller_productos.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        json = await respuesta.json();
        if (json.status) {
            Swal.fire( "Registro exitoso", json.mensaje,"success");
        }else{
            Swal.fire( "Registro fallido", json.mensaje,"error");
        }
    } catch (error) {
        console.error("Oops, ocurrió un error: " + error)
        
    }
}

async function listar_categoria() {
    try {
        let respuesta = await fetch(base_url + '/controllers/Controller_categorias.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            datos.forEach(element => {
                 $('#categoria').append($('<option />',{
                    text: `${element.nombre}`,
                    value: `${element.id}`
                 }));
                 
            });
        }
        console.log(respuesta);
        
    } catch (error) {
        console.error("Oops, ocurrió un error: " + error)
    }
}

// async function listar_categoria() {
//     try {
//         let respuesta = await fetch(base_url + '/controllers/Controller_categorias.php?tipo=listar');
//         json = await respuesta.json();
//         if (json.status) {
//             let datos = json.contenido;
//             let contenido_select = '<option value = "" >Seleccione una categoria</option>';
//             datos.forEach(element => {
//                 contenido_select += '<option value ="' + element.id + '">' + element.nombre + '</option>';        
//             });
//             document.getElementById('categoria').innerHTML = contenido_select;
//         }
//     } catch (error) {
//         console.error("Oops, ocurrió un error: " + error)
//     }
// }

async function listar_proveedor() {
    try {
        let respuesta = await fetch(base_url + '/controllers/Controller_persona.php?tipo=listar');
        let json = await respuesta.json();
        
        if (json.status) {
            let datos = json.contenido;
            $('#proveedor').empty().append('<option value="">Seleccione un proveedor</option>');
            datos.forEach(element => {
                 $('#proveedor').append($('<option />', {
                    text: `${element.razon_social}`,
                    value: `${element.id}`
                 }));
            });
        }
    } catch (error) {
        console.error("Oops, ocurrió un error: " + error);
    }
}

// async function listar_proveedor() {
//     try{
//     let respuesta = await fetch(base_url + '/controllers/Controller_persona.php?tipo=listar');
//         json = await respuesta.json();
        
//         if (json.status) {
//             let datos = json.contenido;
//             let contenido_select = '<option value = "" >Seleccione un proveedor</option>';
//             datos.forEach(element => {
//                 contenido_select += '<option value ="' + element.id + '">' + element.razon_social + '</option>';        
//             });
//             document.getElementById('proveedor').innerHTML = contenido_select;
//         }
        
//     } catch (error) {
//         console.error("Oops, ocurrió un error: " + error)
//     }
// }



