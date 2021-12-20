<?php

include("baglanti.php");

$kadi = $_GET['uname'];


$sql = $baglan->query("Select kmail from users
Where kaid = '".$kadi."';");
$result = $sql->fetch_assoc();
$mail = $result["kmail"];

header('Location: hesapAyarlari.php?uname='.$kadi.'&mail='.$mail); 


$baglan->close();
?>
