<?php

$home_page = 35;

?>

<section class="ex-expanded-navigation ex-hidden">

    <i id="ex-close-menu" class="fas fa-times close-expanded-menu-icon"></i>
 
    <div class="ex-nav-expanded">

        <div class="row">

            <div class="col-sm">

                <img class="mobile-hidden" src="<?php echo get_stylesheet_directory_uri() . '/assets/mega-menu-logo.png' ?>" alt="Εξέλιξις">

            </div>

            <div class="col-sm d-flex justify-content-start justify-content-md-center ex-expanded-col-wrapper">

                <h3 class="ex-expanded-title-rotated">Μενου</h3>

                    <?php 
                    
                        wp_nav_menu( array(
                            'theme_location' => 'links-menu'
                        ) );

                    ?>

            </div>

            <div class="col-sm d-flex justify-content-start justify-content-md-center ex-expanded-col-wrapper">

                <h3 class="ex-expanded-title-rotated-long">Ασφαλειες</h3>

                    <?php 
                    
                        wp_nav_menu( array(
                            'theme_location' => 'services-menu'
                        ) );

                    ?>

            </div>

            <div class="col-sm d-flex ex-expanded-info-wrapper">

                <img class="ex-expanded-address-img" src="<?php echo get_stylesheet_directory_uri() . '/assets/mega-menu-address.png' ?>" alt="Επικοινωνία">

                <div>

                    <div class="ex-expanded-address">
                        
                        <p><?php _e(get_field('address', $home_page), 'exelixis-circus');?></p>

                    </div>

                    <div class="ex-expanded-tel">

                        <p><span>Τ: </span><?php _e(get_field('tel', $home_page), 'exelixis-circus'); ?></p>

                        <p><span>F: </span><?php _e(get_field('fax', $home_page), 'exelixis-circus'); ?></p>

                        <p><span>E: </span><?php _e(get_field('email', $home_page), 'exelixis-circus'); ?></p>

                    </div>

                    <div class="ex-expanded-social-icons">

                        <a href="<?php the_field('facebook_link', $home_page); ?>"><i class="fab fa-facebook-f"></i></a>

                        <a href="<?php the_field('twitter_link', $home_page); ?>"><i class="fab fa-twitter"></i></a>

                        <a href="<?php the_field('linkedin_link', $home_page); ?>"><i class="fab fa-linkedin-in"></i></a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>