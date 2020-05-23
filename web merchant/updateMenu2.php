<?php
    session_start();
    require_once("conn.php");
    $nama=$_POST["nama"];
    $harga=$_POST["harga"];
    $kategori=$_POST["kategori"];
    $merchant=$_POST["idMerch"];
    $id=$_POST["id"];
    $desk = $_POST["desk"];
    $gambar = $_POST['gambar'];
    $query="UPDATE menu set nama_menu='$nama', harga_menu='$harga', id_km='$kategori', deskripsi_menu='$desk' where id_menu='$id'";
    echo $query;
    mysqli_query($link,$query);
?>
