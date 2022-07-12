<form action="insert.php" method="post"><center>
  <div class="elem-group">
    <label for="name">Nombre</label><br>
    <input type="text" id="name" name="name" placeholder="introdusca su Nombre" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
  <label for="licenciatura">licenciatura</label><br>
    <input type="text" id="licenciatura" name="licenciatura" placeholder="licenciatura">
  </div>
  <div class="elem-group">
  <label for="cuatrimestre">cuatrimestre</label><br>
    <input type="text" id="cuatrimestre" name="cuatrimestre" placeholder="cuatrimestre">
  </div>
  
  <button type="submit">Enviar mensaje</button>
</center>
</form>