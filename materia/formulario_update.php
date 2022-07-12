<?php
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_materia($connect, $id);
$materia = mysqli_fetch_array($resultado);
?>
<form action="update.php" method="post"><center>
  <div class="elem-group">
    <label for="name">Nombre</label><br>
    <input type="text" id="name" value="<?php echo $materia ['nombre'];?>" name="name" placeholder="introdusca su Nombre" pattern=[A-Z\sa-z]{3,20} required>
    <input type="hidden" id="id" value="<?php echo $materia ['id'];?>" name="id" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
  <label for="licenciatura">licenciatura</label><br>
    <input type="text" id="licenciatura" value="<?php echo $materia ['licenciatura'];?>" name="licenciatura" placeholder="licenciatura">
  </div>
  <div class="elem-group">
  <label for="cuatrimestre">cuatrimestre</label><br>
    <input type="text" id="cuatrimestre" value="<?php echo $materia ['cuatrimestre'];?>" name="cuatrimestre" placeholder="cuatrimestre">
  </div>
  
  
  <button type="submit">Enviar mensaje</button>
</center>
</form>