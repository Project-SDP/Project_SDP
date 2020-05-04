<?php
    include("conn.php");
    $query="SELECT * from menu";
    $idMerch = $_POST['idMerch'];
    $arr_query=mysqli_query($link,$query);
    foreach ($arr_query as $key => $value) {
        if($value['id_merchant']==$idMerch){
            if($value["status_menu"]=="1"){
                echo"<tr onclick='editMenu(\"$value[id_menu]\")'>";
                echo"<td><img id='image' src='pages/forms/cover$value[foto]' class='img-thumbnail' style='width:100px; height:100px;'></td>";
                echo"<td>$value[id_menu]</td>";
                echo"<td>$value[nama_menu]</td>";
                $harga = strval(number_format($value['harga_menu']));
                // echo $harga;
                echo"<td>$harga</td>";
                echo"<td>$value[id_km]</td>";
                echo "<td>";
                echo "<button type='button' onclick='banned(\"$value[id_menu]\")' class='btn btn-block btn-outline-primary'>Matikan</button>";
                echo "</td>";
            }else{
                echo"<tr onclick='editMenu(\"$value[id_menu]\")' style='background:silver;'>";
                echo"<td><img id='image' src='pages/forms/cover$value[foto]' class='img-thumbnail' style='width:100px; height:100px;'></td>";
                echo"<td>$value[id_menu]</td>";
                echo"<td>$value[nama_menu]</td>";
                $harga = strval(number_format($value['harga_menu']));
                 // echo $harga;
                echo"<td>$harga</td>";
                echo"<td>$value[id_km]</td>";
                echo "<td>";
                echo "<button type='button' onclick='banned(\"$value[id_menu]\")' class='btn btn-block btn-outline-danger'>Aktifkan</button>";
                echo "</td>";
            }
            echo"</tr>";
        }
    }
?>
<script>
    var idMerch = "<?=$idMerch?>";
    function banned(id){
        $.ajax({
            method: "post",
            url: "disableMenu.php",
            data: {
                id:id
            },
            success: function (response) {
                pangillMenu(idMerch);
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