<?php
require_once("../lib/functions.php");

$name = $_POST["name"];
$licenciatura = $_POST["licenciatura"];
$cuatrimestre = $_POST["cuatrimestre"];
$id= $_POST["id"];
update_materia($name,$licenciatura,$cuatrimestre,$id);

header("Location: index.php");
?>
