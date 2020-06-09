<?php
    include("connect.php");
    $text=$_POST["text"];
    $rate=$_POST["rate"];
    $htrans=$_POST["id"]; 
    $autogen_id="SELECT concat('RE',lpad(nvl(max(substr(id_review,-5,5)),'0')+1,5,0)) as 'id' from review";
    $autogen_id=mysqli_fetch_assoc(mysqli_query($conn,$autogen_id));
    $query="INSERT into review values('$autogen_id[id]','$text','$htrans',$rate)";
    mysqli_query($conn,$query);
    $query="update htransaksi set status_htrans='SELESAI' where id_htrans='$htrans'";
    mysqli_query($conn,$query);

  

    $query="SELECT * from htransaksi where id_htrans='$htrans'";
    $query=mysqli_fetch_assoc(mysqli_query($conn,$query));
    $query_rating="SELECT avg(r.rating) as rata from review r join htransaksi ht on ht.id_htrans=r.id_htrans where ht.id_merchant= '$query[id_merchant]'";
    $query_rating=mysqli_fetch_assoc(mysqli_query($conn,$query_rating));
    $format= number_format($query_rating["rata"], 1, '.', ' ');

    $query_update="UPDATE merchant set rating=$format where id='$query[id_merchant]'";
    mysqli_query($conn,$query_update);
       
    
?>

