
<?php
    require_once("connect.php");
    $kota = $_POST['kota'];
    echo $kota;
    $listKota=mysqli_query($conn,"SELECT * FROM kota");
    $select2 = -1;
    foreach($listKota as $kota) 
    {
        if($kota['id_kota'] == $kota){
            if($select2 == -1){
                echo "<option selected='selected' name=".$kota[nama_kota].">".$kota[nama_kota]."</option>";
                $select2 = 0;
            }else{
                echo "<option name=".$kota[nama_kota].">".$kota[nama_kota]."</option>";
            }
        }
        
    }    
    
        
?>
