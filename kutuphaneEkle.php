<?php
    $data = array();
    $data=$_GET['datas'];//id
    $datas = explode(",",$data);

    $name = $_GET['ad'];
    $names = explode(",",$name);

    $uname_value =  $_GET['uname'];
    
    include("baglanti.php");
    $count = 0;
    foreach($datas as $data){ //datas as variable data
        $sql = "INSERT INTO kutuphane VALUES ('".$data."','".$names[$count]."','".$uname_value."');";
        if ($baglan->query($sql) === TRUE) {
            $update1 = $baglan->query("SELECT opopularity FROM oyunlar WHERE oid='".$data."';");
            $result = $update1->fetch_assoc();
            $popularity = $result['opopularity'];

            $popularity++;

            $update = $baglan->query("UPDATE oyunlar SET opopularity='".$popularity."' WHERE oid='".$data."';");

            $sql = "Delete from sepet Where kaid='".$uname_value."' AND oid='".$data."';";
            $baglan->query($sql);
            $count++;
            //header('Location: loginSonrasıAnaSayfa.php?uname='.$kadi); 
        } else {
            echo "Error: " . $sql . "<br>" . $baglan->error;
            break;
        }
        
    }
    

    echo '<script>location.href = "loginSonrasıAnaSayfa.php?uname='.$uname_value.'"; alert("Oyununuz kütüphaneye eklendi");</script>';

    $baglan->close();
?>