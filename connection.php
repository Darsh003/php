<?php
error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contact_frostapperals";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        // echo "connection established";
    }
    else
    {
        echo "connection failed".mysqli_connect_error();
    }
    ?>