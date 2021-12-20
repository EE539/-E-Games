<!DOCTYPE html>
<html>
  <head>
      <title>ƎE Games</title>
      <link rel="stylesheet" href="genel.css" />
      <link rel="stylesheet" href="login.css">
      <link rel="stylesheet" href="signin.css">
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
            <a href="#" onclick="soruiletisim(this.id)">Soru&nbsp;ve&nbsp;İletişim</a>
            <button type="button" onclick= "document.getElementById('id01').style.display='block'" style="width:auto;">Giriş&nbsp;Yap</button>
            <button type="button" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Hesap&nbsp;Aç</button>
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




        <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal-content animate" action="login.php" method="post">
        <div class="container">
          <label for="uname"><b>Kullanıcı Adı</b></label>
          <input type="text" placeholder="Kullanıcı Adını Girin" name="uname" required>
    
          <label for="psw"><b>Şifre</b></label>
          <input type="password" placeholder="Şifreyi Girin" name="psw" required>
            
          <button type="submit" id="logIn">Giriş</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Beni Hatırla
          </label>
        </div>
    
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Şifremi <a href="#">Unuttum?</a></span>
        </div>
      </form>
    </div>


    <div id="id02" class="modal2">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal2-content animate" action="signin.php">
        <div class="container">
          <h1>Kayıt Olun</h1>
          <p>Lütfen bir hesap açmak için aşağıdaki formu doldurun.</p>
          <hr>
          <label for="email"><b>Mail</b></label>
          <input id = "email" type="text" placeholder="Maili Girin" name="email" required>
          
          <label for="uname"><b>Kullanıcı Adı</b></label>
          <input id="uname" type="text" placeholder="Kullanıcı Adını Girin" name="uname" required>

          <label for="psw"><b>Şifre</b></label>
          <input id = "psw" type="password" placeholder="Şifreyi Girin" name="psw" required>
    
          <label for="psw-repeat"><b>Şifreyi Tekrar Girin</b></label>
          <input id = "psw-repeat" type="password" placeholder="Şifreyi Tekrar Girin" name="psw-repeat" required>
          
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Beni Hatırla
          </label>
    
          <p>Hesap açarak <a href="#" style="color:dodgerblue">Şartlar ve Gizlilik</a>lerimizi kabul etmiş oluyorsunuz.</p>
    
          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">İptal</button>
            <button type="submit" class="signupbtn">Giriş</button>
          </div>
        </div>
      </form>
    </div>


    <script>
      var modal = document.getElementById('id01');
      var modal2 = document.getElementById('id02');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal2) {
          modal2.style.display = "none";
        }
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
      
      function myFunction() {
        xhttp.open("GET", "baglanti.php?q="+str);
        xhttp.send();

        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } 
        else {
          x.className = "topnav";
        }
      }
      //loginSonrasıAnaSayfa ya login button u basıldığında gönderiyor
      document.getElementById("logIn").onclick = function () {
        location.href = "loginSonrasıAnaSayfa.php"; //ARTIK İHTİYAÇ YOK
      };
      
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
        location.href= "AnaSayfa.php";
      }
      
      function popOyun(id){
        location.href="popOyunlarnL.php";
      }
      function oyun(id){
        location.href="oyunlarnL.php";
      }
      function soruiletisim(id){
        location.href="soruIletisimnL.php";
      }
    </script>
  </body>
</html>