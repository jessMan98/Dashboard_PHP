<?php
    //Parámetros de coneción
    $conn = mysqli_connect(
        "127.0.01",
        "root",
        "miConexion#33",
        "northwind",
        3306
    );

    if(!$conn){
        die("Conexión fallida ".mysqli_connect_error());
    }
?>
