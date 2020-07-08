<?php
    require_once '../../conexion/bd.php';
    $id = $_GET['id'];
    $usuario = $_POST['usuario'];
    $consulta = "delete from categorias_usr where id = $id ";
    mysqli_query($mysqli, $consulta);
    header('location: index.php');
?>