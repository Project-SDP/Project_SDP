<?php
    require_once("../AdminLTE-master/pages/forms/conn.php");
    $id=$_POST["id"];
    $query="SELECT * from promo where id_promo='$id'";
    $query=mysqli_query($link,$query);
    $query=mysqli_fetch_assoc($query);
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Kode Promo :</label>";
    echo     "<input type='text' class='form-control' id='judul_promo' placeholder='Enter Kode Promo' value='$query[judul_promo]'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Deskripsi</label>";
    echo     "<input type='text' class='form-control' id='deskripsi'value='$query[deskripsi]' placeholder='Enter Deskripsi'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Periode</label>";
    echo     "<input type='date' class='form-control' id='periode' value='$query[periode]' placeholder='Enter Periode'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo     "<label for='exampleInputEmail1'>Potongan</label>";
    echo     "<input type='text' maxlength='13'  value='$query[potongan]' onkeypress='NumberOnly(event)' class='form-control' id='potongan' placeholder='Enter Potongan'>";
    echo "</div>";
    echo "<div class='card-footer'>";
    echo     "<button onclick='ubah(\"$query[id_promo]\")' class='btn btn-primary'>Update</button>";
    echo "</div>";
?>
<script>
    function ubah(id){
        var judul_promo=$("#judul_promo").val();
        var deskripsi=$("#deskripsi").val();
        var periode=$("#periode").val();
        var potongan=$("#potongan").val();
        $.ajax({
            method: "post",
            url: "updatepromo2.php",
            data: {
                judul_promo:judul_promo,
                deskripsi:deskripsi,
                periode:periode,
                potongan:potongan,
                id:id
            },
            success: function (response) {
                pangillPromo();
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