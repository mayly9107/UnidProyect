<?php 
    $usuario = "root";
    $password = "";
    $database = "baseunid";
    $server = "localhost";
    $mysqli = mysqli_connect($server, $usuario, $password, $database);
    /*if(mysqli_connect_errno($mysqli)){
        echo "No se puede conectar".mysqli_connect_error();
    }else{
        echo "Se conectó";
    }*/
    
?>