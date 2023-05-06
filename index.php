<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Tabla</title>
</head>
<body >
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
        <div class="w-50 ">
            <h1 class="text-center mt-4 mb-4">Crear registro</h1>
            <form method="POST" action="./metodos/create.php">
                <label for="nombre">Nombre: </label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
                <br>
                <label for="genero">Genero: </label>
                <input type="text" class="form-control" name="genero" id="genero" required>
                <br>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>