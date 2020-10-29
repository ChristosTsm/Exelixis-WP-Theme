<section class="ex-expanded-navigation ex-hidden">

    <i id="ex-close-menu" class="fas fa-times close-expanded-menu-icon"></i>
 
    <div class="ex-nav-expanded">

        <div class="row">

            <div class="col-sm">

                <img class="mobile-hidden" src="<?php echo get_stylesheet_directory_uri() . '/assets/mega-menu-logo.png' ?>" alt="Εξέλιξις">

            </div>

            <div class="col-sm d-flex justify-content-center ex-expanded-col-wrapper">

                <h3 class="ex-expanded-title-rotated">Μενου</h3>


                <ul>

                    <?php 
                    
                        wp_nav_menu( array(
                            'theme_location' => 'links-menu'
                        ) );

                    ?>

                </ul>

            </div>

            <div class="col-sm d-flex justify-content-center ex-expanded-col-wrapper">

                <h3 class="ex-expanded-title-rotated-long">Ασφαλειες</h3>

                <ul>

                    <?php 
                    
                        wp_nav_menu( array(
                            'theme_location' => 'services-menu'
                        ) );

                    ?>

                </ul>

            </div>

            <div class="col-sm d-flex ex-expanded-info-wrapper">

                <img class="ex-expanded-address-img" src="<?php echo get_stylesheet_directory_uri() . '/assets/mega-menu-address.png' ?>" alt="Επικοινωνία">

                <div>

                    <?php while ( have_posts() ) : the_post(); ?>

                    <div class="ex-expanded-address">
                        
                        <p><?php the_field('address');?></p>

                    </div>

                    <div class="ex-expanded-tel">

                        <p><span>Τ: </span><?php the_field('tel'); ?></p>

                        <p><span>F: </span><?php the_field('fax'); ?></p>

                        <p><span>E: </span><?php the_field('email'); ?></p>

                    </div>

                    <div class="ex-expanded-social-icons">

                        <a href="<?php the_field('facebook_link'); ?>"><i class="fab fa-facebook-f"></i></a>

                        <a href="<?php the_field('twitter_link'); ?>"><i class="fab fa-twitter"></i></a>

                        <a href="<?php the_field('linkedin_link'); ?>"><i class="fab fa-linkedin-in"></i></a>

                    </div>

                    <?php endwhile; ?>

                </div>

            </div>

        </div>

    </div>



</section>