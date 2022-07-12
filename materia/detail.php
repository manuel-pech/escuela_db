<?php
//coneccion con base de datos//
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_materia($connect, $id);
$materia = mysqli_fetch_array($resultado);
//fin//
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>materia</h1> <table> <thead>
        <tr><th>id </th>
        <th>nombre </th>
        <th>cuatrimestre </th>
        <th>licensiatura </th>

    </tr>

    </thead>
    <tbody>
        <tr>
            <td><?php echo $materia["id"]?></td>
            <td><?php echo $materia["nombre"]?></td>
            <td><?php echo $materia["cuatrimestre"]?></td>
            <td><?php echo $materia["licenciatura"]?></td>
            <
        </tr>
        
        
</tbody>
</table>

</body>
</html>