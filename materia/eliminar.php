<?php
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_materia($connect, $id);
$materia = mysqli_fetch_array($resultado);
delete_materia($id); 
header ("Location: index.php");

?>
