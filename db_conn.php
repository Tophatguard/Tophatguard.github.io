<?php

    $sname = "localhost";
    $unae = "root";
    $password = "";

    $db_name = "test_db";

    $conn = mysqli_connect($sname, $unae, $password, $db_name);

    if(!$conn) {
        echo "Connection Failed";
    }