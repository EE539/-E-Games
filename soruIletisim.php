<?php 
  $uname_value =  $_GET['uname'];
  include("sepetControl.php");
?>

<!DOCTYPE html>
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
                  <h1><strong><span>BİZE ULAŞ</span></strong></h1>
                </div>
            </div>
          </div>
        </div>
      </div>

      

    </div>
        <h3 style="color:aliceblue">Bize <i><u>eegames@gmail.com</u></i> adresinden ya da sosyal medya hesaplarımızdan ulaşabilirsiniz</h3>
        <div>
            <a href="https://www.linkedin.com/" class="fa fa-linkedin" style="font-size: 50px; text-decoration: none; margin-left:10px"></a>
            <a href="https://www.youtube.com/" class="fa fa-youtube" style="font-size: 50px; text-decoration: none; margin-left:10px"></a>
            <a href="https://www.instagram.com/" class="fa fa-instagram" style="font-size: 50px; text-decoration: none; margin-left:10px"></a>
            <a href="https://www.twitter.com/" class="fa fa-twitter" style="font-size: 50px; text-decoration: none; margin-left:10px"></a>

        </div>
    <script>
      var uname = "<?php echo"$uname_value"?>"; //php den gelen değer
      document.getElementById("kaid").innerHTML = uname;

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