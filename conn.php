<?php

    $server = "mydb.ctsm26ogia2u.ap-south-1.rds.amazonaws.com";
    $username = "admin";
    $password = "admin1234";
    $database = "user";

    $conn = mysqli_connect($server, $username, $password, $database);
    if(!$conn)
    {
        die("Error in connecting to mySQL: ".mysqli_connect_error());
    }
?>
