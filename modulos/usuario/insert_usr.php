<?php
    include_once('../../conexion/bd.php');

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $password = $_POST["password"];
    $consulta = "insert into datos_usr(nombre, correo, telefono, direccion, password)
                 values ('$nombre','$correo','$telefono','$direccion','$password')";
    mysqli_query($mysqli, $consulta);
    header('location: index.php');
?>