<?php
    $uname_value =  $_GET['uname'];
    $oId=$_GET['id'];

    $vt_sunucu = "localhost"; //değiken tanımlaması yapıldı. Bu değiken benim sunucumu tutuyor. Sunucum şu an local host
    $vt_kullanici = "root";
    $vt_sifre = "sifre";
    $vt_adi = "web_schema";
    
    $baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);
    
    if(!$baglan){
        die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_error());//Eğer bağlantıda problem varsa bu mesajı verecek
    }

    $sql = $baglan ->query("Delete from sepet Where kaid='".$uname_value."' AND oid='".$oId."';");
    
    if ($sql === TRUE) {
        header('Location: sepetVars.php?uname='.$uname_value); 
    } else {
        echo "Error: " . $sql . "<br>" . $baglan->error;
    }

    
    $baglan->close();
?>