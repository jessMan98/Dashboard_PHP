<?php

    $conn = mysqli_connect(
        "127.0.01",
        "root",
        "miConexion#33",
        "northwind",
        3306
    );

    if(isset($conn)){
        echo "DB is connected";
    }

?>