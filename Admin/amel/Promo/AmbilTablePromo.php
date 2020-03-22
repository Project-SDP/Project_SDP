<?php
    include("../connect.php");
    $query="SELECT * from promo";
    $arr_query=mysqli_query($conn,$query);
    foreach ($arr_query as $key => $value) {
        echo"<tr onclick='editpromo(\"$value[id_promo]\")'>";
        echo"<td>$value[judul_promo]</td>";
        echo"<td>$value[periode]</td>";
        echo"<td>$value[potongan]</td>";
        if($value["status"]=="1"){
            echo "<td>";
            echo "<button type='button' onclick='banned(\"$value[id_promo]\")' class='btn btn-block btn-outline-primary'>Banned</button>";
            echo "</td>";
        }else{
            echo "<td>";
            echo "<button type='button' onclick='banned(\"$value[id_promo]\")' class='btn btn-block btn-outline-danger'>Unbanned</button>";
            echo "</td>";
        }
        echo"</tr>";

    }
?>
<script>
    function banned(id){
        $.ajax({
            method: "post",
            url: "Promo/DisableTablePromo.php",
            data: {
                id:id
            },
            success: function (response) {
                pangillPromo();
            }
        });
    }
    function editpromo(id){
        $.ajax({
            method: "post",
            url: "Promo/EditPromo.php",
            data: {
                id:id
            },
            success: function (response) {
                $("#ubah").html(response);
            }
        });
    }
</script>