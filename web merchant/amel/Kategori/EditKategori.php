<?php
    require_once("../connect.php");
    $id=$_POST["id"];
    $query="SELECT * from kategori where id_kategori='$id'";
    $query=mysqli_query($conn,$query);
    $query=mysqli_fetch_assoc($query);
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Nama Kategori :</label>";
    echo     "<input type='text' class='form-control' id='nama_kategori' placeholder='Enter Nama Kategori' value='$query[nama_kategori]'>";
    echo "</div>";
    echo "<div class='card-footer'>";
    echo     "<button onclick='ubah(\"$query[id_kategori]\")' class='btn btn-primary'>Update</button>";
    echo "</div>";
?>
<script>
    function ubah(id){
        var nama_kategori=$("#nama_kategori").val();
        $.ajax({
            method: "post",
            url: "Kategori/UpdateKategori.php",
            data: {
                nama_kategori:nama_kategori,
                id:id
            },
            success: function (response) {
                pangillKategori();
            }
        });
    
    }
    
</script>