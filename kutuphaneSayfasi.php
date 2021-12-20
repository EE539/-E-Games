<?php

 $uname_value = $_GET['uname'];
 $durum2 = $_GET['durum'];

 if($durum2=="bos"){
     $oyunlar="yok";
     $idler="yok";
  }
  
  else{
    $count = 0;
    while(isset($_GET["Id_".$count])){
        $idler[]=$_GET["Id_".$count];  
        $count++; 
    }
    /*foreach($idler as $id){
        echo $id;
    }*/
    $count = 0;
    while(isset($_GET["ad_".$count])){
        $oyunlar[]=$_GET["ad_".$count];
        $count++;    
    }
  }
  include("sepetControl.php");
?>
<!-- -->
<html>
  <head>
  <title>ƎE Games</title>
      <link rel="stylesheet" href="genel.css" />
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
            <a style="float: right;" href="#" onclick="sepetPhp(this.id)"><i id ="bos" class="fa fa-shopping-cart"></i></a>
            <a style="float: right; padding: 14px 0px" href="#" onclick="getU(this.id)"><i id = "kaid"></i> </a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>            
          </div> 

          <div>
            <h1 style = "font-size: 60px">ƎE Games</h1>
            <div class="text-center">
                <div class="content">
                  <h1><strong><span>OYUNUNA BAŞLA</span></strong></h1>
                </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <h1 id ="Bos" style="display:none; color:aliceblue">Kütüphanenizde oyun yok :(</h1>
    <div id ="Dolu" style="display:none;"> 
          <div style="display:none;" class = "border" id="divId01">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId01"></div>
            <h3 id="adId01" style = "color:aliceblue; "></h3>
          </div>

          <div style="display:none;" class = "border" id="divId02">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId02"></div>
            <!--<h3 id="adId02" style = "color:aliceblue;"></h3>-->
          </div>

          <div class = "border" style="display:none;" id="divId03">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId03"></div>
            <!--<h3 id="adId03" style = "color:aliceblue;"></h3>-->

          </div>

          <div class = "border" style="display:none;" id="divId04">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId04"></div>
            <!--<h3 id="adId04" style = "color:aliceblue;"></h3>-->

          </div>

          <div class = "border" style="display:none;" id="divId05">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId05"></div>
            <!--<h3 id="adId05" style = "color:aliceblue;"></h3>-->
          </div>

          <div class = "border" style="display:none;" id="divId06">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId06"></div>
            <!--<h3 id="adId06" style = "color:aliceblue;"></h3>-->
          </div>

          <div class = "border" style="display:none;" id="divId07">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId07"></div>
            <!--<h3 id="adId07" style = "color:aliceblue;"></h3>-->
          </div>

          <div class = "border" style="display:none;" id="divId08">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId08"></div>
            <!--<h3 id="adId08" style = "color:aliceblue;"></h3>-->
          </div>

          <div class = "border" style="display:none;" id="divId09">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId09"></div>
            <!--<h3 id="adId09" style = "color:aliceblue;"></h3>-->
          </div>

          <div class = "border" style="display:none;" id="divId10">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId10"></div>
            <!--<h3 id="adId10" style = "color:aliceblue;"></h3>-->
          </div>

          <div class = "border" style="display:none;" id="divId11">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId11"></div>
            <!--<h3 id="adId11" style = "color:aliceblue;"></h3>-->
          </div>

          <div class = "border" style="display:none;" id="divId12">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId12"></div>
            <!--<h3 id="adId12" style = "color:aliceblue;"></h3>-->
          </div>

          <div class = "border" style="display:none;" id="divId13">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId13"></div>
            <!--<h3 id="adId13" style = "color:aliceblue;"></h3>-->
          </div>

          <div class = "border" style="display:none;" id="divId14">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId14"></div>
            <!--<h3 id="adId14" style = "color:aliceblue;"></h3>-->
          </div>

          <div class = "border" style="display:none;" id="divId15">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId15"></div>
            <!--<h3 id="adId15" style = "color:aliceblue;"></h3>-->
          </div>

          <div class = "border" style="display:none;" id="divId16">
            <div style="float: left; margin-right: 30px; margin-top:20px" id="gorselId16"></div>
            <!--<h3 id="adId16" style = "color:aliceblue;"></h3>-->
          </div>

          <script type='text/javascript'>//Buraya koydum çünkü aşağıdaki script de yüklenmiyordu
            var toplam = 0;
            var gorsel = <?php echo json_encode($idler) ?>;
            var ad = <?php echo json_encode($oyunlar) ?>;
            count = 0;
            if(gorsel === "yok" && ad==="yok"){}
            else{
                gorsel.forEach(element => {
                    var img = document.createElement("img");
                    img.width = '220';
                    img.height = '300';
                    img.src = "oyunlar/"+element+".jpg";
                    //document.getElementById("ad"+element).innerHTML = ad[count];
                    document.getElementById("gorsel"+element+"").appendChild(img);
                    document.getElementById("div"+element+"").style.display="block";
                    count++;
                });
            }
          </script>

    

    <script>
      var uname = "<?php echo"$uname_value"?>"; //php den gelen değer
      document.getElementById("kaid").innerHTML = uname;

      durum = "<?php echo $durum ?>";
      if(durum==="dolu"){
        document.getElementById('bos').id="Doluu";
      }
      
      var durum2 = "<?php echo $durum2?>";

      if(durum2 === "bos"){
        document.getElementById("Bos").style.display="block";
      }else{
        
        document.getElementById("Dolu").style.display="block";
      }
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } 
        else {
          x.className = "topnav";
        }
      }
      function doSomethingOnClick (id){ 
        location.href = "getImgVars.php?uname="+uname+"&id="+id; 
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


  </body>
</html>