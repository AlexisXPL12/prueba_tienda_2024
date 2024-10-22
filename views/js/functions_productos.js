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

        const datos = new FormData('formProducto'); 

        let respuesta = await fetch(base_url + 'controllers/Controller_productos.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        if (respuesta.ok) {
            const result = await respuesta.text();
            Swal.fire('Producto registrado con éxito:', result);
            sweetAlert('Producto registrado con éxito');
        } else {
            console.error('Error al registrar el producto:', respuesta.statusText);
            Swal.fire('Error al registrar el producto');
        }
    } catch (error) {
        console.error("Oops, ocurrió un error: " + error);
    }
}



