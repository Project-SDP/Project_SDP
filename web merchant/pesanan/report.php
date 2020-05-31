<?php
    include("../conn.php");
    $id=$_POST["id"];
    echo $id;
    $query="SELECT * from htransaksi where id_htrans='$id'";
    $query=mysqli_query($link,$query);
    $query=mysqli_fetch_assoc($query);
    $merch = $query['id_merchant'];
    $cust = $query['id_customer'];
    $q = "insert into report (id_report, id_merchant, id_customer, pelapor, alasan, status) VALUES ('','$merch','$cust','merchant','',0)";
    $insert = mysqli_query($link,$q);
    if($insert){
        echo "masok";
    }
    mysqli_query($link,"UPDATE htransaksi set status_htrans ='DIBATALKAN' where id_htrans='$id'");
?>