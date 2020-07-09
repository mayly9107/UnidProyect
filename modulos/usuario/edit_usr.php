<?php
    require_once '../../conexion/bd.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $password = $_POST['password'];
    $consulta = "update datos_usr  set
    nombre = '$nombre',
    correo = '$correo',
    telefono = '$telefono',
    direccion = '$direccion',
    password = '$password'
    where id= $id";
    mysqli_query($mysqli, $consulta);

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
    $usuario = $_SESSION["nombre"];
    $qry1 = "insert into logs_blg (fuente_log, mensaje_log, usuario_log) 
    values ('datos_usr', CONCAT ('Se ha editado el blog ','$nombre', ' dentro de la tabla'), '$usuario')";
    mysqli_query($mysqli, $qry1);
    header("location: index.php")
?>