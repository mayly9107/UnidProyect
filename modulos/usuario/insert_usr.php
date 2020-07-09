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

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
    $usuario = $_SESSION["nombre"];
    $qry1 = "insert into logs_blg (fuente_log, mensaje_log, usuario_log) 
    values ('datos_usr', CONCAT ('Se ha registrado el usuario ','$nombre', ' dentro de la tabla'), '$usuario')";
    mysqli_query($mysqli, $qry1);
    header('location: index.php');
?>