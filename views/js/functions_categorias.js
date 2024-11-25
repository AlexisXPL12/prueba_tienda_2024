async function listar_categorias(){
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
        } else{
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
            Swal.fire('Categoría registrada correctamente', json.mensaje, "success");
            document.getElementById('formCategoria').reset();
        } else {
            Swal.fire('Error al registrar la categoría', json.mensaje, "error");
        }
    
    }
    catch (error) {
        console.error("Oops, ocurrió un error: " + error);
    }
}
