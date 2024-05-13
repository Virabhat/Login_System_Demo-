<?php
    $severname = "localhost";
    $username  = "root";
    $password  = "";
    $dbname    = "register_db";

    // Connect Database Mysql 
    $conn = mysqli_connect($severname,$username,$password,$dbname);

    if(!$conn){
        die("Connect failed" . mysqli_connect_error());
    }

?>