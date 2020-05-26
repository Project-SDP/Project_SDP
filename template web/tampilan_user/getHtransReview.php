<?php
    include("connect.php");
    session_start();
    $id_member=$_SESSION["loggedUser"];
    $query="SELECT * from htransaksi where id_customer='$id_member' and status_htrans='SEDANG DIKIRIM'";
    $query=mysqli_query($conn,$query);
    foreach ($query as $key => $value) {
        $query_merchant="SELECT * from merchant where id='$value[id_merchant]'";
        $value_merchant=mysqli_fetch_assoc(mysqli_query($conn,$query_merchant));
        echo"<tr>
        ";echo"    <td><img src='$value_merchant[profilepic]' alt=''></td>
        ";echo"    <td>$value_merchant[nama]</td>
        ";echo"    <td><button onclick='setDiterima(\"$value[id_htrans]\")'>DITERIMA</button></td>
        ";echo"</tr>";
        
    }  

    $query="SELECT * from htransaksi where id_customer='$id_member' and status_htrans='DITERIMA'";
    $query=mysqli_query($conn,$query);
    foreach ($query as $key => $value) {
        $query_merchant="SELECT * from merchant where id='$value[id_merchant]'";
        $value_merchant=mysqli_fetch_assoc(mysqli_query($conn,$query_merchant));
        echo"<tr>
        ";echo"    <td><img src='$value_merchant[profilepic]' alt=''></td>
        ";echo"    <td>$value_merchant[nama]</td>
        ";echo"    <td><button onclick='gotoReview(\"$value[id_htrans]\")'>Review</button></td>
        ";echo"</tr>";
        
    } 
?>
<script>
    function setDiterima(id){
        $.ajax({
            type: "post",
            url: "setDiterima.php",
            data: {
                id:id
            },
            success: function (response) {
                start();
            }
        });
    }
    function gotoReview(id_review){
        window.location.href="pageReview.php?id="+id_review+"";
    }
</script>