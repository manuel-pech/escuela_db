<?php
//coneccion con base de datos//
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_alumno($connect, $id);
$alumno = mysqli_fetch_array($resultado);
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
    <h1>alumnos</h1> <table> <thead>
        <tr><th>id </th>
        <th>nombre </th>
        <th>apellido </th>
        <th>telefono </th>
        <th>correo </th>
        <th>licenciatura</th>
        <th>cuatrimestre </th>
        <th>estatus </th>

    </tr>

    </thead>
    <tbody>
        <tr>
            <td><?php echo $alumno["id"]?></td>
            <td><?php echo $alumno["nombre"]?></td>
            <td><?php echo $alumno["apellido"]?></td>
            <td><?php echo $alumno["telefono"]?></td>
            <td><?php echo $alumno["correo"]?></td>
            <td><?php echo $alumno["licenciatura"]?></td>
            <td><?php echo $alumno["cuatrimestre"]?></td>
            <td><?php echo $alumno["estatus"]?></td>
        </tr>
        
        
</tbody>
</table>

</body>
</html>