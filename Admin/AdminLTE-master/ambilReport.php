<?php
    include("conn.php");
    $query="SELECT * from report";
    $arr_query=mysqli_query($link,$query);
    foreach ($arr_query as $key => $value) {
        if($value["status"]==0){
            echo"<tr>";
            echo"<td>$value[id_report]</td>";
            echo"<td>$value[id_merchant]</td>";
            echo"<td>$value[id_customer]</td>";
            echo"<td>$value[pelapor]</td>";
            echo"<td>$value[alasan]</td>";
            echo "<td>";
            echo "<button type='button' onclick='banned(\"$value[id_report]\")' class='btn btn-block btn-outline-primary'>Terima</button>";
            echo "</td>";
            echo"</tr>";
        }
    }
?>
<script>
    function banned(id){
        $.ajax({
            method: "post",
            url: "disableReport.php",
            data: {
                id:id
            },
            success: function (response) {
                pangillMerch();
            }
        });
    }
</script>