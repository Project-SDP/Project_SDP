<?php
    require_once("conn.php");
    $id=$_POST["id"];
    $listmenu = mysqli_query($link,"select * from menu");
    $query="SELECT * from menu where id_menu='$id'";
    $query=mysqli_query($link,$query);
    $query=mysqli_fetch_assoc($query);
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Nama Menu</label>";
    echo     "<input type='text' class='form-control' id='nama' placeholder='Masukkan nama' value='$query[nama_menu]'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Harga Menu</label>";
    echo     "<input type='number' class='form-control' id='harga' min='0' step='1000' value='$query[harga_menu]' placeholder='Masukkan harga'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Kategori</label>";
    echo"<select class='form-control select2' style='width: 100%;' name='kategori' id='kategori'> ";
    $listkategori = mysqli_query($link,"select * from kategori");

    foreach($listkategori as $kategori) 
    {
        if($query['id_kategori']==$kategori['id_kategori']){
            echo "<option selected='selected' value=".$kategori[id_kategori].">".$kategori[nama_kategori]."</option>";
        }else{
            echo "<option value=".$kategori[id_kategori].">".$kategori[nama_kategori]."</option>";
        }
    }
    echo"</select>";
    echo "</div>";
    echo "<div class='card-footer'>";
    echo     "<button onclick='ubah(\"$query[id_menu]\")' class='btn btn-primary'>Update</button>";
    echo "</div>";
?>
<script>
    function ubah(id){
        var nama=$("#nama").val();
        var harga=$("#harga").val();
        var kategori=$("#kategori").val();
        var merch=$("#merch").val();
        $.ajax({
            method: "post",
            url: "updateMenu2.php",
            data: {
                id:id,
                nama:nama,
                harga:harga,
                kategori:kategori,
                merch:merch
            },
            success: function (response) {
                pangillMenu();
            }
        });
    
    }
    function NumberOnly(evt){
        var input= String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(input))){
            evt.preventDefault();
        }
    }

</script>