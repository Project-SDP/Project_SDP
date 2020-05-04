@@ -22,10 +22,13 @@
          }else{$ctr2++;}
        }
        if($ctr2==$ctr){
          mysqli_query($link,"INSERT INTO menu(id_menu,nama_menu,harga_menu,status_menu,id_kategori,id_merchant) VALUES('','$nama','$harga','$status','$kategori','$merchant')");
          $jumlah= sprintf("%03d", $ctr);
          $kat = substr($kategori,-2,2);
          $id = "ME".$kat.$jumlah;
          mysqli_query($link,"INSERT INTO menu(id_menu,nama_menu,harga_menu,status_menu,id_kategori,id_merchant) VALUES('$id','$nama','$harga','$status','$kategori','$merchant')");
        }
      }else{
          mysqli_query($link,"INSERT INTO menu(id_menu,nama_menu,harga_menu,status_menu,id_kategori,id_merchant) VALUES('','$nama','$harga','$status','$kategori','$merchant')");
          mysqli_query($link,"INSERT INTO menu(id_menu,nama_menu,harga_menu,status_menu,id_kategori,id_merchant) VALUES('$id','$nama','$harga','$status','$kategori','$merchant')");
    }
      
