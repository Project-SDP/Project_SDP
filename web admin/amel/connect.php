<?php
    $host="localhost";
    $user="root";
    $pass="";
    $database="proyeksdp";
    $conn=mysqli_connect($host,$user,$pass,$database);
    if(!$conn){
        echo "tidak dapat membaca DB";
        die();
    }
?>