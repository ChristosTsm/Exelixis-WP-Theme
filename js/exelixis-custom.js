let spitogatosDiv = document.getElementById('spitogatos'); 
let watt = document.getElementById('watt'); 

spitogatosDiv.addEventListener('mouseover', function (){
    watt.style.width = "550px";
    watt.style.zIndex = "1";
    spitogatosDiv.style.width = "850px";
    spitogatosDiv.style.zIndex = "2";
});

spitogatosDiv.addEventListener('mouseout', function (){
    watt.style.width = "700px";
    spitogatosDiv.style.width = "700px";
    watt.style.zIndex = "2";
});

watt.addEventListener('mouseout', function (){
    spitogatosDiv.style.width = "700px";
    watt.style.width = "700px";
    watt.style.zIndex = "2";
});



watt.addEventListener('mouseover', function (){
    spitogatosDiv.style.width = "550px";
    spitogatosDiv.style.zIndex = "1";
    watt.style.width = "850px";
    watt.style.zIndex = "2";
});