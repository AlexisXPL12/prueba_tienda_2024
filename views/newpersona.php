 <form id="formPersona" action="">
     <h2>Agregar Persona</h2>

     <div class="form-group">
         <label for="codigo">Número de identidad:</label>
         <input type="text" class="form-control" id="codigo" name="codigo" maxlength="20" required>
     </div>

     <div class="form-group">
         <label for="nombre">Nombre o Razón Social de la persona:</label>
         <input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" required>
     </div>

     <div class="form-group">
         <label for="telefono">Teléfono:</label>
         <input type="text" class="form-control" id="telefono" name="telefono" maxlength="100" required>
     </div>

     <div class="form-group">
         <label for="correo">Correo:</label>
         <input type="email" class="form-control" id="correo" name="correo" maxlength="100" required>
     </div>

     <div class="form-group">
         <label for="departamento">Departamento:</label>
         <input type="text" class="form-control" id="departamento" name="departamento" maxlength="50" required>
     </div>

     <div class="form-group">
         <label for="provincia">Provincia:</label>
         <input type="text" class="form-control" id="provincia" name="provincia" maxlength="50" required>
     </div>

     <div class="form-group">
         <label for="distrito">Distrito:</label>
         <input type="text" class="form-control" id="distrito" name="distrito" maxlength="50" required>
     </div>
     <div class="form-group">
         <label for="codigo_postal">Codigo Postal:</label>
         <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" maxlength="50" required>
     </div>
     <div class="form-group">
         <label for="direccion">Dirección:</label>
         <input type="text" class="form-control" id="direccion" name="direccion" maxlength="20" required>
     </div>

     <div class="form-group">
         <label for="rol">Rol:</label>
         <select name="rol" id="rol" class="form-control">
            <option value="no definido">Selecciona un rol</option>
            <option value="administrador">administrador</option>
            <option value="trabajador">trabajador</option>
            <option value="proveedor">proveedor</option>
            <option value="cliente">cliente</option>

         </select>
     </div>

     <div class="form-group">
         <label for="password">Contraseña:</label>
         <input type="password" class="form-control" id="password" name="password" maxlength="200" required>
     </div>

     <button type="button" class="btn btn-warning" onclick="registrar_persona()">Agregar Persona</button>
 </form>

 <script src="<?php echo BD_URL ?>views/js/functions_personas.js"></script>