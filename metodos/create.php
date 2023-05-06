<?php 

    include('conexion.php');

    $con = connection();

    $nombre = $_POST['nombre'];
    $genero = $_POST['genero'];

    $sql = "INSERT INTO peliculas VALUES(null, '$nombre', '$genero')";

    $query = mysqli_query($con, $sql);
    
    header('Location: ../tabla.php');

?>