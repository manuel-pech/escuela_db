<?php
// llama a la base de datos//
require_once("../lib/connect.php");
$consulta = "SELECT * FROM materia";
$materia = mysqli_query($connect, $consulta);

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
        <th>licenciatura </th>
        

    </tr>

    </thead>
    <tbody>
        <?php
        while($fila = mysqli_fetch_array($materia))
        {
        ?>
        <tr>
            <td><?php echo $fila["id"]?></td>
            <td><?php echo $fila["nombre"]?></td>
            <td><?php echo $fila["cuatrimestre"]?></td>
            <td><?php echo $fila["licenciatura"]?></td>
            <td><a href="formulario_materia.php?id=<?php echo $fila['id']; ?>">agregar materia</a></td>
            <td><a href=formulario_update.php?id=<?php echo $fila['id']; ?> >editar materia</a></td>
            <td><a href=detail.php?id=<?php echo $fila['id']; ?> > detallar materria</a></td>
            <td><a href=eliminar.php?id=<?php echo $fila['id']; ?> > eliminar</a></td>
        </tr>
        <?php
        }
        ?>
</tbody>
</table>

</body>
</html>