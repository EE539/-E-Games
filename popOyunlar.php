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
    
    
      <div class="games">
        <div class="inner-container">
          <h3>Popüler Oyunlar</h3>
        </div>
        <div class="owl-carousel">
        <div class = "item">
            <a href="#" id = "Id001" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID1"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id002" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID2"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id003" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID3"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id004" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID4"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id005" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID5"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id006" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID6"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id007" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID7"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id008" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID8"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id009" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID9"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id010" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID10"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id011" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID11"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id012" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID12"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id013" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID13"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id014" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID14"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id015" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID15"></div></a>
          </div>
          <div class = "item">
            <a href="#" id = "Id016" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID16"></div></a>
          </div>
          <script type='text/javascript'>//Buraya koydum çünkü aşağıdaki script de yüklenmiyordu
            var gorsel = <?php echo json_encode($datas) ?>;
            var count = 1;
            
            gorsel.forEach(element => {
              var img = document.createElement("img");
              img.width = '220';
              img.height = '300';
              img.src = "oyunlar/"+element+".jpg";
              if(count<10){
                debugger;//swap problemi var, DÜZELT!!!
                document.getElementById('Id00'+count).id=element;
              }
              else{
                debugger;
                document.getElementById('Id0'+count).id=element;
              }
              document.getElementById("gorselID"+count+"").appendChild(img);
              count++;
            });
            
          </script>
        </div>
      </div>
  

    </div>
      
    <script>
      var uname = "<?php echo"$uname_value"?>"; //php den gelen değer
      document.getElementById("kaid").innerHTML = uname;
      
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } 
        else {
          x.className = "topnav";
        }
      }
      durum = "<?php echo $durum ?>";
      if(durum==="dolu"){
        document.getElementById('bos').id="Doluu";
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
        function doSomethingOnClick (id){ 
            location.href = "getImgVars.php?uname="+uname+"&id="+id; 
        }
        function getU(id){
            location.href="getUser.php?uname="+uname;
        }
    </script>
  </body>
</html>