<?php get_template_part('includes/homenav','expanded');?>

<nav class="d-flex justify-content-between ex-navbar-secondary align-items-center">
    <a href="#" class="ex-ml"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/elogo.png' ?>" alt="Εξέλιξις Logo"></a>

    <ul class="ex-ul d-flex ex-mr mb-0">
        <li class="ex-sec-links"><span class="ex-active">T:</span> 24210 37540</li>
        <li class="ex-sec-links"><span class="ex-active lang-selector">EL</span> EN</li>
        <li class="ex-sec-links">ΜΕΝΟΥ <i id='ex-open-menu' class="fas fa-bars ex-open-menu"></i></li>
    </ul>
</nav>

<script>
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
</script>