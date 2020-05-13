<?php
    session_start();
    $harga=$_POST["harga"];
    $_SESSION["ongkir"]=$harga;
    echo $_SESSION["ongkir"]
?>