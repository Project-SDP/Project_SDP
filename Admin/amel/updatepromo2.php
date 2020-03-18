<?php
    session_start();
    require_once("../AdminLTE-master/pages/forms/conn.php");
    $kode_promo=$_POST["judul_promo"];
    $deskripsi_promo=$_POST["deskripsi"];
    $tanggal_awal=$_POST["periode"];
    $potongan=$_POST["potongan"];
    $id=$_POST["id"];
    $query="UPDATE promo set judul_promo='$kode_promo',deskripsi='$deskripsi_promo',periode='$tanggal_awal',potongan='$potongan' where id_promo='$id'";
    echo $query;
    mysqli_query($link,$query);
?>
