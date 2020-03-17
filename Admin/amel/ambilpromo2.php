<?php
    include("../AdminLTE-master/pages/forms/conn.php");
    $query="SELECT * from promo";
    $arr_query=mysqli_query($link,$query);
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
            url: "disablepromo3.php",
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
            url: "updatepromo.php",
            data: {
                id:id
            },
            success: function (response) {
                
                $("#ubah").html(response);
            }
        });
    }
</script>