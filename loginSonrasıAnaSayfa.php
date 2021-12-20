<?php 
  $uname_value =  $_GET['uname'];
  include("populerS.php");
  include("sepetControl.php");
?>

<!DOCTYPE html>
<html>
  <head>
      <title>ƎE Games</title>
      <link rel="stylesheet" href="genel.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
            <a href="#" id = "Id001" onclick="doSomethingOnClick(this.id)" ><div id="gorselID1"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id002" onclick="doSomethingOnClick(this.id)" ><div id="gorselID2"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id003" onclick="doSomethingOnClick(this.id)" ><div id="gorselID3"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id004" onclick="doSomethingOnClick(this.id)" ><div id="gorselID4"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id005" onclick="doSomethingOnClick(this.id)" ><div id="gorselID5"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id006" onclick="doSomethingOnClick(this.id)" ><div id="gorselID6"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id007" onclick="doSomethingOnClick(this.id)" ><div id="gorselID7"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id008" onclick="doSomethingOnClick(this.id)" ><div id="gorselID8"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id009" onclick="doSomethingOnClick(this.id)" ><div id="gorselID9"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id010" onclick="doSomethingOnClick(this.id)" ><div id="gorselID10"></div></a>
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
              if(count!=10){
                document.getElementById('Id00'+count).setAttribute('id', element);
              }
              else{
                document.getElementById('Id0'+count).setAttribute('id', element);
              }
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
            
            
          </script>
        </div>
      </div>
    </div>

    <div class="games">

    </div>

   

    
    <script>
      var x = "<?php echo"$uname_value"?>"; //php den gelen değer
      document.getElementById("kaid").innerHTML = x;

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
        location.href = "getImgVars.php?uname="+x+"&id="+id; 
      }

      function returnMP(id){
        location.href= "loginSonrasıAnaSayfa.php?uname="+x;
      }
      function sepetPhp(id){
        location.href="sepetVars.php?uname="+x;
      }
      function kutuphane(id){
        location.href="kutuphaneVars.php?uname="+x;
      }
      function popOyun(id){
        location.href="popOyunlar.php?uname="+x;
      }
      function oyun(id){
        location.href="oyunlar.php?uname="+x;
      }
      function soruiletisim(id){
        location.href="soruIletisim.php?uname="+x;
      }
      function getU(id){
        location.href="getUser.php?uname="+x;
      }
    </script>
  </body>
</html>