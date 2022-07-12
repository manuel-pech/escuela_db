<?php
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_all_profesores($connect, $id);
$profesor = mysqli_fetch_array($resultado);
?>
<form action="update.php" method="post"><center>
  <div class="elem-group">
    <label for="name">Nombre</label><br>
    <input type="text" id="name" value="<?php echo $profesor ['nombre'];?>" name="name" placeholder="introdusca su Nombre" pattern=[A-Z\sa-z]{3,20} required>
    <input type="hidden" id="id" value="<?php echo $profesor ['id'];?>" name="id" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="apellido">apellido</label><br>
    <input type="text" id="apellido" value="<?php echo $profesor ['apellido'];?>" name="apellido" placeholder="apellido">
  </div>
  <div class="elem-group">
  <label for="telefono">telefono</label><br>
    <input type="text" id="telefono" value="<?php echo $profesor ['telefono'];?>" name="telefono" placeholder="telefono">
  </div>
  <div class="elem-group">
  <label for="correo">correo</label><br>
    <input type="text" id="correo" value="<?php echo $profesor ['correo'];?>" name="correo" placeholder="correo">
  </div>
  <div class="elem-group">
  <label for="estatus">estatus</label><br>
    <input type="text" id="estatus" value="<?php echo $profesor ['estatus'];?>" name="estatus" placeholder="estatus">
  </div>
  
  <button type="submit">Enviar mensaje</button>
</center>
</form>