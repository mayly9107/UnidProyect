<?php
    require_once '../../conexion/bd.php';
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];
    $autor = $_POST['autor'];
    $status = $_POST['status'];
    $id_categoria = $_POST['id_categoria'];
    $qry = "insert into blog_usr (titulo, descripcion , fecha, autor, status, id_categoria) values ('$titulo','$descripcion','$fecha','$autor','$status','$id_categoria')";
    mysqli_query($mysqli, $qry);
    header("location: index.php")
?>