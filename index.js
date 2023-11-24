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