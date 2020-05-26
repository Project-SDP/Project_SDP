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
?>

