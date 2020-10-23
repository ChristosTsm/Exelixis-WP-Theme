<?php get_template_part('includes/homenav','expanded');?>

<header class="ex-header">
    <nav class="ex-nav">
        <div class="ex-logo">
            <a href="#">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/elogo.png' ?>" alt="logo">
                <img class="ex-letters-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/logoletters.svg' ?>" alt="Letters Logo">
            </a>
        </div>
        <ul class="ex-ul">
            <li class="ex-links"><span class="ex-active">T:</span> 24210 37540</li>
            <li class="ex-links"><span class="ex-active lang-selector">EL</span> EN</li>
            <li class="ex-links">ΜΕΝΟΥ <i id='ex-open-menu' class="fas fa-bars"></i></li>
        </ul>
    </nav>
    <div class="ex-inner-text">
        <h1>
            Κάθε κομμάτι της<br>ζωής σας είναι μοναδικό.<br>
            Όπως εσείς.
        </h1>

    </div>
    <div class="arrow">
        <!-- <img src="<?php# echo get_stylesheet_directory_uri() . '/assets/arrow-v2.svg' ?>" alt="arrow"> -->
        
        <svg><defs><style>.cls-1{fill:#f37a21;}.cls-2{fill:none;stroke:#f37a21;stroke-miterlimit:10;}</style></defs><title>arrow</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="1032.84 620.84 1024.6 606.12 1036.08 609.36 1032.84 620.84"/><polygon class="cls-1" points="1343.24 378.22 1330.6 367.06 1342.51 366.32 1343.24 378.22"/><polygon class="cls-1" points="1369.38 150.7 1358.21 163.35 1357.47 151.44 1369.38 150.7"/><polygon class="cls-1" points="1430.08 16.87 1430.04 0 1438.49 8.42 1430.08 16.87"/><polygon class="cls-1" points="1847.68 321.35 1864.55 321.31 1856.14 329.77 1847.68 321.35"/><polygon class="cls-1" points="1789.43 554.73 1777.52 566.69 1777.49 554.76 1789.43 554.73"/><polygon class="cls-1" points="1468.05 519.79 1480.01 531.69 1468.08 531.72 1468.05 519.79"/><polygon class="cls-1" points="1202.67 751.75 1212.97 765.11 1201.14 763.58 1202.67 751.75"/><polygon class="cls-1" points="638.97 804.3 634.81 787.95 645.07 794.05 638.97 804.3"/><polygon class="cls-1" points="128.96 736.39 137.58 721.89 140.52 733.45 128.96 736.39"/><path class="cls-2" d="M.5,391.41c0,136.14,36.79,231.2,92.58,296.82"/><path class="cls-2" id="path" d="M988.45,902.31c383.14-217.21,614.62-522.06,614.62-522.06l253,253.73V8.44H1206.79l245.06,233c-289.61,370.22-722.46,536.2-862.51,568.08-100,22.81-357.17,42.31-496.26-121.26"/></g></g></svg>
    </div>
</header>



<script>

// todo -> MorphSVGPlugin https://greensock.com/path-animation/

// gsap.registerPlugin(MotionPathPlugin);

// gsap.set(".cls-1", {xPercent:0, yPercent:0, transformOrigin:"50% 50%"} );

// gsap.to(".cls-1" , { duration: 5, motionPath: '#Layer_1-2' } );

</script>

