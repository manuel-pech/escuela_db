<?php
require_once("../lib/functions.php");

$name = $_POST["name"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$licenciatura = $_POST["licenciatura"];
$cuatrimestre = $_POST["cuatrimestre"];
$estatus = $_POST["estatus"];

insertar_alumnos($name,$apellido,$telefono,$correo,$licenciatura,$cuatrimestre,$estatus);

header("Location: index.php");
?>
