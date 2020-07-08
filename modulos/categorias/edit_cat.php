<?php
    require_once '../../conexion/bd.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $status = $_POST['status'];
    $usuario = $_POST['usuario'];
    $consulta = "update categorias_usr  set
    nombre = '$nombre',
    status = '$status',
    usuario = '$usuario'
    where id= $id";
    mysqli_query($mysqli, $consulta);
    header("location: index.php")
?>