<?php 

    include('conexion.php');

    $con = connection();

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $genero = $_POST['genero'];

    $sql = "UPDATE peliculas SET id= '$id', nombre= '$nombre', genero= '$genero' WHERE id= '$id'";

    $query = mysqli_query($con, $sql);

    header('Location: ../tabla.php');


?>