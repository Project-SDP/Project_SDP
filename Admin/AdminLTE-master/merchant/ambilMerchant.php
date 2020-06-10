<?php
    include("../conn.php");
    $query="SELECT * from merchant";
    $arr_query=mysqli_query($link,$query);
    foreach ($arr_query as $key => $value) {
        if($value["status"]==0){
            echo"<tr onclick='editMerch(\"$value[id]\")'>";
            echo"<td>$value[id]</td>";
            echo"<td>$value[nama]</td>";
            echo"<td>$value[kategori]</td>";
            echo"<td>$value[alamat]</td>";
            echo"<td>$value[notelp]</td>";
            echo"<td>$value[email]</td>";
            echo "<td>";
            echo "<button type='button' onclick='acc(\"$value[id]\")' class='btn btn-block btn-outline-warning'>Terima</button>";
            echo "<button type='button' onclick='banned(\"$value[id]\")' class='btn btn-block btn-outline-danger'>Tolak</button>";
            echo "</td>";
            echo"</tr>";
        }
        // else if($value["status"]==-1){
        //     echo"<tr onclick='editMerch(\"$value[id]\")' style='background:silver;'>";
        //     echo"<td>$value[id]</td>";
        //     echo"<td>$value[nama]</td>";
        //     echo"<td>$value[kategori]</td>";
        //     echo"<td>$value[alamat]</td>";
        //     echo"<td>$value[notelp]</td>";
        //     echo"<td>$value[email]</td>";
        //     echo "<td>";
        //     echo "<button type='button' onclick='acc(\"$value[id]\")' class='btn btn-block btn-outline-info'>Terima</button>";
        //     echo "</td>";
        //     echo"</tr>";
        // }
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
    function acc(id){
        $.ajax({
            method: "post",
            url: "accMerchant.php",
            data: {
                id:id
            },
            success: function (response) {
                alert(response);
                pangillMerch();
            }
        });
    }
</script>