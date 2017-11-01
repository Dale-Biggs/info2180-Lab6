"use strict";

window.onload=function(){
    var search=document.getElementById("search");
    
    search.onclick=function(){
        var httpRequest= new XMLHttpRequest();
        var url= "https://info2180-lab6-dalebiggs.c9users.io/request.php?q=definition ";
        
        httpRequest.onreadystatechange= handler;
        httpRequest.open('GET', url);
        httpRequest.send();
        
            function handler(){
                if (httpRequest.readyState == XMLHttpRequest.DONE){
             if (httpRequest.status==200){
                 var response=httpRequest.responseText;
                    alert(response)
                }else{
                    alert("recheck code");
                }
                }
            }
    }
}
