<?php
    include("baglanti.php");
   
   $kadi = $_GET['uname'];
   echo $kadi;
   $gid = $_GET['id'];
   
   $sql = $baglan->query("Select oname, ofiyat, oyapimici, otarih, oaciklama from oyunlar
   Where oid = '".$gid."';");
   
   $result = $sql->fetch_assoc();
   $ad = $result['oname'];
   $fiyat= $result['ofiyat'];
   $yapimci= $result['oyapimici'];
   $tarih= $result['otarih'];
   $aciklama= $result['oaciklama'];

   header('Location: lgamePage.php?uname='.$kadi.'&ad='.$ad.'&id='.$gid.'&fiyat='.$fiyat.'&yapimci='.$yapimci.'&tarih='.$tarih.'&aciklama='.$aciklama); 
   
   
   $baglan->close();
?>