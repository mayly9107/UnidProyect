<?php
/*session_start();
print_r($_SESSION);
if(!isset($_SESSION["correo"]) && !isset($_SESSION["password"])){
  header('Location: ../../index.php?error=Por favor, logueese');      
}*/
require_once '../../conexion/bd.php';
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
<?php
    if (isset($_GET["data"])) {
    ?>
        <p><?php echo $_GET["data"]; ?></p>
   <?php
    }
   ?>
<div class="sidenav">
    <div class="login-main-text">
        <h2>Usuario<br>Cree su usuario</h2>
        <p>Por favor, Ingrese los datos.</p>
    </div>
   </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div id="form-usr" class="login-form">
                <form action="insert_usr.php" method="Post">
                <div class="form-group">
                    <label for="nombre" class="thead-dark">Nombre del usuario</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu nombre">
                </div>
                <div class="form-group">
                    <label for="nombre">Correo</label>
                    <input type="text" class="form-control" name="correo" id="correo" placeholder="Ingresa tu correo">
                </div>
                <div class="form-group">
                    <label for="nombre">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingresa tu telefono">
                </div>
                <div class="form-group">
                    <label for="">Dirección</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingresa tu telefono">
                </div>
                <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Ingresa tu contraseña">
                </div>
                  <button type="submit" class="btn btn-secondary">Registrarse</button>
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