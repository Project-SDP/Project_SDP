<?php
    include("conn.php");
    $query="SELECT * from menu";
    $arr_query=mysqli_query($link,$query);
    foreach ($arr_query as $key => $value) {
        echo"<tr onclick='editMenu(\"$value[id_menu]\")'>";
        echo"<td>$value[id_menu]</td>";
        echo"<td>$value[nama_menu]</td>";
        echo"<td>$value[harga_menu]</td>";
        echo"<td>$value[id_kategori]</td>";
        echo"<td>$value[id_merchant]</td>";
        if($value["status_menu"]=="1"){
            echo "<td>";
            echo "<button type='button' onclick='banned(\"$value[id_menu]\")' class='btn btn-block btn-outline-primary'>Disable</button>";
            echo "</td>";
        }else{
            echo "<td>";
            echo "<button type='button' onclick='banned(\"$value[id_menu]\")' class='btn btn-block btn-outline-danger'>Enable</button>";
            echo "</td>";
        }
        echo"</tr>";

    }
?>
<script>
    function banned(id){
        $.ajax({
            method: "post",
            url: "disableMenu.php",
            data: {
                id:id
            },
            success: function (response) {
                pangillMenu();
            }
        });
    }
    function editMenu(id){
        $.ajax({
            method: "post",
            url: "updateMenu.php",
            data: {
                id:id
            },
            success: function (response) {
                
                $("#ubah").html(response);
            }
        });
    }
</script>