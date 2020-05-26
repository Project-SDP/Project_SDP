<?php
    require_once("conn.php");
    $id=$_POST["id"];
    $listmenu = mysqli_query($link,"select * from menu");
    $query="SELECT * from menu where id_menu='$id'";
    $query=mysqli_query($link,$query);
    $query=mysqli_fetch_assoc($query);
    echo"<br>";
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Nama Menu</label>";
    echo     "<input type='text' class='form-control' id='nama' placeholder='Masukkan nama' value='$query[nama_menu]'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Harga Menu</label>";
    echo     "<input type='number' class='form-control' id='harga' min='0' step='1000' value='$query[harga_menu]' placeholder='Masukkan harga'>";
    echo "</div>";
    echo"<div class='form-group'>";
    echo"    <label for='exampleInputEmail1'>Deskripsi Menu</label><br>";
    echo"    <input type='text' class='form-control' rows='3' value='$query[deskripsi_menu]' placeholder='Masukkan deskripsi menu' id='deskripsi'></textarea>";
    echo"</div>";
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
    $cover="";
    // if(isset($_POST['upGambar'])){
    //     $cover = time() . "_" . $_FILES['gambar']['name'];
    //     $target = "../../../gambar/Image/".$cover;
    //     if(move_uploaded_file($_FILES['gambar']['tmp_name'], $target)){
    //     // mysqli_query($link,"INSERT INTO menu(id_menu,nama_menu,harga_menu,status_menu,id_km,id_merchant,deskripsi_menu,gambar_menu) VALUES($id,'$nama','$harga','$status','$kategori','$merchant','$desk','$cover')");
    //     }
    // }
?>
<script>
 function displayImage(e){
  if(e.files[0]){
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#image2').setAttribute('src',e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
    
    function ubah(id){
        var nama=$("#nama").val();
        var harga=$("#harga").val();
        var kategori=$("#kategori").val();
        var merch=$("#merch").val();
        var desk=$("#deskripsi").val();
        // var gambar="<?php echo $cover ?>";
        $.ajax({
            method: "post",
            url: "updateMenu2.php",
            data: {
                id:id,
                nama:nama,
                harga:harga,
                kategori:kategori,
                idMerch:merch,
                desk:desk
            },
            success: function (response) {
                pangillMenu(idMerch);
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