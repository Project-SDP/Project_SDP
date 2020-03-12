<?php
    $_SESSION['status'] = 0;
    $link = mysqli_connect("localhost","root","","dbmerchant");
    if(!$link){
        echo "tidak dapat membaca DB";
        die();
    }
?>
