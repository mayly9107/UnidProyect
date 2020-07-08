<?php
    require_once '../../conexion/bd.php';
    $nombre = $_POST['nombre'];
    $status = $_POST['status'];
    $usuario = $_POST['usuario'];
    $qry = "insert into categorias_usr (nombre, status, usuario) values ('$nombre','$status','$usuario')";
    mysqli_query($mysqli, $qry);
    header("location: index.php")
?>