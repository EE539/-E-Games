<?php

include("baglanti.php");

$kaid = $_GET['kaid'];
$kmail = $_GET['email'];
$ksifre = $_GET['psw'];
$sifretkr = $_GET['psw-repeat'];



if($ksifre != $sifretkr){
    echo '<script>location.href = "hesapAyarlari.php?uname='.$kaid.'&mail='.$kmail.'"; alert("Yazdığınız şifreler uyuşmuyor");</script>';
}


else{

    $update = $baglan->query("UPDATE users SET kmail='".$kmail."', ksifre='".$ksifre."' WHERE kaid='".$kaid."';");
    echo '<script>location.href = "AnaSayfa.php"; alert("Lütfen güncellenen bilgiler ile hesabınıza giriş yapın");</script>'; 
    
}
$baglan->close();
?>
