<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"

</head>
<body>
    <nav  class="zone">
        <ul class="main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="Projektet.php">Projektet</a></li>
            <li><a href="Sherbimet.php">Sherbimet</a></li>
            <li><a href="RrethNesh.php">Rreth Nesh</a></li>
            <li class="push"><a href="Login.php">Login</a></li>


        </ul>
    </nav>

    <div class="hero">
        <div class="container">
            <div class="hero-elements">
                <h1 class="title" id="first-title">LuxeLiving</h1>
                <button class="button-hero" onclick="newTabContact()">Kontakto!</button>
            </div>
        </div>
    </div>


    <div class="Projektet">
        <div class="container">
            <div class="projektet-elements">
                <h1 style="text-align: center;">-Projektet-</h1>
                <p style="text-align: center;">Disa nga Projektet e Perfunduara me Sukses!</p>
                <div class="projektet-img">

                    <img src="img/3.jpg" alt="">
                     <img src="img/6.jpg" alt="">
                    <img src="img/7.jpeg" alt="">
                    <img src="img/9.jpg" alt="">
                    <img src="img/10.jpg" alt="">
                    <img src="img/11.jpg" alt="" style="min-width: 450px;">
                </div>
                <button class="button-hero" style="margin-top: 10px;" onclick="NewTab()"><a href="" style="text-decoration: none;color: black;pointer-events: none;">Me shume...</a></button>
            </div>
        </div>
     </div>

    
    


    <div class="produkti-javes">
       
        <div class="pro-img">
            <img class="BENTLEY" src="img/BENTLEY.png" alt="">
            
        </div>
            <h3>PRODUKTI I JAVËS <br> Bentley</h3>    
    </div>


    <div class="deget">
        <div class="container">
            <div class="deget-elements">
                <h1 style="text-align: center;">-Degët Tona-</h1>
                <p style="text-align: center;">Qytetet Ku Mund Te Na Gjeni,Ju Mirepresim Në Sallonet Tona!</p>
                <p id="05" style="text-align: center;display: none;font-size: 19px;font-weight: bolder;" >Ferizaj</p>
                <p id="06" style="text-align: center;display: none;font-size: 19px;font-weight: bolder;" >Gjilan</p>
                <p id="01" style="text-align: center;display: none;font-size: 19px;font-weight: bolder;" >Prishtina</p>
                
                <div class="deget-img">
                    <img style="width: 450px;margin: 10px;" id="05img" src="img/ferizaj.jpg" alt="" onmouseover="mouseOver()" onmouseout="mouseOut()">        
                    <img style="width: 450px;margin: 10px;" src="img/gjilan.jpg" alt="" onmouseover="mouseOver06()" onmouseout="mouseOut06()">      
                    <img style="width: 450px;height: 300px;margin: 10px;" src="img/prishtina.png" alt="" onmouseover="mouseOver01()" onmouseout="mouseOut01()" >
                   
                </div>
            </div>
        </div>

    </div>


    <div class="dimension-calculation">
        <div class="container">
            <div class="calculator">
                <h1>-Kalkulatori-</h1>
                <p style="text-align: center;">Ju mund ta kalkuloni cmimin per meter te kushzhines</p>
                <img src="img/icona-kuzhines.png">
                <label for="meter">Shtyp Metrat e Kushzhines </label>
                <input type="number" name="meter" oninput="llogaritDimensionet(this.value)">

                <label for="result">Cmimi per Kushzhine (€)</label>
                <input type="number" name="result" id="result">


            </div>
        </div>
    </div>


    <div class="parteret">
        <div class="container">
            <h1 style="text-align: center;">-Partneret Tane-</h1>
            <div class="partner-div">

            <div class="button1" onclick="butoniMajt()"><button>  <  </button></div>
          <div class="parteret-img">
              <img src="img/partner1.jpg" alt="" id="first-Photo">
              <img src="img/partner4.jpg" alt="" id="second-Photo" style="display: none;">
        
         </div>
            <div class="button2" onclick="butoniDjatht()"><button>  >  </button></div>

           </div>
        </div>
    </div>



<!------------------------------

    <div class="footer">
            <div class="footer-divs">
                <div class="nav-pages" >

                    <h4>Menu</h4>
                    <hr>
                        <p><a href="index.html">Home</a></p>
                        <p><a href="Projektet.html">Projektet</a></p>
                        <p><a href="Sherbimet.html">Sherbimet</a></p>
                        <p><a href="RrethNesh.html">Reth Nesh</a></p>
                        <p><a href="RrethNesh.html">Kontakti</a></p>           
                    
                </div>

                <div class="login-pages" >
                    <h4>Llogaria</h4>
                    <hr>
                    <p><a href="Login.html">Login</a></p>
                    <p><a href="Regjistrohu.html">Regjistrohu</a></p>
                </div>

                <div class="lokacionet">
                    <h4>Lokacionet</h4>
                    <hr>
                    <p>prishtina</p>
                    <p>ferizaj</p>
                    <p>gjilan</p>
                </div>
  
        </div>

        <div class="socialMedia-icon">
          
            <img src="img/facebook (1).png" alt="icon" style="cursor: pointer;">
            <img src="img/instagram.png" alt="icon"  style="cursor: pointer;">
            <img src="img/whatsapp.png" alt="icon"   style="cursor: pointer;">
        </div>



    </div>

    <div class="under-footer">
       <div style="margin-left: 30px;">
       <p>2024@ All rights reserved</p>
       </div>

       <div style="display: flex;align-items: center;margin-right: 30px;font-size: 18px;">
        <label for="" style="padding-right:8px;"><a href="">terms</a></label>
        <label for="" style="padding-right: 8px;"><a href="">privacy</a></label>
        <label for="" style="padding-right: 8px;"><a href="">security</a></label>
       </div>
    </div> ----->

    <div class="Footer">
        <div class="footer-rresht">
            <div class="footer-kolon">
                <h4>Info</h4>
                <ul class="links">
                    <li><a href="#">Home</a></li>
                    <li><a href="Projektet.php">Projektet</a></li>
                    <li><a href="Sherbimet.php">Sherbimet</a></li>
                    <li><a href="RrethNesh.php">Reth-Nesh</a></li>
                </ul>
            </div>

            <div class="footer-kolon">
                <h4>Account</h4>
                <ul class="links">
                    <li><a href="Login.php">Login</a></li>
                    <li><a href="Regjistrohu.php">Regjistrohu</a></li>
                </ul>
            </div>

            <div class="footer-kolon">
                <h4>Legal</h4>
                <ul class="links">
                  <li><a href="#">Customer Agreement</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Security</a></li>
                  <li><a href="#">Media Kit</a></li>
                </ul>
              </div>

               <div class="footer-kolon">
                <h4>Newsletter</h4>
                <p>
                  Subscribe to our newsletter for a weekly dose
                  of news, updates, helpful tips, and
                  exclusive offers.
                </p>
                <form action="#">
                  <input type="text" placeholder="Your email" required>
                  <button type="submit">SUBSCRIBE</button>
                </form>
                <img src="img/instagram.png" alt="" style="width: 50px;cursor: pointer; margin-top: 40px;">
                <img src="img/facebook (1).png" alt="" style="width: 50px;cursor: pointer;">
                <img src="img/whatsapp.png" alt="" style="width: 50px;cursor: pointer;">

              </div>


        </div>
    </div>



    <script src="index.js"></script>


</body>
</html>