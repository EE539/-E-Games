<?php 
  $uname_value =  $_GET['uname'];
  $durum = $_GET['durum'];
  if($durum=="bos"){
    $datas = "Bos";
    $names = "Bos";
    $fiyats = "Bos";

    $oyunAd="Bos";
    $ofiyat="Bos";
    $oId="Bos";
  }
  else{
    $oyunAd=$_GET['ad'];
    $ofiyat=$_GET['fiyat'];
    $oId=$_GET['id'];

    $vt_sunucu = "localhost"; //değiken tanımlaması yapıldı. Bu değiken benim sunucumu tutuyor. Sunucum şu an local host
    $vt_kullanici = "root";
    $vt_sifre = "sifre";
    $vt_adi = "web_schema";
    
    $baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);
    
    if(!$baglan){
        die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_error());//Eğer bağlantıda problem varsa bu mesajı verecek
    }

    $sql = "Select oid, oname, ofiyat from sepet
    Where kaid = '".$uname_value."'";


    $result = $baglan->query($sql);
    $datas = array();   
    while($row = $result->fetch_assoc()) {
      $datas[] = $row["oid"];
      $names[] = $row["oname"];
      $fiyats[] = $row["ofiyat"];
    }
   /*foreach($fiyats as $data){ //datas as variable data
        echo $data;
    }*/
    $baglan->close();
  }
?>
<!-- -->
<html>
  <head>
      <title>ƎE Games</title>
      <link rel="stylesheet" href="genel.css" />
      <link rel="stylesheet" href="sepet.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <div id="homeImg">
      <div id="home">
        <div class="layer">
          <img id = "img" src="3E.png" alt="logo" />
          <div class="topnav" id="myTopnav">
            <a href="#" onclick="returnMP(this.id)">Ana&nbsp;Sayfa</a>
            <a href="#" onclick="popOyun(this.id)">Popüler&nbsp;Oyunlar</a>
            <a href="#" onclick="oyun(this.id)">Oyunlar</a>
            <a href="#" onclick="kutuphane(this.id)">Kütüphanem</a>
            <a href="#" onclick="soruiletisim(this.id)">Soru&nbsp;ve&nbsp;İletişim</a>
            <a style="float: right;" href="#" onclick="sepetPhp(this.id)"><i class="fa fa-shopping-cart"></i></a>
            <a style="float: right; padding: 14px 0px" href="#" onclick="getU(this.id)"><i id = "kaid"></i> </a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
            
            
          </div> 
          <div>
            <h1 style = "font-size: 60px">ƎE Games</h1>
            <div class="text-center">
                <div class="content">
                  <h1><strong><span>ÖDEMENİ YAP</span></strong></h1>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
    <h3 style="color:aliceblue">Hesaplanan Tutar: <h3 style="color:aliceblue" id="Fiyat"></h3></h3>
    
        <div id ="Dolu" style="display:none;"> 
          <h3 style="color:aliceblue">Ürünü silmek istiyorsanız ürünün üzerine basmanı yeterli</h3>
          <div style="display:none;" class = "border" id="divId01">
            <a href="#" id = "Id01" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId01"></div></a>
            <h3 id="adId01" style = "color:aliceblue; "></h3>
            <h3 id="fiyatId01" style = "color:aliceblue;"></h3>
          </div>

          <div style="display:none;" class = "border" id="divId02">
            <a href="#" id = "Id02" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId02"></div></a>
            <h3 id="adId02" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId02" style = "color:aliceblue; "></h3>
          </div>

          <div class = "border" style="display:none;" id="divId03">
            <a href="#" id = "Id03" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId03"></div></a>
            <h3 id="adId03" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId03" style = "color:aliceblue;"></h3>

          </div>

          <div class = "border" style="display:none;" id="divId04">
            <a href="#" id = "Id04" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId04"></div></a>
            <h3 id="adId04" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId04" style = "color:aliceblue;"></h3>

          </div>

          <div class = "border" style="display:none;" id="divId05">
            <a href="#" id = "Id05" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId05"></div></a>
            <h3 id="adId05" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId05" style = "color:aliceblue;"></h3>
          </div>

          <div class = "border" style="display:none;" id="divId06">
            <a href="#" id = "Id06" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId06"></div></a>
            <h3 id="adId06" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId06" style = "color:aliceblue;"></h3>
          </div>

          <div class = "border" style="display:none;" id="divId07">
            <a href="#" id = "Id07" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId07"></div></a>
            <h3 id="adId07" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId07" style = "color:aliceblue;"></h3>
          </div>

          <div class = "border" style="display:none;" id="divId08">
            <a href="#" id = "Id08" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId08"></div></a>
            <h3 id="adId08" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId08" style = "color:aliceblue;"></h3>
          </div>

          <div class = "border" style="display:none;" id="divId09">
            <a href="#" id = "Id09" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId09"></div></a>
            <h3 id="adId09" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId09" style = "color:aliceblue;"></h3>
          </div>

          <div class = "border" style="display:none;" id="divId10">
            <a href="#" id = "Id10" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId10"></div></a>
            <h3 id="adId10" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId10" style = "color:aliceblue"></h3>
          </div>

          <div class = "border" style="display:none;" id="divId11">
            <a href="#" id = "Id11" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId11"></div></a>
            <h3 id="adId11" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId11" style = "color:aliceblue"></h3>
          </div>

          <div class = "border" style="display:none;" id="divId12">
            <a href="#" id = "Id12" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId12"></div></a>
            <h3 id="adId12" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId12" style = "color:aliceblue"></h3>
          </div>

          <div class = "border" style="display:none;" id="divId13">
            <a href="#" id = "Id13" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId13"></div></a>
            <h3 id="adId13" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId13" style = "color:aliceblue"></h3>
          </div>

          <div class = "border" style="display:none;" id="divId14">
            <a href="#" id = "Id14" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId14"></div></a>
            <h3 id="adId14" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId14" style = "color:aliceblue"></h3>
          </div>

          <div class = "border" style="display:none;" id="divId15">
            <a href="#" id = "Id15" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId15"></div></a>
            <h3 id="adId15" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId15" style = "color:aliceblue"></h3>
          </div>

          <div class = "border" style="display:none;" id="divId16">
            <a href="#" id = "Id16" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselId16"></div></a>
            <h3 id="adId16" style = "color:aliceblue;"></h3>
            <h3 id="fiyatId16" style = "color:aliceblue"></h3>
          </div>

          <script type='text/javascript'>//Buraya koydum çünkü aşağıdaki script de yüklenmiyordu
            var toplam = 0;
            var gorsel = <?php echo json_encode($datas) ?>;
            var ad = <?php echo json_encode($names) ?>;
            var fiyat = <?php echo json_encode($fiyats) ?>;
            count = 0;
            if(gorsel === "Bos"){}
            else{
              gorsel.forEach(element => {
                var img = document.createElement("img");
                img.width = '220';
                img.height = '300';
                img.src = "oyunlar/"+element+".jpg";
                document.getElementById("ad"+element).innerHTML = ad[count];
                document.getElementById("fiyat"+element).innerHTML = fiyat[count]+" TL";
                document.getElementById("gorsel"+element+"").appendChild(img);
                document.getElementById("div"+element+"").style.display="block";
                toplam = toplam + parseInt(fiyat[count]);
                count++;
              });
              document.getElementById("Fiyat").innerHTML=toplam+" TL";
              function check(){
                location.href = "kutuphaneEkle.php?datas="+gorsel+"&uname="+uname+"&ad="+<?php echo json_encode($names) ?>;
              }
            }
          </script>

          <button class="button" onclick="check()" style=" margin: 0; -ms-transform: translateY(-50%); transform: translateY(-50%);">Satın Al</button>
        </div>
    </div>
    
  </body>

  <script>
    var uname = "<?php echo $uname_value?>";
      document.getElementById("kaid").innerHTML = uname;

      var durum = "<?php echo $durum?>";
      if(durum === "bos"){
        document.getElementById("Fiyat").innerHTML="0 TL";
      }else{
        var ad = "<?php echo $oyunAd?>";
        var fiyat = "<?php echo $ofiyat?>";
        var id = "<?php echo $oId?>";
        document.getElementById("Dolu").innerHTML;
        document.getElementById("Dolu").style.display="block";
      }
      function doSomethingOnClick (id){ 
        debugger;
        location.href = "deleteGame.php?uname="+uname+"&id="+id; 
      }

      function returnMP(id){
            location.href= "loginSonrasıAnaSayfa.php?uname="+uname;
        }
        function sepetPhp(id){
            location.href="sepetVars.php?uname="+uname;
        }
        function kutuphane(id){
            location.href="kutuphaneVars.php?uname="+uname;
        }
        function popOyun(id){
            location.href="popOyunlar.php?uname="+uname;
        }
        function oyun(id){
            location.href="oyunlar.php?uname="+uname;
        }
        function soruiletisim(id){
            location.href="soruIletisim.php?uname="+uname;
        }
        function getU(id){
            location.href="getUser.php?uname="+uname;
        }
      
  </script>
</html>
    