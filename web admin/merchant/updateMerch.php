<?php
    require_once("conn.php");
    $id=$_POST["id"];
    $listprov = mysqli_query($link,"select * from provinsi");
    $listkota = mysqli_query($link,"select * from kota");
    $query="SELECT * from merchant where id='$id'";
    $query=mysqli_query($link,$query);
    $query=mysqli_fetch_assoc($query);
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Nama Merchant :</label>";
    echo     "<input type='text' class='form-control' id='nama' placeholder='Masukkan nama merchant' value='$query[nama]'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Alamat</label>";
    echo     "<input type='text' class='form-control' id='alamat'value='$query[alamat]' placeholder='Masukkan alamat'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Nomor telepon</label>";
    echo     "<input type='number' class='form-control' id='notelp' onkeypress='NumberOnly(event)' value='$query[notelp]' placeholder='Masukkan no telpon'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Email</label>";
    echo     "<input type='text' value='$query[email]' class='form-control' id='potongan' placeholder='Masukkan email'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Provinsi</label>";
    echo"<select class='form-control select2' style='width: 100%;'  onchange='refreshKota()' name='prov' id='prov'> ";
    $select = -1; 
    foreach($listprov as $merch) 
    {
        if($select == -1){
            echo "<option selected='selected' value=".$merch[id_provinsi].">".$merch[nama_provinsi]."</option>";
            $select = 0;
        }else{
            echo "<option value=".$merch[id_provinsi].">".$merch[nama_provinsi]."</option>";
        }
    }
    echo"</select>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo  "<label for='exampleInputEmail1'>Kota</label>";
    echo"<select class='form-control select2' style='width: 100%;'  name='kota' id='kota'> ";
    $select = -1; 
    // $tmp = "";
    $listkota=mysqli_query($link,"SELECT * FROM kota");

    foreach($listkota as $kota){
        if($kota['id_provinsi']=='PR001'){
            // $tmp = $kota['nama_kota'];
            echo "<option selected='selected' value=".$kota[id_kota].">".$kota[nama_kota]."</option>";
        }
    }
    echo"</select>";
    echo "</div>";

    echo "<div class='card-footer'>";
    echo     "<button onclick='ubah(\"$query[id]\")' class='btn btn-primary'>Update</button>";
    echo "</div>";
?>
<script>
    function ubah(id){
        var nama=$("#nama").val();
        var alamat=$("#alamat").val();
        var notelp=$("#notelp").val();
        var email=$("#email").val();
        var provinsi=$("#prov").val();
        var kota=$("#kota").val();
        $.ajax({
            method: "post",
            url: "updateMerch2.php",
            data: {
                id:id,
                nama:nama,
                alamat:alamat,
                notelp:notelp,
                email:email,
                provinsi:provinsi,
                kota:kota
            },
            success: function (response) {
                pangillMerch();
            }
        });
    
    }
    function NumberOnly(evt){
        var input= String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(input))){
            evt.preventDefault();
        }
    }
    function refreshKota(){
        prov = $("#prov").val();
        $.ajax({
            method:"post",
            url: "kota.php",
            data: {
                prov:prov
            },
            success: function (data) {
                $("#kota").html(data);
            }
        });
     }
</script>