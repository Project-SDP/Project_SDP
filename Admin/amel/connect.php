<?php
    $host="ec2-3-222-150-253.compute-1.amazonaws.com";
    $user="ziwbwtazkjxgeh";
    $pass="2ff5557001816797d5c849fba6b066ae770018d6dd2ff2983b111fdcd36ceace";
    $database="d5mft5oq3qcf0t";
    $port="5432";
    $conn=mysqli_connect($host,$user,$pass,$database,$port);
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>