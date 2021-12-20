<?php

include("baglanti.php");

$kadi = $_POST['uname'];
$ksifre = $_POST['psw'];


$sql = $baglan->query("Select kaid, ksifre from users
Where kaid = '".$kadi."' and ksifre = '".$ksifre."';");

if($sql->num_rows == 0) {
    //echo 'NO';
    echo '<script>location.href = "AnaSayfa.php"; alert("Kullanıcı adı ya da şifre hatalıdır");</script>';

    
} else {
    header('Location: loginSonrasıAnaSayfa.php?uname='.$kadi); 
}

$baglan->close();
?>
