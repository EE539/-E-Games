<?php
$uname_value =  $_GET['uname'];
include("oyunlarVars.php");
include("sepetControl.php");
?>

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
                                <h1><strong><span>OYUNUNU SEÇ</span></strong></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="games">
        <h3>Oyunlar</h3>
            <a href="#" id = "Id01" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID1"></div></a>
            <a href="#" id = "Id02" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID2"></div></a>
            <a href="#" id = "Id03" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID3"></div></a>
            <a href="#" id = "Id04" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID4"></div></a>
            <a href="#" id = "Id05" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID5"></div></a>
            <a href="#" id = "Id06" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID6"></div></a>
            <a href="#" id = "Id07" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID7"></div></a>
            <a href="#" id = "Id08" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID8"></div></a>
            <a href="#" id = "Id09" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID9"></div></a>
            <a href="#" id = "Id10" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID10"></div></a>
            <a href="#" id = "Id11" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID11"></div></a>
            <a href="#" id = "Id12" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID12"></div></a>
            <a href="#" id = "Id13" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID13"></div></a>
            <a href="#" id = "Id14" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID14"></div></a>
            <a href="#" id = "Id15" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID15"></div></a>
            <a href="#" id = "Id16" onclick="doSomethingOnClick(this.id)" ><div style="float: left; margin-right: 30px; margin-bottom:20px" id="gorselID16"></div></a>
        </div>

        <script type='text/javascript'>//Buraya koydum çünkü aşağıdaki script de yüklenmiyordu
            var gorsel = <?php echo json_encode($datas) ?>;
            var count = 1;
            
            gorsel.forEach(element => {
              var img = document.createElement("img");
              img.width = '220';
              img.height = '300';
              img.src = "oyunlar/"+element+".jpg";
              document.getElementById("gorselID"+count+"").appendChild(img);
              count++;
            });
            
            function doSomethingOnClick (id){ 
                location.href = "getImgVars.php?uname="+uname+"&id="+id;
            }
          </script>

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