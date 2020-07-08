
<?php
/*session_start();
print_r($_SESSION);
if(!isset($_SESSION["correo"]) && !isset($_SESSION["password"])){
  header('Location: ../../index.php');      
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
      <div class="col-sm-12">
        <a href="form_blg.php" class="btn btn-info float-right mb-5"> Nuevo blog </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Título</th>
              <th scope="col">Descripción</th>
              <th scope="col">Fecha</th>
              <th scope="col">Autor</th>
              <th scope="col">Status</th>
              <th scope="col">Categoría</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $consulta = "select b.*, c.nombre,c.id as Cod_categoria from blog_usr as b
            INNER JOIN categorias_usr as c  on c.id = b.id_categoria";
            $resultado = mysqli_query($mysqli, $consulta);
            while($fila = mysqli_fetch_array($resultado))            
            {
            ?>
            <tr>
                <th><?php echo $fila["titulo"]; ?></th>
                <td><?php echo $fila["descripcion"]; ?></td>
                <td><?php echo $fila["fecha"]; ?></td>
                <td><?php echo $fila["autor"]; ?></td>
                <td><?php echo $fila["status"]; ?></td>
                <?php  if ($fila["id_categoria"] == $fila["Cod_categoria"]){ ?>
                  <td><?php echo $fila["nombre"]; ?></td>
                <?php } ?>
                <td><a href="detail_blg.php?id=<?php echo $fila['id']; ?>">Editar</a></td>
                <td><a href="delete_blg.php?id=<?php echo $fila['id']; ?>">Eliminar</a></td>
            </tr>investigar cuantos join existen, campo comparativo entre todos
            <?php }  ?>
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