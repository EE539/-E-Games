<?php
    include("baglanti.php");
    
  
    //echo $uname_value;
    
    
    $sql = $baglan->query("Select oname, ofiyat, oid from sepet
     Where kaid = '".$uname_value."';");
     if($sql->num_rows == 0) {
      //echo 'NO';
      $durum="bos";
      
    } else {
      $durum="dolu";
      
      }
      $baglan->close();
?>