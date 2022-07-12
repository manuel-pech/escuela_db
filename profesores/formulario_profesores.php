<form action="insert.php" method="post"><center>
  <div class="elem-group">
    <label for="name">Nombre</label><br>
    <input type="text" id="name" name="name" placeholder="introdusca su Nombre" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="apellido">apellido</label><br>
    <input type="text" id="apellido" name="apellido" placeholder="apellido">
  </div>
  <div class="elem-group">
  <label for="telefono">telefono</label><br>
    <input type="text" id="telefono" name="telefono" placeholder="telefono">
  </div>
  <div class="elem-group">
  <label for="correo">correo</label><br>
    <input type="text" id="correo" name="correo" placeholder="correo">
  </div>
  <div class="elem-group">
  <label for="estatus">estatus</label><br>
    <input type="text" id="estatus" name="estatus" placeholder="estatus">
  </div>
  
  <button type="submit">Enviar mensaje</button>
</center>
</form>