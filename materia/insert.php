<?php
require_once("../lib/functions.php");

$name = $_POST["name"];
$licenciatura = $_POST["licenciatura"];
$cuatrimestre = $_POST["cuatrimestre"];

insertar_materia($name,$licenciatura,$cuatrimestre);

header("Location: index.php");
?>
