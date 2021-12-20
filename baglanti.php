<?php

$vt_sunucu = "localhost"; //değiken tanımlaması yapıldı. Bu değiken benim sunucumu tutuyor. Sunucum şu an local host
$vt_kullanici = "root";
$vt_sifre = "sifre";
$vt_adi = "web_schema";

//Gerekli tanımlamalar yapıldı, değiklenlere bunlar atandı

$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan){
    die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_error());//Eğer bağlantıda problem varsa bu mesajı verecek
}
?>