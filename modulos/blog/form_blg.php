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
        <h2>Usuario<br>Cree su usuario</h2>
        <p>Por favor, Ingrese los datos.</p>
    </div>
   </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div id="form-usr" class="login-form">
                <form action="insert_blg.php" method="Post">
                <div class="form-group">
                    <label for="titulo" class="thead-dark">Título</label>
                    <input type="hidden" class="form-control" name="usuario" id="usuario"  value="<?php echo $usuario; ?>">
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingresa el titulo">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingresa la descripción">
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Ingresa la fecha">
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" name="autor" id="autor" placeholder="Ingresa el autor">
                </div>
                <div class="form-group">
                    <label for="status">Estatus</label>
                    <input type="text" class="form-control" name="status" id="status" placeholder="Ingresa el estatus">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoría</label><br/>
                    <select class="form-control" name="id_categoria" id="id_categoria">
                    <?php 
                        $consulta = "SELECT * FROM categorias_usr";
                        $resultado = mysqli_query($mysqli, $consulta);
                        while($fila = mysqli_fetch_array($resultado)){
                    ?>  
                        <option value="<?php echo $fila["id"] ?>" selected="selected"><?php echo $fila["nombre"]; ?></option>
                    <?php } ?>
            </select>
                </div>
                  <button type="submit" class="btn btn-secondary">Guardar</button>
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