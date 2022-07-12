<?php
require_once("../lib/functions.php");

$name = $_POST["name"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$estatus = $_POST["estatus"];

insertar_profesores($name,$apellido,$telefono,$correo,$estatus);

header("Location: index.php");
?>
