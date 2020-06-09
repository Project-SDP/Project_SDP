<?php
    include("../connect.php");
    $query="SELECT * from kategori";
    $arr_query=mysqli_query($conn,$query);
    foreach ($arr_query as $key => $value) {
        echo"<tr onclick='editkategori(\"$value[id_kategori]\")'>";
        echo"<td>$value[nama_kategori]</td>";
      
        
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