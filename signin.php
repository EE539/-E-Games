<?php

include("baglanti.php");

$kadi = $_GET['uname'];
$kmail = $_GET['email'];
$ksifre = $_GET['psw'];
$sifretkr = $_GET['psw-repeat'];



if($ksifre != $sifretkr){
    echo '<script>location.href = "AnaSayfa.php"; alert("Lütfen şifreleri aynı girin!");</script>';
}


else{
    $sql = "Select kmail FROM users WHERE kmail='".$kmail."';";
    $res = mysqli_query($baglan, $sql);
    $check = $baglan->query("Select kaid from users Where kaid = '".$kadi."';");
    if(mysqli_num_rows($res) > 0){ //else üstünde iken nedensizce else önce işe başlıyor ve hatayı veremiyor bu yüzden her şey else içine alındı
        echo '<script>location.href = "AnaSayfa.php"; alert("Yazdığınız mail başkası tarafından kullanılmaktadır");</script>'; 
    }
    elseif ($check->num_rows != 0) {
        echo '<script>location.href = "AnaSayfa.php"; alert("Yazdığınız kullanıcı adı bir başkası tarafından kullanılmaktadır");</script>';
    } 
    else{
        $sql = "INSERT INTO users
        VALUES ('".$kadi."','".$kmail."','".$ksifre."');";

        if ($baglan->query($sql) === TRUE) {
            header('Location: loginSonrasıAnaSayfa.php?uname='.$kadi); 
        } else {
            echo "Error: " . $sql . "<br>" . $baglan->error;
        }
    }
    
}
$baglan->close();
?>
