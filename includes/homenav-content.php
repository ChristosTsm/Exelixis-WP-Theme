<?php get_template_part('includes/homenav','expanded');?>


<header class="ex-header">

    <?php while ( have_posts() ) : the_post(); ?>

    <nav class="ex-nav" id="home-nav">

        <div class="ex-logo">

            <a href="#">

                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/elogo.png' ?>" alt="logo">

                <img class="ex-letters-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/logoletters.svg' ?>" alt="Letters Logo">
            
            </a>
        </div>

        <ul class="ex-ul">

            <li class="ex-links mobile-hidden"><span class="ex-active">T:</span> <?php the_field('tel') ?></li>

            <li class="ex-sec-links">

                <?php 
                
                    wp_nav_menu( array(
                        'theme_location' => 'lang-menu'
                    ) );

                ?>
            
            </li>

            <li class="ex-links"><span class="mobile-hidden"><?php _e('ΜΕΝΟΥ','exelixis-circus'); ?></span> <i id='ex-open-menu' class="fas fa-bars"></i></li>

        </ul>

    </nav>

    <div class="ex-inner-text">

        <h1>
            <i>

            <?php _e(the_field('banner_text'), 'exelixis-circus'); ?>

            </i> 
            
        </h1>

    </div>

    <?php endwhile; ?>
    
    <div class="arrow">

        <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/arrows-animating.svg' ); ?>                        
    
    </div>
</header>

