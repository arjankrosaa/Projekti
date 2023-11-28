//llogaritja e dimensioneve tek kalkulatori

function llogaritDimensionet(value){
    var rezultati;
    rezultati= 300 * value
    document.getElementById("result").value=rezultati;
}


function NewTab() {
            window.open("Projektet.html" , "_self");
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
        