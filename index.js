

function llogaritDimensionet(value){
    var rezultati;
    rezultati= 300 * value
    document.getElementById("result").value=rezultati;
}


function NewTab() {
            window.open("Projektet.html" , "_self");
        }

        function newTabContact(){
        window.open("RrethNesh.html" ,"_self" )
    }



    const butoni=document.querySelectorAll(".button");
const image= document.querySelectorAll(".image");

// kushtezimi per filtrim te kategorive

for(let j=0;j<butoni.length;j++)
{
    butoni[j].addEventListener("click", (e)=>{
        e.preventDefault();
        const filter= e.target.dataset.filter;
        image.forEach((image)=>{
            if(filter=== "tegjitha")
            {
                image.style.display="block";
            }
            else {
                if(image.classList.contains(filter)) 
                    {
                    image.style.display="block";
                    }
                else{
                    image.style.display="none";
                }    
            }     
        }) 
        
    })
}

      function shfaqPunimet(){
            document.getElementById("shfaq").style.display="block";
            document.getElementById("button-projects").style.display="none";
        }




        function butoniDjatht(){
            document.getElementById("first-Photo").style.display="none";
            document.getElementById("second-Photo" ).style.display="block";
            
        
        
        }


        
        function butoniMajt(){
            document.getElementById("second-Photo" ).style.display="none";
            document.getElementById("first-Photo").style.display="block";
        }


        function mouseOver(){
            document.getElementById("05").style.display="block";
        }

        function mouseOut(){
            document.getElementById("05" ).style.display="none";
        }


        function mouseOver06(){
            document.getElementById("06").style.display="block";
        }

        function mouseOut06(){
            document.getElementById("06" ).style.display="none";
        }


        function mouseOver01(){
            document.getElementById("01").style.display="block";
        }

        function mouseOut01(){
            document.getElementById("01" ).style.display="none";
        }








        
        const cards= document.querySelectorAll(".card");

        function flipCards(){
            this.classList.toggle("flip");
        }
        cards.forEach((card)=>card.addEventListener("click", flipCards) )
        




   /*         function validateform() {
            var emri = document.myform.txt.value;
            var emaili = document.myform.email.value;
            var pershkrimi = document.myform.pershkrimi.value;

            
            
        
            if (emri == null || emri == "") {
                alert("Emri eshte i paplotsuar.");
                return false;
            }
        
            if (emaili == null || emaili == "") {
                alert("Emaili eshte i paplotsuar.");
                return false;
            }
        
            if (pershkrimi == null || pershkrimi == "") {
                alert("Pershkrimi nuk mund te jet i zbrazur");
                return false;
            }
        }
*/






       

    function validateLoginForm(){

    let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
    let passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

    

        let emailInput = document.getElementById('email');
        let emailError = document.getElementById('emailError');

        let pwInput = document.getElementById('password');
        let pwError = document.getElementById('pwError');

        


        emailError.innerText = '';
        pwError.innerText = '';
    
        if(!emailRegex.test(emailInput.value)){
            emailError.innerText = 'invalid email';
            return;
        }

        if(!passwordRegex.test(pwInput.value)){
            pwError.innerHTML = 'invalid password! ';
            return;
        }
        
        alert('form submitted succesfully!');

        document.getElementById('email').value="";
        document.getElementById('password').value="";
     
        document.getElementById('emailError').value="";
        document.getElementById('pwError').value="";
    }



    //reth nesh
    let f = 0;
        let imgArray = ['img/1jpg','2.jfif','3.jpg','11.jpg'];

        function changeImg(){
            document.getElementById('slideshow').src = imgArray[f];

            if(f< imgArray.length -1){
                i++;
            }
            else{
                f=0;
            }
            setTimeout("changeImg()", 3600);
        }
        document.addEventListener(onload, changeImg());