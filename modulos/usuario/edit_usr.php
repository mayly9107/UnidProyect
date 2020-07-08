<?php
    require_once '../../conexion/bd.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $password = $_POST['password'];
    $consulta = "update datos_usr  set
    nombre = '$nombre',
    correo = '$correo',
    telefono = '$telefono',
    direccion = '$direccion',
    password = '$password'
    where id= $id";
    mysqli_query($mysqli, $consulta);
    header("location: index.php")
?>