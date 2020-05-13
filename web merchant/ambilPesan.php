<?php
    include("conn.php");
    $query="SELECT * from htransaksi";
    if(isset($_POST['idMerch'])){
        $idMerch = $_POST['idMerch'];
    }
    $arr_query=mysqli_query($link,$query);
    foreach ($arr_query as $key => $value) {
        if($value['id_merchant']==$idMerch){
            if($value["status_htrans"]=="LUNAS"){
                echo"<tr>"; 
                echo"<td>$value[id_htrans]</td>";
                echo"<td>$value[id_customer]</td>";
                echo"<td>$value[tglwaktu_trans]</td>";
                $harga = strval(number_format($value['subtotal']));
                // echo $harga;
                echo"<td>$harga</td>";
                echo "<td>";
                echo "<button type='button' onclick='banned(\"$value[id_htrans]\")' class='btn btn-block btn-outline-primary'>Terima</button>";
                echo "</td>";               
                echo"<td>$value[ongkir]</td>";
                echo"<td>$value[pesan]</td>";
                echo"<td>$value[tglwaktu_kirim]</td>";
            }else if($value["status_htrans"]=="BELUM LUNAS"){
                echo"<tr style='background:silver;'>";
                echo"<td>$value[id_htrans]</td>";
                echo"<td>$value[id_customer]</td>";
                echo"<td>$value[tglwaktu_trans]</td>";
                $harga = strval(number_format($value['subtotal']));
                echo"<td>$harga</td>";
                echo "<td>";
                echo "<button type='button' class='btn btn-block btn-outline-primary disabled'>Belum Lunas</button>";
                echo "</td>";               
                echo"<td>$value[ongkir]</td>";
                echo"<td>$value[pesan]</td>";
                echo"<td>$value[tglwaktu_kirim]</td>";
            }else if($value["status_htrans"]=="DIKEMAS"){
                echo"<tr>";
                echo"<td>$value[id_htrans]</td>";
                echo"<td>$value[id_customer]</td>";
                echo"<td>$value[tglwaktu_trans]</td>";
                $harga = strval(number_format($value['subtotal']));
                // echo $harga;
                echo"<td>$harga</td>";
                echo "<td>";
                echo "<button type='button' onclick='banned(\"$value[id_htrans]\")' class='btn btn-block btn-outline-danger'>Batalkan</button>";
                echo "</td>";               
                echo"<td>$value[ongkir]</td>";
                echo"<td>$value[pesan]</td>";
                echo"<td>$value[tglwaktu_kirim]</td>";
            }else{
                echo"<tr style='background:silver;'>";
                echo"<td>$value[id_htrans]</td>";
                echo"<td>$value[id_customer]</td>";
                echo"<td>$value[tglwaktu_trans]</td>";
                $harga = strval(number_format($value['subtotal']));
                echo"<td>$harga</td>";
                echo "<td>";
                echo "<button type='button' class='btn btn-block btn-outline-primary disabled'>Dibatalkan</button>";
                echo "</td>";               
                echo"<td>$value[ongkir]</td>";
                echo"<td>$value[pesan]</td>";
                echo"<td>$value[tglwaktu_kirim]</td>";
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
            url: "disablePesan.php",
            data: {
                id:id
            },
            success: function (response) {
                alert(id);
                pangillPesan(idMerch);
            }
        });
    }
</script>