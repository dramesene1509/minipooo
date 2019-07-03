
/*  var b=document.getElementById("b");
 var nb=document.getElementById("nb");
 var mask=document.getElementById("elebourse");
 var lnl=document.getElementById("lnl");
 var adresse=document.getElementById("adresse");
 var chambre=document.getElementById("chambre"); */

var b=document.getElementById("b");
var nb=document.getElementById("nb")
var mask=document.getElementById("idbourse");
var nomask=document.getElementById("idnobourse");
var maskl=document.getElementById("idloger");
var l=document.getElementById("l");
var nl=document.getElementById("nl");
var lnl=document.getElementById("lnl");
var nbr=document.getElementById("nb"); 
 if (b.checked == true ) {
mask.style.displaye="block";

} else {
mask.style.display="none";
lnl.style.display="none";  


}

if (nbr.checked == true ) {
nomask.style.displaye="block";
} else {
nomask.style.display="none";
}
if (l.checked == true ) {
maskl.style.displaye="block";
} else {
maskl.style.display="none";
}

b.addEventListener('change',function(){
if (mask.style.display=="none" ) {
    mask.style.display="block"; 
    nomask.style.display="none"; 
    lnl.style.display="block";  

}
else{
    mask.style.display="none";
    nbr.style.display="block";


}
}
)
nbr.addEventListener('change',function(){
if (    nomask.style.display=="none" ) {
    nomask.style.display="block"; 
    mask.style.display="none";  
    lnl.style.display="none";   
}
else{
    nomask.style.display="none";
}
}
)
l.addEventListener('change',function(){
if (    maskl.style.display=="none" ) {
    maskl.style.display="block"; 
}
else{
    maskl.style.display="none";
}
}
)
nl.addEventListener('change',function(){
if (    maskl.style.display=="bloclk" ) {
    maskl.style.display="non"; 
}
else{
    maskl.style.display="none";
}
}

/*         Boursier.onchange= function(){
        Addresse.disabled=false;
        Typebourse.disabled=false;
        Chambre.disabled=false;
        Loger.disabled=false;
        Nonloger.disabled=false;
       
    }
Loger.onchange= function(){
Addresse.disabled=true;
Typebourse.disabled=false;
Chambre.disabled=false;
Nonboursier.disabled=true;

    }

Nonloger.onchange= function(){
Addresse.disabled=false;
Typebourse.disabled=false;
Chambre.disabled=true;
Nonboursier.disabled=false;
Loger.disabled=true;
Boursier.disabled=false;
    }

Nonboursier.onchange= function(){
        Addresse.disabled=false;
        Typebourse.disabled=false;
        Chambre.disabled=true;
        Loger.disabled=true;
        Nonloger.disabled=false;
      
    } */
 


