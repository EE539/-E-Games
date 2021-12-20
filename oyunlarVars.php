<?php
      include("baglanti.php");

    $sql = "Select oid from oyunlar;";

    $result = $baglan->query($sql);
    $datas = array();   
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "oid: " . $row["oid"]. "<br>";
            $datas[] = $row["oid"];
            //echo $row["oid"];
            //header('Location: anaSayfa.php?oid='.$row["oid"]);
        }
    } else {
        echo "0 results";
    }
    
    /*foreach($datas as $data){ //datas as variable data
        echo $data;
    }*/

    
    $baglan->close();
?>