<?php
    include("../connect.php");
    $kode_promo=$_POST["kode_promo"];
    $deskripsi_promo=$_POST["deskripsi_promo"];
    $tanggal_awal=$_POST["tanggal_awal"];
    $tanggal_akhir=$_POST["tanggal_akhir"];
    $potongan=$_POST["potongan"];
    $minimum_order=$_POST["minimum_order"];
    $target_dir = "../../../gambar/Image/"; //<- ini folder tujuannya
    $target_file = $target_dir. basename($_FILES["gambar"]["name"]); //murni mendapatkan namanya saja tanpa path nya 
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if($file_type !="jpg" && $file_type !="png")
    {
        echo "tipe file hanya jpg dan png saja";
    } 
    else if(file_exists($target_file))
    {
        echo "file sudah ada";
    }
    else{
        if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file))
        {
            echo "file berhasil terupload";
            $id=mysqli_fetch_assoc(mysqli_query($conn,"SELECT concat('P',lpad(nvl(max(substr(id_promo,2,4)),0)+1,4,'0')) as id from promo"));
            $querys= "INSERT into promo values('$id[id]','$deskripsi_promo','$kode_promo','$tanggal_awal',1,'$potongan','$tanggal_akhir','$target_file',$minimum_order)";
            echo "<br>".$querys."<br>";
            mysqli_query($conn,$querys);
            echo "sukses";
        }
    } 
?>