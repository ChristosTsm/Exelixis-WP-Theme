<?php get_template_part('includes/homenav','expanded');?>

<?php global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );
?>

<nav class="d-flex justify-content-between ex-navbar-secondary align-items-center ex-nav-secondary">

    <a href="/" class="ex-ml"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/elogo.png' ?>" alt="Εξέλιξις Logo"></a>

    <ul class="ex-ul d-flex ex-mr mb-0">

        <li class="ex-sec-links"><span class="ex-active">T:</span> 24210 37540</li>

        <li class="ex-sec-links">

            <?php 

                wp_nav_menu( array(
                    'theme_location' => 'lang-menu',
                    'container_class' => 'secondary-lang'
                ) );

            ?>

        </li>

        <li class="ex-sec-links"><?php _e('ΜΕΝΟΥ','exelixis-circus'); ?> <i id='ex-open-menu' class="fas fa-bars ex-open-menu"></i></li>

    </ul>

</nav>
