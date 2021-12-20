<?php 
  
  $uname_value =  $_GET['uname'];
  $mail = $_GET['mail'];
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
                  <h1><strong><span>AYARLAR</span></strong></h1>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="padding:30px">
      <form action="kullaniciUpdate.php">
        <div class = "borderLn">
          <h1>Hesap Ayarları</h1>
          <hr>
          <label for="kaid"><b>Kullanıcı Adı</b></label>
          <input id = "kaid" type="text" value="<?php echo $uname_value?>" name="kaid" readonly>
          <label for="email"><b>Mail</b></label>
          <input id = "email" type="text" value="<?php echo $mail?>" name="email" required>

          <label for="psw"><b>Şifre</b></label>
          <input id = "psw" type="password" placeholder="Şifreyi Girin" name="psw" required>
    
          <label for="psw-repeat"><b>Şifreyi Tekrar Girin</b></label>
          <input id = "psw-repeat" type="password" placeholder="Şifreyi Tekrar Girin" name="psw-repeat" required>
        
          <div class="clearfix">
            <button type="button" onclick="returnMP(this.id)" class="cancelbtn">İptal</button>
            <button type="submit">Kaydet</button>
            <button type="button" onclick="anaSf(this.id)" class="exitbtn">Çıkış</button>
          </div>
        </div>
      </form>
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
      function anaSf(id){
        location.href= "AnaSayfa.php";
      }
    </script>
  </body>
</html>