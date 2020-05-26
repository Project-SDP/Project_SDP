<?php
    include("conn.php");
    $query="SELECT * from merchant";
    $arr_query=mysqli_query($link,$query);
    foreach ($arr_query as $key => $value) {
        echo"<tr onclick='editMerch(\"$value[id]\")'>";
        echo"<td>$value[id]</td>";
        echo"<td>$value[nama]</td>";
        echo"<td>$value[rating]</td>";
        echo"<td>$value[provinsi]</td>";
        echo"<td>$value[kota]</td>";
        echo"<td>$value[alamat]</td>";
        echo"<td>$value[notelp]</td>";
        echo"<td>$value[halal]</td>";
        // echo"<td>$value[email]</td>";
        if($value["status"]=="1"){
            echo "<td>";
            echo "<button type='button' onclick='banned(\"$value[id]\")' class='btn btn-block btn-outline-primary'>Banned</button>";
            echo "</td>";
        }else{
            echo "<td>";
            echo "<button type='button' onclick='banned(\"$value[id]\")' class='btn btn-block btn-outline-danger'>Unbanned</button>";
            echo "</td>";
        }
        echo"</tr>";

    }
?>
<script>
    function banned(id){
        $.ajax({
            method: "post",
            url: "disableMerchant.php",
            data: {
                id:id
            },
            success: function (response) {
                pangillMerch();
            }
        });
    }
    function editMerch(id){
        $.ajax({
            method: "post",
            url: "updateMerch.php",
            data: {
                id:id
            },
            success: function (response) {
                
                $("#ubah").html(response);
            }
        });
    }
</script>