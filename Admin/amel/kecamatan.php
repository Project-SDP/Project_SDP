
<?php
    require("connect.php");
    $kota = $_POST['kota'];
    echo $kota;
    $listKec = mysqli_query($conn,"SELECT * FROM kecamatan");
    $select2 = -1;
    foreach($listKec as $kec) 
    {
        if($kec['id_kota'] == $kota){
            if($select2 == -1){
                echo "<option selected='selected' name=".$kec[nama_kec].">".$kec[nama_kec]."</option>";
                $select2 = 0;
            }else{
                echo "<option name=".$kec[nama_kec].">".$kec[nama_kec]."</option>";
            }
        }
        
    }    
    
        
?>
