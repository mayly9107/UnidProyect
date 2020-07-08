
<?php
/*session_start();
print_r($_SESSION);
if(!isset($_SESSION["correo"]) && !isset($_SESSION["password"])){
  header('Location: ../../index.php');      
}else{
  header('Location: index.php');
}*/
include_once("../../conexion/bd.php");
?>

<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-8">
        <a href="form_cat.php" class="btn btn-info float-right mb-5"> Nueva categoría </a> 
      </div>
      <div class="col-sm-3 upsset-1">
        <a href="../blog/index.php" class="btn btn-info float-right mb-5"> Blog </a> 
      </div>
      
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Estatus</th>
              <th scope="col">Acciones</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $consulta = "SELECT * FROM categorias_usr";
              $resultado = mysqli_query($mysqli, $consulta);
              while($fila = mysqli_fetch_array($resultado)){
            ?>
            <tr>
              <th><?php echo $fila["nombre"]; ?></th>
              <td><?php echo $fila["status"]; ?></td>
              <td><a href="detail_cat.php?id=<?php echo $fila['id']; ?>">Editar</a></td>
              <td><a href="delete_cat.php?id=<?php echo $fila['id']; ?>">Eliminar</a></td>
            </tr>
              <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>