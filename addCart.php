<?php
  include("baglanti.php");
    
  $uname_value =  $_GET['uname'];
  $oadi = $_GET['ad'];
  $oid = $_GET['id'];
  $ofiyat = $_GET['fiyat'];
  
  $check = $baglan->query("Select kaid, oid from sepet
  Where kaid = '".$uname_value."' and oid = '".$oid."';");

if($check->num_rows != 0) {
    //echo 'NO';
    echo '<script>location.href = "loginSonrasıAnaSayfa.php?uname='.$uname_value.'"; alert("Bu oyun sepetinizde bulunmaktadır");</script>';
    
} else {
  $check = $baglan->query("Select kaid, oid from kutuphane
  Where kaid = '".$uname_value."' and oid = '".$oid."';");
  if($check->num_rows!=0){
    echo '<script>location.href = "loginSonrasıAnaSayfa.php?uname='.$uname_value.'"; alert("Bu oyun kütüphanenizde bulunmaktadır");</script>';
  }
  else{
    $sql = "INSERT INTO sepet VALUES ('".$oid."', '".$uname_value."', '".$oadi."', '".$ofiyat."') ";

    if ($baglan->query($sql) === TRUE) {
      header('Location: loginSonrasıAnaSayfa.php?uname='.$uname_value); 
    } else {
      echo "Error updating record: " . $baglan->error; 
    }
  }
  
}
  
  
?>