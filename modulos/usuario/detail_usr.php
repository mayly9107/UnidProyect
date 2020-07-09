<?php
/*session_start();
print_r($_SESSION);
if(!isset($_SESSION["correo"]) && !isset($_SESSION["password"])){
  header('Location: ../../index.php?error=Por favor, logueese');      
}*/
require_once '../../conexion/bd.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  $usuario = $_SESSION["nombre"];
$id = $_GET["id"];
$consulta = "SELECT * FROM datos_usr WHERE id = $id";
    $resultado = mysqli_query($mysqli, $consulta);
    $fila = mysqli_fetch_array($resultado);
      //print_r($fila);

?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="sidenav">
    <div class="login-main-text">
        <h2>Usuario<br>Editar su usuario</h2>
        <p>Por favor, Edite los datos necesarios.</p>
    </div>
</div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div id="form-usr" class="login-form">
                <form action="edit_usr.php" method="Post">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" id="id"  value="<?php echo $fila['id']; ?>">
                    <input type="hidden" class="form-control" name="usuario" id="usuario"  value="<?php echo $usuario; ?>">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $fila['nombre']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="correo" id="correo" value="<?php echo $fila['correo']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $fila['telefono']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $fila['direccion']; ?>">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" value="<?php echo $fila['password']; ?>">
                </div>
                  <button type="submit" class="btn btn-secondary">Modificar</button>
                </form>
            </div>
        </div>
    </div>
    
  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>