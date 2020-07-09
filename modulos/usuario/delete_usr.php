<?php
    require_once '../../conexion/bd.php';
    $id = $_GET['id'];
    $consulta = "delete from datos_usr where id = $id ";
    //echo $consulta;
    mysqli_query($mysqli, $consulta);
    
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
    $usuario = $_SESSION["nombre"];
    $qry1 = "insert into logs_blg (fuente_log, mensaje_log, usuario_log) 
    values ('datos_usr', CONCAT ('Se ha eliminado el ID ','$id', ' dentro de la tabla'), '$usuario')";
    mysqli_query($mysqli, $qry1);

    header('location: index.php');
?>