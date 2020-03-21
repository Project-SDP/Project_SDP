<?php
    include("../connect.php");
    $nama_kategori=$_POST["ednama_kategori"];
    $id=mysqli_fetch_assoc(mysqli_query($conn,"SELECT concat('KA',lpad(nvl(max(substr(id_kategori,-3,3)),0)+1,3,'0')) as id from kategori"));
    mysqli_query($conn,"INSERT into kategori values('$id[id]','$nama_kategori',1)");
    echo "sukses";
?>