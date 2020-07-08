<?php
/*session_start();
print_r($_SESSION);
if(!isset($_SESSION["correo"]) && !isset($_SESSION["password"])){
  header('Location: ../../index.php?error=Por favor, logueese');      
}*/
require_once '../../conexion/bd.php';
$id = $_GET['id'];
      $consulta = "SELECT * FROM blog_usr WHERE id = $id";
      $resultado = mysqli_query($mysqli, $consulta);
      $fila = mysqli_fetch_array($resultado);
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
        <h2>Blog<br>Editar su blog</h2>
        <p>Por favor, Edite los datos necesarios.</p>
    </div>
</div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div id="form-usr" class="login-form">
                <form action="edit_blg.php" method="Post">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" id="id"  value="<?php echo $fila['id']; ?>">
                    <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $fila['titulo']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control textL" name="descripcion" id="descripcion" value="<?php echo $fila['descripcion']; ?>">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo $fila['fecha']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="autor" id="autor" value="<?php echo $fila['autor']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="status" id="status" value="<?php echo $fila['status']; ?>">
                </div>
                <div class="form-group">
                    <select class="form-control" name="id_categoria" id="id_categoria">
                        <?php 
                            $consulta1 = "select * from categorias_usr";
                            $resultado1 = mysqli_query($mysqli, $consulta1);
                            while($fila1 = mysqli_fetch_array($resultado1)){
                        ?>  
                            <option value="<?php echo $fila1["id"] ?>" <?php if ($fila["id_categoria"]==$fila1["id"]){ ?> selected="selected" <?php } ?>><?php echo $fila1["nombre"]; ?></option>
                        <?php } ?>
                    </select>
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