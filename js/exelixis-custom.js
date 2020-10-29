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


// Mega Menu Script
let open = document.getElementById('ex-open-menu');
let close = document.getElementById('ex-close-menu');
let menu = document.querySelector('.ex-expanded-navigation');

open.addEventListener("click", openMegaMenu);
close.addEventListener("click",closeMegaMenu);


function openMegaMenu() {
    menu.classList.remove('ex-hidden');
    menu.style.opacity = 1;
    menu.style.zIndex = 999;
}

function closeMegaMenu() {
    menu.style.opacity = 0;
    menu.style.zIndex = -999;
}


let navbar = document.getElementById('home-nav');
// let logo = document.querySelector('.ex-logo');
// let lettersLogo = document.querySelector('.ex-letters-logo');

window.onscroll = function() {navScrollFunction()};

function navScrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    navbar.classList.add('navbar-on-scroll');
  } else {
    navbar.classList.remove('navbar-on-scroll');
  }
}