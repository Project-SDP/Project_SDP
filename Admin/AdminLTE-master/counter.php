<?php
    //proses
    $filecounter=("../../web merchant/home/counter.txt");
    $kunjungan=file($filecounter);
    if(isset($_SESSION['status'])){
        
    }
    else{
        $kunjungan[0]++;
    }    
    $file=fopen($filecounter,"w");
    fputs($file,"$kunjungan[0]");
    fclose($file);
?>