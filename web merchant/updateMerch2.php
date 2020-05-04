<?php
    session_start();
    require_once("conn.php");
    $nama=$_POST["nama"];
    $alamat=$_POST["alamat"];
    $notelp=$_POST["notelp"];
    $email=$_POST["email"];
    $provinsi=$_POST["provinsi"];
    $kota=$_POST["kota"];
    $id=$_POST["id"];
    $query="UPDATE merchant set nama='$nama', alamat='$alamat', notelp='$notelp', email='$email', provinsi='$provinsi', kota='$kota' where id='$id'";
    echo $query;
    mysqli_query($link,$query);
?>
