<?php
    require_once '../../conexion/bd.php';
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];
    $autor = $_POST['autor'];
    $status = $_POST['status'];
    $id_categoria = $_POST['id_categoria'];
    $consulta = "update blog_usr  set
    titulo = '$titulo',
    descripcion = '$descripcion',
    fecha = '$fecha',
    autor = '$autor',
    status = '$status'
    id_categoria = '$id_categoria'
    where id= $id";
    mysqli_query($mysqli, $consulta);
    header("location: index.php")
?>