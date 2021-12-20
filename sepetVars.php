<?php
     include("baglanti.php");
    
  $uname_value =  $_GET['uname'];
  //echo $uname_value;
  
  
  $sql = $baglan->query("Select oname, ofiyat, oid from sepet
   Where kaid = '".$uname_value."';");
   if($sql->num_rows == 0) {
    //echo 'NO';
    header('Location: sepet.php?uname='.$uname_value.'&durum=bos'); 
    
} else {
    $result = $sql->fetch_assoc();
    $ad = $result['oname'];
    $fiyat= $result['ofiyat'];
    $id= $result['oid'];
    
     //echo $ad;
     //echo $fiyat;
     //echo $id;
 
    header('Location: sepet.php?uname='.$uname_value.'&durum=dolu&ad='.$ad.'&id='.$id.'&fiyat='.$fiyat); 
    }
    $baglan->close();

?>