"use strict";

window.onload=function(){
    var search=document.getElementById("search");
    var input=document.getElementById("input");
    var result=document.getElementById("result");
    var getall=document.getElementById("getall");
    
    
    search.addEventListener("click", function(){
        var httpRequest= new XMLHttpRequest();
        var url= "https://info2180-lab6-dalebiggs.c9users.io/request.php?q=".concat(input.value);
        
        httpRequest.onreadystatechange= handler;
        httpRequest.open('GET', url);
        httpRequest.send();
        
            function handler(){
                if (httpRequest.readyState == XMLHttpRequest.DONE){
                    if (httpRequest.status==200){
                        var response=httpRequest.responseText;
                        result.innerHTML=response;
                    }else{
                        alert("Check input");
                    }
                }
            }
    });
    
    getall.addEventListener("click", function(){
        var xhttp = new XMLHttpRequest();
        var url2="https://info2180-lab6-dalebiggs.c9users.io/request.php?q=&all=true ";
        
        xhttp.onreadystatechange = handler2;
        xhttp.open("GET", url2);
        xhttp.send();
        
        function handler2(){
            var response2=document.createElement("ol");
            if (xhttp.readyState == XMLHttpRequest.DONE){
                
                if(xhttp.status == 200) {
                    response2 = xhttp.responseText;
                    result.innerHTML=response2;
            }else{
                alert("Check input");
            }
        }


    }
    
    
});



};