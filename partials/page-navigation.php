<?php get_template_part('partials/home','nav-expanded');?>

<nav class="d-flex justify-content-between ex-navbar-secondary align-items-center ex-nav-secondary">

    <a href="<?php echo esc_url( get_page_link( 35 ) ); ?>" class="ex-ml mobile-logo"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/elogo.png' ?>" alt="Εξέλιξις Logo"></a>

    <ul class="ex-ul align-items-center d-flex ex-mr mb-0">

        <li class="ex-sec-links mobile-hidden"><span class="ex-active">T:</span> 24210 37540</li>

        <li class="ex-sec-links">

            <?php 

                wp_nav_menu( array(
                    'theme_location' => 'lang-menu',
                    'container_class' => 'secondary-lang'
                ) );

            ?>

        </li>

        <li class="ex-sec-links"><span class="mobile-hidden"><?php _e('ΜΕΝΟΥ','exelixis-circus'); ?></span><i id='ex-open-menu' class="fas fa-bars ex-open-menu"></i></li>

    </ul>

</nav>
