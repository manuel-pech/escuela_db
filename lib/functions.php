<?php
require_once("connect.php");
// definicion de funciones//
function get_all_alumnos($connect){
    $consulta = "SELECT * FROM alumnos";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
} 

function get_alumno($connect, $id){
    $consulta = "SELECT * FROM alumnos WHERE id = $id"; 
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
} 
function get_all_profesores($connect){
    $consulta = "SELECT * FROM profesores";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
} 

function get_profesor($connect, $id){
    $consulta = "SELECT * FROM profesores WHERE id = $id"; 
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
} 

function insertar_alumnos($name,$apellido,$telefono,$correo,$licenciatura,$cuatrimestre,$estatus){
    global $connect;
    $consulta = "INSERT INTO alumnos(nombre,apellido,telefono,correo,licenciatura,cuatrimestre,estatus) values('$name','$apellido','$telefono','$correo','$licenciatura','$cuatrimestre','$estatus')"; 
    $resultado = mysqli_query($connect,$consulta);
    //return $resultado;
}

function insertar_profesores($name,$apellido,$telefono,$correo,$estatus){
    global $connect;
    $consulta = "INSERT INTO profesores(nombre,apellido,telefono,correo,estatus) values('$name','$apellido','$telefono','$correo','$estatus')"; 
    $resultado = mysqli_query($connect,$consulta);
    //return $resultado;
}
function insertar_materia($name,$cuatrimestre,$licenciatura){
    global $connect;
    $consulta = "INSERT INTO materia(nombre,cuatrimestre,licenciatura) values('$name','$cuatrimestre','$licenciatura')"; 
    $resultado = mysqli_query($connect,$consulta);
    //return $resultado;
}
function update_alumnos($name,$apellido,$telefono,$correo,$licenciatura,$cuatrimestre,$estatus,$id){
    global $connect;
    $consulta = "UPDATE alumnos SET nombre='$name', apellido='$apellido', telefono='$telefono', correo='$correo', licenciatura='$licenciatura', cuatrimestre='$cuatrimestre', estatus='$estatus' WHERE id=$id"; 
    $resultado = mysqli_query($connect,$consulta);
}
function update_profesores($name,$apellido,$telefono,$correo,$estatus,$id){
    global $connect;
    $consulta = "UPDATE profesores SET nombre='$name', apellido='$apellido', telefono='$telefono', correo='$correo', estatus='$estatus' WHERE id=$id"; 
    $resultado = mysqli_query($connect,$consulta);
}
function update_materia($name,$licenciatura,$cuatrimestre,$id){
    global $connect;
    $consulta = "UPDATE materia SET nombre='$name', licenciatura='$licenciatura', cuatrimestre='$cuatrimestre' WHERE id=$id"; 
    $resultado = mysqli_query($connect,$consulta);
}
function get_materia($connect, $id){
    $consulta = "SELECT * FROM materia WHERE id = $id"; 
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
} 
function delete_alumnos($id){
    global $connect;
    $consulta = "DELETE FROM alumnos WHERE id=$id"; 
    $resultado = mysqli_query($connect,$consulta);
}
function delete_profesores($id){
    global $connect;
    $consulta = "DELETE FROM profesores WHERE id=$id"; 
    $resultado = mysqli_query($connect,$consulta);
}
function delete_materia($id){
    global $connect;
    $consulta = "DELETE FROM materia WHERE id=$id"; 
    $resultado = mysqli_query($connect,$consulta);
}

?>
