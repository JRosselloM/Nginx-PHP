<?php
    $servername = "mysql";
    $username = "root";
    $password = "passwd";
    $dbname = "users";

    $conn = new mysqli($servername, $username, $password , $dbname);

    // If CONN failed -> throw error
    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    }
    echo "Connection Successfully";



?>