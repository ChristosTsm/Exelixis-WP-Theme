<?php

$home_page = 35;

?>

    <footer id="footer">

        <div class="d-flex d-flex-mobile">

            <div class="ex-location text-right flex-grow-1 mobile-hidden">

                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/footer-location.png' ; ?>" alt="footer">

            </div>

            <div class="ex-footer-img d-flex flex-column ">

                <div class="ex-footer-img-div">

                    <div class="ex-footer-img-text">

                        <h3><?php _e('Είμαστε στη διάθεση σας', 'exelixis-circus') ?></h3>

                        <p><?php _e(the_field('footer_banner_text', $home_page), 'exelixis-circus'); ?></p>

                    </div>

                </div>

                <div class="ex-btn-contact">

                    <a href="https://google.com">

                        <img class="btn-blog-all-arrow btn-contact-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/footer-arrow-long.svg' ?>" alt="όλες οι υπηρεσίες" >

                        <?php _e('Φορμα επικοινωνιας', 'exelixis-circus'); ?>

                    </a>

                </div>

            </div>
            
            <div class="ex-footer-info flex-grow-1">

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

        <div class="ex-copyrights">

            <p>Circus Design Studio for Exelixis &copy; 2020 - 2021</p>

        </div>

    </footer>

        <?php wp_footer(); ?>

</body>

</html>