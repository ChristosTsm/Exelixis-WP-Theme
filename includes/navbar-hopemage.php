
<?php global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );
?>


<nav class="ex-nav">

<div class="ex-logo">

    <a href="#">

        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/elogo.png' ?>" alt="logo">

        <img class="ex-letters-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/logoletters.svg' ?>" alt="Letters Logo">

    </a>

</div>

<ul class="ex-ul">

    <li class="ex-links"><span class="ex-active">T:</span> 24210 37540</li>

    <li class="ex-sec-links">

        <?php 

            wp_nav_menu( array(
                'theme_location' => 'lang-menu'
            ) );

        ?>

    </li>

    <li class="ex-links"><?php _e('ΜΕΝΟΥ','exelixis-circus'); ?> <i id='ex-open-menu' class="fas fa-bars"></i></li>

</ul>

</nav>