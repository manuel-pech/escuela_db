<?php
require_once("../lib/functions.php");
$alumno = get_all_alumnos($connect);

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
        <?php
        while($fila = mysqli_fetch_array($alumno))
        {

        ?>

        <tr>
            <td><?php echo $fila["id"]?></td>
            <td><?php echo $fila["nombre"]?></td>
            <td><?php echo $fila["apellido"]?></td>
            <td><?php echo $fila["telefono"]?></td>
            <td><?php echo $fila["correo"]?></td>
            <td><?php echo $fila["licenciatura"]?></td>
            <td><?php echo $fila["cuatrimestre"]?></td>
            <td><?php echo $fila["estatus"]?></td>
            <td><a href=formulario.php?id=<?php echo $fila['id']; ?> >agregar alum</a></td>
            <td><a href="formulari_update.php?id=<?php echo $fila['id']; ?>" >editar alum</a></td>
            <td><a href=detail.php?id=<?php echo $fila['id']; ?> > detallar alum</a></td>
            <td><a href="eliminar.php?id=<?php echo $fila['id']; ?>" >eliminar alum</a></td>

        </tr>
        <?php

        }
        ?>
</tbody>
</table>

</body>
</html>