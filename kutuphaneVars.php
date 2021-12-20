<?php
     include("baglanti.php");

    $uname_value = $_GET['uname'];

    $sql = "Select oid, oname FROM kutuphane WHERE kaid = '".$uname_value."';";
    
    
    $result = $baglan->query($sql);

    if($result!==false && $result->num_rows == 0) {
        //echo 'NO';
        header('Location: kutuphaneSayfasi.php?uname='.$uname_value.'&durum=bos'); 
        
    } else {
        while($result!==false &&$row = $result->fetch_assoc()) {
            $oids[] = $row["oid"];
            $names[] = $row["oname"];
          }
          //echo http_build_query($oids, "Id" );
          //echo http_build_query($names, "ad");
        header('Location: kutuphaneSayfasi.php?uname='.$uname_value."&".http_build_query($oids, "Id_" )."&".http_build_query($names, "ad_")."&durum=dolu"); 
        
    }
    
    
    $baglan->close();
?>