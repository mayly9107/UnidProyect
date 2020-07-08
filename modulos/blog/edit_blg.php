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

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
    $usuario = $_SESSION["nombre"];
    $qry1 = "insert into logs_blg (fuente_log, mensaje_log, usuario_log) 
    values ('blog_usr', CONCAT ('Se ha editado el blog ','$titulo', ' dentro de la tabla'), '$usuario')";
    mysqli_query($mysqli, $qry1);
    header("location: index.php")
?>