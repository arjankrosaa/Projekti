//llogaritja e dimensioneve tek kalkulatori

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
        
        for(i=0;i<butoni.length;i++)
        {
            butoni[i].addEventListener("click", (e)=>{
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

            if(result.style.color=='red'){
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




       

    function validateLoginForm(){

    let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
    

        let emailInput = document.getElementById('email');
        let emailError = document.getElementById('emailError');

        

        var password=document.getElementById("password").value;

        emailError.innerText = '';
    
        if(!emailRegex.test(emailInput.value)){
            emailError.innerText = 'invalid email';
            return;
        }else if(password == "" ){
            alert('Passwordi nuk duhet te jete i Zbraset!');
            return;
        }
        
        alert('form submitted succesfully!');
    }