<?php
    $cover = time() . "_" . $_FILES['gambar']['name'];
    $target = "../../../gambar/Image/".$cover;
    if(move_uploaded_file($_FILES['gambar']['tmp_name'], $target)){
        
    }
?>