<?php
    require_once("../connect.php");
    $kodeDaerah=$_POST["daerah"];
    $query_kota=mysqli_query($conn,"SELECT * from kota where id_provinsi='$kodeDaerah'");
    
    foreach ($query_kota as $key => $value) {
        echo "<option value=$value[id_kota]>$value[nama_kota]</option>";
    }
?>
