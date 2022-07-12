<?php
//coneccion con base de datos//
require_once("../lib/functions.php");
$id = $_GET['id'];
$resultado = get_profesor($connect, $id);
$profesor = mysqli_fetch_array($resultado);
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
    <h1>profesores</h1> <table> <thead>
        <tr><th>id </th>
        <th>nombre </th>
        <th>apellido </th>
        <th>telefono </th>
        <th>correo </th>
        <th>estatus </th>

    </tr>

    </thead>
    <tbody>
        <tr>
            <td><?php echo $profesor["id"]?></td>
            <td><?php echo $profesor["nombre"]?></td>
            <td><?php echo $profesor["apellido"]?></td>
            <td><?php echo $profesor["telefono"]?></td>
            <td><?php echo $profesor["correo"]?></td>
            <td><?php echo $profesor["estatus"]?></td>
        </tr>
        
        
</tbody>
</table>

</body>
</html>