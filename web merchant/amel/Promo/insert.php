<?php
    $_SESSION['pos'] = "promo";
    include("../connect.php");
    $kode_promo=$_POST["edkode_promo"];
    $deskripsi_promo=$_POST["eddeskripsi_promo"];
    $tanggal_awal=$_POST["edtanggal_awal"];
    $tanggal_akhir=$_POST["edtanggal_akhir"];
    $potongan=$_POST["edpotongan"];
    // $query = mysqli_query($conn,"select * from promo where judul_promo=$kode_promo");
    
    $sql = "select * from promo";
    $result = mysqli_query($conn,$sql);
    $fail = false;
    foreach($result as $res){
        if($res['judul_promo']==$kode_promo){
            $fail = true;
        }
    }
    if($tanggal_awal>$tanggal_akhir){
        echo "periode promo tidak valid";
    }else if($fail){
        echo "promo sudah terdaftar";
    }else{
        $id=mysqli_fetch_assoc(mysqli_query($conn,"SELECT concat('P',lpad(nvl(max(substr(id_promo,2,4)),0)+1,4,'0')) as id from promo"));
        $id_promo = $id['id'];
        mysqli_query($conn,"INSERT into promo values('$id_promo','$deskripsi_promo','$kode_promo','$tanggal_awal','1','$potongan','$tanggal_akhir','',100)");
        echo "berhasil";
    }
   
?>