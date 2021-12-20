<?php
 
  $uname_value =  $_GET['uname'];
  $oadi = $_GET['ad'];
  $oid = $_GET['id'];
  $ofiyat = $_GET['fiyat'];
  $oyapimci = $_GET['yapimci'];
  $otarih = $_GET['tarih'];
  $oaciklama = $_GET['aciklama'];
  include("sepetControl.php");

?>
<!DOCTYPE html>
<html>
  <!--Game Page for Users-->
  <head>
      <title>ƎE Games</title>
      <link rel="stylesheet" href="oyun.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="login.css">
      <link rel="stylesheet" href="signin.css">

      <!--Dışardan alınan linkler (Sayfanın Kaymasını Sağlıyorlar)-->
      <!--This link is both owl CSS files combined into one-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/g/jquery.owlcarousel@1.31(owl.carousel.css+owl.theme.css)">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.6.3/css/font-awesome.min.css">

      <!--This tag is both JS files combined-->
      <script src="https://cdn.jsdelivr.net/g/jquery@2.2.4,jquery.owlcarousel@1.31"></script>

      <link rel="stylesheet" href="arrow.css">
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
        </div>
      </div>

      <div id="gorselID" class="main-photo"></div>
    </div>

    <div class="ozellikler">
      <h1 style="color:azure; position: relative; left: 300px;" id="oyunAdı"></h1>
      <button class="button" class="buttonLoc" id="fiyat"></button>
      <p style="color:azure; position: relative; left: 300px;"id="aciklama"></p>
    </div>

    <script>

      var oyunID = "<?php echo $oid?>";
      document.querySelector('#homeImg').style.backgroundImage = 'url("oyunlar/Arkaplan/'+oyunID+'.jpg")';
      
      var uname = "<?php echo $uname_value?>";
      document.getElementById("kaid").innerHTML = uname;
      
      var oAdi = "<?php echo $oadi ?>";
      document.getElementById("oyunAdı").innerHTML = oAdi;

      var fiyat = "<?php echo $ofiyat ?>";
      document.getElementById("fiyat").innerHTML = "Fiyat: "+fiyat+"TL";

      var aciklama = "<?php echo $oaciklama ?>";
      document.getElementById("aciklama").innerHTML = aciklama;

      var img = document.createElement("img");
      img.width = '220';
      img.height = '300';
      img.src = "oyunlar/"+oyunID+".jpg";
      document.getElementById("gorselID").appendChild(img);

      durum = "<?php echo $durum ?>";
      if(durum==="dolu"){
        document.getElementById('bos').id="Doluu";
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
        location.href = "gamePage.php?uname="+x+"&id="+id; 
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

      document.getElementById("fiyat").onclick=function(){
        location.href= "addCart.php?uname="+uname+'&ad='+oAdi+'&id='+oyunID+'&fiyat='+fiyat;
      }
    </script>
  </body>
</html>