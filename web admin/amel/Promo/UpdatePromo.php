<?php
    require_once("../connect.php");
    $kode_promo=$_POST["judul_promo"];
    $deskripsi_promo=$_POST["deskripsi"];
    $tanggal_awal=$_POST["tanggal_awal"];
    $tanggal_akhir=$_POST["tanggal_akhir"];
    $potongan=$_POST["potongan"];
    $id=$_POST["id"];
    $query="UPDATE promo set judul_promo='$kode_promo',deskripsi='$deskripsi_promo',tanggal_awal='$tanggal_awal',potongan='$potongan',tanggal_akhir='$tanggal_akhir' where id_promo='$id'";
    mysqli_query($conn,$query);
    echo "mashok";
?>
