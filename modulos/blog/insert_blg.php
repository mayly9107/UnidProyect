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
    //header("location: index.php")

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
    $usuario = $_SESSION["nombre"];
    $qry1 = "insert into logs_blg (fuente_log, mensaje_log, usuario_log) 
    values ('blog_usr', CONCAT ('Se ha registrado el blog ','$titulo', ' dentro de la tabla'), '$usuario')";
    mysqli_query($mysqli, $qry1);
    
    header("location: index.php")
    
?>