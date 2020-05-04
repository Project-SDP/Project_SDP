<?php
    include("../connect.php");
    $query="SELECT * from kategori";
    $arr_query=mysqli_query($conn,$query);
    foreach ($arr_query as $key => $value) {
        echo"<tr onclick='editkategori(\"$value[id_kategori]\")'>";
        echo"<td>$value[nama_kategori]</td>";
      
        if($value["status"]=="1"){
            echo "<td>";
            echo "<button type='button' onclick='banned(\"$value[id_kategori]\")' class='btn btn-block btn-outline-primary'>Banned</button>";
            echo "</td>";
        }else{
            echo "<td>";
            echo "<button type='button' onclick='banned(\"$value[id_kategori]\")' class='btn btn-block btn-outline-danger'>Unbanned</button>";
            echo "</td>";
        }
        echo"</tr>";

    }
?>
<script>
    function banned(id){
        $.ajax({
            method: "post",
            url: "Kategori/DisableTableKategori.php",
            data: {
                id:id
            },
            success: function (response) {
                pangillKategori();
            }
        });
    }
    function editkategori(id){
        $.ajax({
            method: "post",
            url: "Kategori/EditKategori.php",
            data: {
                id:id
            },
            success: function (response) {
                $("#ubah").html(response);
            }
        });
    }
</script>