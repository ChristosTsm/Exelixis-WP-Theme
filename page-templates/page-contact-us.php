<?php

/**
 * Template Name: ContactUs
 */
$home_page = 35;

get_header('secondary');
?>

<section class="ex-map-contact-us">

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12338.281133649813!2d22.9392885!3d39.3659668!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9c296449e08c333!2zzpXOvs6tzrvOuc6-zrnPgg!5e0!3m2!1sel!2sgr!4v1603375288692!5m2!1sel!2sgr" class="ex-iframe" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>

</section>

<section id="contact-us" style="min-height: 100vh;">

    <div class="row">

        <div class="col-lg-4 ex-contact-l">
            <!-- #e6e6e6 -->
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/contact.svg' ?>" alt="contact">

        </div>

        <div class="col-lg-8 ex-contact-r">
            <!-- #$dark_grey -->

            <div class="col-flex-wrapper">

                <div class="ex-contact-img-div">

                    <h3><?php _e('Είμαστε στη διάθεση σας', 'exelixis-circus') ?></h3>

                    <p><?php _e(the_field('footer_banner_text', $home_page), 'exelixis-circus'); ?></p>

                </div>

                <div class="ex-contact-info">

                    <div class="ex-footer-address">

                        <p><?php _e(the_field('address', $home_page), 'exelixis-circus'); ?></p>

                    </div>

                    <div class="ex-footer-tel">

                        <p><span>Τ: </span><?php _e(get_field('tel', $home_page), 'exelixis-circus'); ?></p>

                        <p><span>F: </span><?php _e(get_field('fax', $home_page), 'exelixis-circus'); ?></p>

                        <p><span>E: </span><?php _e(get_field('email', $home_page), 'exelixis-circus'); ?></p>

                    </div>

                    <div class="ex-footer-social-icons">

                        <a href="<?php _e(the_field('facebook_link', $home_page), 'exelixis-circus'); ?>"><i class="fab fa-facebook-f"></i></a>

                        <a href="<?php _e(the_field('twitter_link', $home_page), 'exelixis-circus'); ?>"><i class="fab fa-twitter"></i></a>

                        <a href="<?php _e(the_field('linkedin_link', $home_page), 'exelixis-circus'); ?>"><i class="fab fa-linkedin-in"></i></a>

                    </div>

                </div>

            </div>


            <div class="ex-contact-form">

                <?php echo do_shortcode("[wpforms id='221' title='false' description='false']"); ?>
            
            </div>

        </div>

    </div>

</section>


<?php get_footer('secondary'); ?>