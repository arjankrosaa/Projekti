<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="RrethNesh.css">
    <link rel="stylesheet" href="projektet.css">
    <link rel="stylesheet" href="Sherbimet.css">
</head>
<body>
    <nav  class="zone">
        <ul class="main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="Projektet.php">Projektet</a></li>
            <li><a href="Sherbimet.php">Sherbimet</a></li>
            <li><a href="#">Rreth Nesh</a></li>
            <li class="push"><a href="Login.php">Login</a></li>


        </ul>
    </nav>


    <div class="hero-sher">
        <div class="hero-elements-sher">
            <h1 class="title-sher" id="first-title-sher">Rreth Nesh!</h1>
            
    </div>
</div>


<style>
    button{
        border-radius: 20%;
        border-style: inherit;
        width: 80px;
        height: 40px;
        font: 10pt;
        margin-left: 200px;
        margin-top: 10px;
    }
    button:hover{
        background-color: #ff891b;
    }
</style>



    
    <div class="rrethNesh" >
        <div class="container">
            <h1 style="text-align: center;">LuxeLiving</h1>
            <div class="rrethNesh_elements">
                <div class="reth_img">
                    <img id="slideshow" style="width: 500px;height: 300px;" /><br>
                    <button onclick="changeImg()" >Next</button>

                </div>



                <script>
                    let i = 0;
        let imgArray = ['img/about1.avif','img/about2.jpg','img/about3.jpg'];

        function changeImg(){
            document.getElementById('slideshow').src = imgArray[i];

            if(i< imgArray.length -1){
                i++;
            }
            else{
                i=0;
            }
            setTimeout("changeImg()", 2600);
        }
        document.addEventListener(onload, changeImg());
                </script>

                <div class="Rr_txt">
                    <p  class="pTXT">Mobileri jone eshte krijuar ne vitin 2023 dhe jemi nder prodhuesit me te suksueshem ne vendin ton Lorem ipsum dolor,
                        <br> sit amet consectetur adipisicing elit.
                        <br> Alias facilis placeat quaerat corrupti obcaecati porro culpa dolorum. 
                        <br>Nihil perferendis eius blanditiis esse voluptates illum accusantium, quam at cum magnam enim?
                        <br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum fuga mollitia sapiente laboriosam fugiat neque, sed distinctio provident iusto?
                        <br> Facilis laborum deserunt assumenda eveniet debitis vel suscipit dolores consequuntur amet!
                        <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita consequatur sequi hic magnam, magni, id, similique rem accusantium
                        <br> nihil quasi possimus recusandae mollitia temporibus cum. Eveniet laudantium consectetur corrupti aperiam.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="projects">
        <div class="projects-details">
            <p class="p210" style="color: white;font-size: 40px;text-align:center;">210 Punetor Aktiv ne Kompanin Tone</p>
        </div>
    </div>



    <div class="contact" id="kontakti">
        <div class="container">
            <h1 class="kontakti-title">-Kontakti-</h1>
            <div class="contact-form">
                <form action="" method="post" name="myform" onsubmit="return validateform2()">
                    <label for="txt">Emri dhe Mbiemri</label> <span id="result2"></span> <br>
                    <input type="text" name="txt"  id="txt" oninput="getValue()" minlength="7"><br>

                    

                    <label for="email">sheno emailin</label><span id="result3"></span> <br>
                    <input type="email" name="email" id="email" oninput="getValue2()"><br>

                    <label for="pershkrimi">Pershkrimi</label>
                    <textarea name="pershkrimi" id="pershkrimi" rows="10"></textarea>

                    <input type="submit" value="Dergo" id="send-button">
                </form>
            </div>
        </div>
    </div>




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

    <script>
        
        function getValue(){
            let txt =document.getElementById("txt");
            let txtValue= txt.value;
    
            let result= document.getElementById("result2");
            result.innerText=txtValue;
    
    
            if(txtValue.length < '5' || !(txtValue.indexOf(" ") >= 0)){
                result.innerText=txtValue + " ❌";
                result.style.color= 'red';
               }else{
                result.innerText=txtValue + " ✔";
                result.style.color= 'green';
            }
    
    }
        function getValue2(){
            let txt =document.getElementById("email");
            let txtValue= txt.value;
    
            let result= document.getElementById("result3");
            result.innerText=txtValue;
    
    
            if( txtValue.includes("@") && txtValue.length > '3' ){
                result.innerText=txtValue 
                result.style.color= 'LightCoral';
                if(txtValue.includes(".")   ){
                    result.style.color= 'green';
                    result.innerText=txtValue + " ✔";
                    if(txtValue.includes(" ")){
                        result.style.color= 'red';
                        result.innerText=txtValue + " ❌";
                    }
                    
                }
    
               }else{
                
    
                result.innerText=txtValue + " ❌";
                result.style.color= 'red';
            }
        }

        function validateform2(){
            var result=document.getElementById("result2");
            var result2=document.getElementById("result3");
            var pershkrimi = document.myform.pershkrimi.value;

            if(!(result.style.color=='green')){
                alert("Emri nuk i plotson kushte.");
                return false;
            }

            if(  !(result2.style.color=='green') ){
                alert("Emaili nuk i plotson kushte.");
                return false;
            }

            if (pershkrimi == null || pershkrimi == "") {
                alert("Pershkrimi nuk mund te jet i zbrazur");
                return false;
            }

        }

    </script>
    
</body>
</html>