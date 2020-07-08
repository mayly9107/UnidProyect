<?php
//Validar que los campos no esten vacíos
//exista el usuario en la base de datos

require_once 'conexion/bd.php'; 
    

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $respuesta = '';

    if($usuario  == '' && empty($password)){
        $respuesta = 'Los valores no deben ser vacios';
        header('Location: index.php?data='. $respuesta);
    }else{
        $consulta = "SELECT * FROM datos_usr where correo = '$usuario'";
    $resultado = mysqli_query($mysqli, $consulta);
    $fila = mysqli_fetch_array($resultado);
    $respuesta = '';
    if (sizeof($fila) > 0){
        if($fila["password"]== $password){
            session_start();
            $_SESSION["id"] = $fila['id'];
            $_SESSION["nombre"] = $fila['nombre'];
            $_SESSION["status"] = $fila['status'];
            $respuesta = 1;
            header ('location: modulos/usuario/');
        }else{
            $respuesta = 'La contraseña no coincide con el usuario!!!';
        }
    }else{
        $respuesta = 'Usuario no encontrado!!!'.$consulta;
    }
        if($respuesta == 1){
            header('Location: modulos/usuario/');
        }
        else{
            header('Location: index.php?data='. $respuesta);
        }
    }

?>
