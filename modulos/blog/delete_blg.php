<?php
    require_once '../../conexion/bd.php';
    $id = $_GET['id'];
    $consulta = "delete from blog_usr where id = $id ";
    //echo $consulta;
    mysqli_query($mysqli, $consulta);
    header('location: index.php');
?>