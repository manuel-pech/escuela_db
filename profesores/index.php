<?php
require_once("../lib/connect.php");
$consulta = "SELECT * FROM profesores";
$resultado = mysqli_query($connect, $consulta);

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
        <?php
        while($fila = mysqli_fetch_array($resultado))
        {
        ?>
        <tr>
            <td><?php echo $fila["id"]?></td>
            <td><?php echo $fila["nombre"]?></td>
            <td><?php echo $fila["apellido"]?></td>
            <td><?php echo $fila["telefono"]?></td>
            <td><?php echo $fila["correo"]?></td>
            <td><?php echo $fila["estatus"]?></td>
        </tr>
        <?php
        }
        ?>
</tbody>
</table>

</body>
</html>