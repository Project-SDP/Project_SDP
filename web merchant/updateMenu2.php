<?php
    session_start();
    require_once("conn.php");
    $nama=$_POST["nama"];
    $harga=$_POST["harga"];
    $kategori=$_POST["kategori"];
    $merchant=$_POST["merch"];
    $id=$_POST["id"];
    $query="UPDATE menu set nama_menu='$nama', harga_menu='$harga', id_kategori='$kategori', id_merchant='$merchant' where id_menu='$id'";
    echo $query;
    mysqli_query($link,$query);
?>
