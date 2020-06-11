<?php
    // echo "hai";
    $sql = "select * from merchant";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $rowCount = $stmt->rowCount();
    $details = $stmt->fetch();
    
    print_r($detalis);
    // header("location:Admin/amel/TampilanLogin.php");
?>