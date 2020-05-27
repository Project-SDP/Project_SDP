<?php
    include("connect.php");
    $query="SELECT * from website";
    $query=mysqli_query($conn,$query);
    foreach ($query as $key => $value) {
        $query_rating="SELECT avg(r.rating) as rata from review r join htransaksi ht on ht.id_htrans=r.id_htrans where ht.id_merchant= '$value[id_merchant]'";
        $query_rating=mysqli_fetch_assoc(mysqli_query($conn,$query_rating));
        $format= number_format($query_rating["rata"], 1, '.', ' ');
        echo $format;
    }
?>