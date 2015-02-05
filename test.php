<?php


    $host_name  = "db557693269.db.1and1.com";
    $database   = "db557693269";
    $user_name  = "dbo557693269";
    $password   = "ToRoVaCa?256";

    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    if (mysqli_connect_errno())
    {
    echo "Error al conectar con servidor MySQL: " . mysqli_connect_error();
    }

?>