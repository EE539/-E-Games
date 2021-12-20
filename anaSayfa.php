<?php
  include("baglanti.php");
  include("populerS.php");
  
?>

<!DOCTYPE html>
<html>
  <head>
      <title>ƎE Games</title>
      <link rel="stylesheet" href="genel.css" />
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
            <a href="#" onclick="soruiletisim(this.id)">Soru&nbsp;ve&nbsp;İletişim</a>
            <button type="button" onclick= "document.getElementById('id01').style.display='block'" style="width:auto;">Giriş&nbsp;Yap</button>
            <button type="button" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Hesap&nbsp;Aç</button>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
          </div> 
          <div>
            <h1 style = "font-size: 60px">ƎE Games</h1>
            <div class="text-center">
                <div class="content">
                  <h1><strong><span>OYUNUNU SEÇ</span></strong></h1>
                </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    
    <div class="prod-slider-container">
      <div class="games">
        <div class="inner-container">
          <h3>Top 10 Popüler Oyunlar</h3>
        </div>
        <div class="owl-carousel">
          <div class = "item">
            <a href="#" id = "Id01" onclick="doSomethingOnClick(this.id)" ><div id="gorselID1"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id02" onclick="doSomethingOnClick(this.id)" ><div id="gorselID2"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id03" onclick="doSomethingOnClick(this.id)" ><div id="gorselID3"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id04" onclick="doSomethingOnClick(this.id)" ><div id="gorselID4"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id05" onclick="doSomethingOnClick(this.id)" ><div id="gorselID5"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id06" onclick="doSomethingOnClick(this.id)" ><div id="gorselID6"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id07" onclick="doSomethingOnClick(this.id)" ><div id="gorselID7"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id08" onclick="doSomethingOnClick(this.id)" ><div id="gorselID8"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id09" onclick="doSomethingOnClick(this.id)" ><div id="gorselID9"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id10" onclick="doSomethingOnClick(this.id)" ><div id="gorselID10"></div></a>
          </div>
          <script type='text/javascript'>//Buraya koydum çünkü aşağıdaki script de yüklenmiyordu
            var gorsel = <?php echo json_encode($datas) ?>;
            const n = 10 //get the first 5 items
            const newArray = gorsel.slice(0, n);
            var count = 1;
            
            newArray.forEach(element => {
              var img = document.createElement("img");
              img.width = '220';
              img.height = '300';
              img.src = "oyunlar/"+element+".jpg";
              document.getElementById("gorselID"+count+"").appendChild(img);
              count++;
            });

            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                items: 5,
                autoPlay: 3000,
                itemsDesktop: [1199, 5],
                itemsDesktopSmall: [979, 5],
                navigation: true,
                navigationText: [
                  "<i class='fa fa-chevron-left'></i>",
                  "<i class='fa fa-chevron-right'></i>"
                ]
              });
            });
            
            function doSomethingOnClick (id){ 
              alert("Oyunu görmek için lütfen sisteme kayıt olun");
            }
          </script>
        </div>
      </div>
    </div>

    <div class="games">

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
  </body>
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
      
      //----------------------------------------------------------------

    </script>
</html>