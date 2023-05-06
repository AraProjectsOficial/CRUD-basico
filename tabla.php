<?php 

    include('./metodos/conexion.php');

    $con = connection();

    $sql = "SELECT * FROM peliculas";

    $query = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Tabla</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="./index.php">Crear registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./tabla.php">Registros</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center">
        <div class="w-75">
            <h1 class="text-center mt-4 mb-4">Registros</h1>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Genero</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td> <?= $row['nombre'] ?> </td>
                        <td> <?= $row['genero'] ?> </td>
                        <td>
                            <a href="update.php?id= <?= $row['id'] ?>">Editar</a>
                        </td>
                        <td>
                            <a href="">Eliminar</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>