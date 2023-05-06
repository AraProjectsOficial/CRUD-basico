<?php 

    function connection(){

        $host = 'localhost';
        $username = 'root';
        $password = 'root';
        $dbname = 'prueba';

        $conexion = mysqli_connect($host, $username, $password, $dbname);

        // echo ($conexion) ? "Conectado!!!" : mysqli_connect_error();

        return $conexion;

    }

?>