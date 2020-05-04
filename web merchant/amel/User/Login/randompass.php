<?php
    require_once('../../connect.php');
    $karakter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $tamp = '';
    for($i = 0; $i < 8; $i++) {
        $pos = rand(0, strlen($karakter)-1);
        $tamp .= $karakter{$pos};
    }
    $email=$_POST["kepada"];
    mysqli_query($conn,"UPDATE user set password='$tamp' where email='$email'");
?>