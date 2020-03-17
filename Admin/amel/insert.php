<?php
    session_start();
    include("../AdminLTE-master/pages/forms/conn.php");
    $kode_promo=$_POST["edkode_promo"];
    $deskripsi_promo=$_POST["eddeskripsi_promo"];
    $tanggal_awal=$_POST["edtanggal_awal"];
    $potongan=$_POST["edpotongan"];
    $id=mysqli_fetch_assoc(mysqli_query($link,"SELECT concat('P',lpad(nvl(max(substr(id_promo,2,4)),0)+1,4,'0')) as id from promo"));
    mysqli_query($link,"INSERT into promo values('$id[id]','$deskripsi_promo','$kode_promo','$tanggal_awal',1,'$potongan')");
?>