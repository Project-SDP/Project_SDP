<?php
    $_SESSION['status'] = 0;
    $link = mysqli_connect("localhost","root","","proyeksdp");
    if(!$link){
        echo "tidak dapat membaca DB";
        die();
    }
?>
