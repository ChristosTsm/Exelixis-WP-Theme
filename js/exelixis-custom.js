let spitogatosDiv = document.getElementById('spitogatos'); 
let watt = document.getElementById('watt'); 

spitogatosDiv.addEventListener('mouseover', function (){
    watt.style.width = "550px";
    spitogatosDiv.style.width = "850px";
});

spitogatosDiv.addEventListener('mouseout', function (){
    watt.style.width = "700px";
    spitogatosDiv.style.width = "700px";
});

watt.addEventListener('mouseover', function (){
    spitogatosDiv.style.width = "550px";
    watt.style.width = "850px";
});

watt.addEventListener('mouseout', function (){
    spitogatosDiv.style.width = "700px";
    watt.style.width = "700px";
});
