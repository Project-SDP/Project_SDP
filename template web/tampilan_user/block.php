<?php
    include("connect.php");
    session_start();
    $id_user=$_SESSION["loggedUser"];
    $id_merchant=$_POST["id"];
    $text=$_POST["text"];
    $block="INSERT into report values('','$id_merchant','$id_user','customer','$text','0')";
    mysqli_query($conn,$block);
?>