jQuery(document).ready(function($){
  "use strict";

    
  if ( document.getElementById('spitogatos') && document.getElementById('watt') ) {

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

  }
  
  // Mega Menu Script
  let open = document.querySelector('#ex-open-menu');
  let close = document.querySelector('#ex-close-menu');
  let menu = document.querySelector('.ex-expanded-navigation');


  open.addEventListener("click", openMegaMenu);
  close.addEventListener("click",closeMegaMenu);

  function openMegaMenu() {
      menu.style.opacity = 1;
      menu.style.zIndex = 999;
  }
  
  function closeMegaMenu() {
      menu.style.opacity = 0;
      menu.style.zIndex = -999;
  }
  
  

  if ( document.getElementById('home-nav') ) {
    let navbar = document.getElementById('home-nav');
    
    window.onscroll = function() {navScrollFunction()};
    
    function navScrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        navbar.classList.add('navbar-on-scroll');
      } else {
        navbar.classList.remove('navbar-on-scroll');
      }
    }
    
  }

  if (document.body.classList.contains('translatepress-en_US') && ! document.body.classList.contains('home') ) {
    document.getElementById('menu-item-175').classList.add('lang-active');
    document.getElementById('menu-item-175').classList.remove('lang-inactive');
    document.getElementById('menu-item-176').classList.remove('lang-active');
    document.getElementById('menu-item-176').classList.add('lang-inactive');
  }

  if ( document.body.classList.contains('page-template-page-contact-us') && document.body.classList.contains('translatepress-en_US') ) {
    document.querySelector('.eng-choice').style.display = "block";
    document.querySelector('.gr-choice').style.display = "none";
  }




  AOS.init({
    mirror: true,
    duration: 1000
  });

});