<?php
    require_once("../../customer/connect.php");
    $query="SELECT * from user";
    $arr=mysqli_query($conn,$query);
    foreach ($arr as $key => $value) 
    {
        echo "<tr>";
            echo"<td>$value[username]</td>";
            echo"<td>$value[nama_depan] $value[nama_belakang]</td>";
            echo"<td>$value[alamat]</td>";
            if($value["status"]=="1"){
                echo "<td>";
                    echo"<button type='button' onclick='blok(\"$value[id_akun]\")' class='btn btn-block bg-gradient-secondary btn-lg'>Block</button>";
                echo "</td>";
            }
            else{
                echo "<td>";
                    echo"<button type='button' onclick='blok(\"$value[id_akun]\")' class='btn btn-block bg-gradient-info btn-lg'>Buka</button>";
                echo "</td>";
            }
        echo"</tr>";
    }
?>
<script>
    function blok(id){
        $.ajax({
            method: "post",
            url: "blok.php",
            data: {
                id_akun:id
            },
            success: function (data) {
                pangillUser();
            }
        });
    }
</script>
