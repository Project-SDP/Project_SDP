<?php
    $target_dir = "Files/"; //<- ini folder tujuannya
    $target_file = $target_dir. basename($_FILES["gambar"]["name"]); //murni mendapatkan namanya saja tanpa path nya 
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(isset($_REQUEST['submit'])){
        if($file_type !="jpg" && $file_type !="png"){
            echo "tipe file hanya jpg dan png saja";
        } else if($_FILES["gambar"]["size"] > 500000){
            echo "file size terlalu besar";
        } else if(file_exists($target_file)){
            echo "file sudah ada";
        }
        else{
            if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)){
                echo "file ".basename($_FILES["gambar"]["name"])." terupload";
            }
        } 
      
    }


?>