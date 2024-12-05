async function verProducto(id_p) {
  const formData = new FormData();
  formData.append("idProducto", id_p);
  try {
    let respuesta = await fetch(
      base_url + "controllers/Controller_productos.php?tipo=ver_producto",
      {
        method: "POST",
        mode: "cors",
        cache: "no-cache",
        body: formData,
      }
    );
    json = await respuesta.json();
    if (json.status) {
      let producto = json.datos;
      document.getElementById("id_producto").value = producto.id;
      document.getElementById("img").value = producto.img;
      document.getElementById("codigo").value = producto.codigo;
      document.getElementById("nombre").value = producto.nombre;
      document.getElementById("detalle").value = producto.detalle;
      document.getElementById("precio").value = producto.precio;
      document.getElementById("stock").value = producto.stock;
      document.getElementById("categoria").value = producto.id_categoria;
      document.getElementById("proveedor").value = producto.id_proveedor;  
      // Mostrar imagen actual del producto
      const imgVistaPrevia = document.getElementById("vista-previa");
      imgVistaPrevia.src = `${base_url}assets/img_productos/${producto.img}`;
      imgVistaPrevia.style.display = "block";
    } else {
      window.location.base_url = "/admin/productos";
      Swal.fire("Error", "Producto no encontrado: " + json.mensaje, "error");
    }
    console.log(json);
  } catch (error) {
    console.error("Opps, ocurrió un error:" + error);
    Swal.fire("Error", "Ocurrió un error al ver el producto.", "error");
  }
}
// Vista previa de la nueva imagen seleccionada
function vistaPreviaImagen(event) {
  const input = event.target;
  const imgVistaPrevia = document.getElementById("vista-previa");

  if (input.files && input.files[0]) {
      const reader = new FileReader();
      reader.onload = function (e) {
          imgVistaPrevia.src = e.target.result;
          imgVistaPrevia.style.display = "block";
      };
      reader.readAsDataURL(input.files[0]);
  }
}
async function listar_productos() {
  try {
    let respuesta = await fetch(
      base_url + "/controllers/Controller_productos.php?tipo=listar"
    );
    let json = await respuesta.json();

    if (json.status) {
      let datos = json.contenido;
      let cont = 0;

      datos.forEach((element) => {
        let fila = document.createElement("tr");
        cont += 1;
        fila.innerHTML = `
                        <th scope="row" class="text-center">${cont}</th>
                        <td class="text-center">${element.codigo}</td>
                        <td class="text-center">${element.nombre}</td>
                        <td class="text-center">${element.precio}</td>
                        <td class="text-center">${element.stock}</td>
                        <td class="text-center">${element.categoria.nombre}</td>
                        <td class="text-center">${element.proveedor.razon_social}</td>
                        <td class="text-center">${element.options}</td>
              
          `;
        document.getElementById("tabla_productos").appendChild(fila);
      });
    } else {
      Swal.fire("No se encontraron productos.");
    }
    console.log(json);

    if (document.getElementById("tabla_productos")) {
    }
  } catch (error) {
    console.error("Oops, ocurrió un error: " + error);
    Swal.fire("Oops, ocurrió un error al listar los productos.");
  }
}

async function registrar_producto() {
  let codigo = document.getElementById("codigo").value;
  let nombre = document.getElementById("nombre").value;
  let detalle = document.getElementById("detalle").value;
  let precio = document.getElementById("precio").value;
  let stock = document.getElementById("stock").value;
  let categoria = document.getElementById("categoria").value;
  let imagen = document.getElementById("imagen").value;
  let proveedor = document.getElementById("proveedor").value;

  if (
    codigo == "" ||
    nombre == "" ||
    detalle == "" ||
    precio == "" ||
    stock == "" ||
    categoria == "" ||
    imagen === "" ||
    proveedor == ""
  ) {
    Swal.fire("Por favor, complete todos los campos.");
    return;
  }

  try {
    const datos = new FormData(formProducto);

    let respuesta = await fetch(
      base_url + "/controllers/Controller_productos.php?tipo=registrar",
      {
        method: "POST",
        mode: "cors",
        cache: "no-cache",
        body: datos,
      }
    );

    json = await respuesta.json();
    if (json.status) {
      Swal.fire("Registro exitoso", json.mensaje, "success");
    } else {
      Swal.fire("Registro fallido", json.mensaje, "error");
    }
  } catch (error) {
    console.error("Oops, ocurrió un error: " + error);
  }
}

async function listar_categoria() {
  try {
    let respuesta = await fetch(
      base_url + "/controllers/Controller_categorias.php?tipo=listar"
    );
    json = await respuesta.json();
    if (json.status) {
      let datos = json.contenido;
      datos.forEach((element) => {
        $("#categoria").append(
          $("<option />", {
            text: `${element.nombre}`,
            value: `${element.id}`,
          })
        );
      });
    }
    console.log(respuesta);
  } catch (error) {
    console.error("Oops, ocurrió un error: " + error);
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
    let respuesta = await fetch(
      base_url + "/controllers/Controller_persona.php?tipo=listar_proveedor"
    );
    let json = await respuesta.json();

    if (json.status) {
      let datos = json.contenido;
      $("#proveedor")
        .empty()
        .append('<option value="">Seleccione un proveedor</option>');
      datos.forEach((element) => {
        $("#proveedor").append(
          $("<option />", {
            text: `${element.razon_social}`,
            value: `${element.id}`,
          })
        );
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
async function actualizar_producto() {
  const datos = new FormData(formActualizar);
  try {
    let respuesta = await fetch(
      base_url + "/controllers/Controller_productos.php?tipo=editar",
      {
        method: "POST",
        mode: "cors",
        cache: "no-cache",
        body: datos,
      }
    );
    json = await respuesta.json();
    if (json.status) {
      Swal.fire("Actualización exitosa", json.mensaje, "success");
      location.href = "productos";
    } else {
      Swal.fire("Actualización fallida", json.mensaje, "error");
    }
    
  } catch (error) {
    console.error("Oops, ocurrió un error: " + error);
    Swal.fire("Error", "Ocurrió un error al actualizar el producto.", "error");
  }
}
