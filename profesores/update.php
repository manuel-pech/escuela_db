<?php
require_once("../lib/functions.php");

$name = $_POST["name"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$estatus = $_POST["estatus"];
$id= $_POST["id"];
update_profesores($name,$apellido,$telefono,$correo,$estatus,$id);

header("Location: index.php");
?>
