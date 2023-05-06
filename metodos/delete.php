<?php 

    include('conexion.php');

    $con = connection();

    $id = $_GET['id'];

    $sql = "DELETE FROM peliculas WHERE id= '$id'";

    $query = mysqli_query($con, $sql);

    header('Location: ../tabla.php');

?>