<?php

$home_page = 35;

?>

    <footer>

        <div class="d-flex d-flex-mobile">

            <div class="ex-location text-right flex-grow-1 mobile-hidden">

                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/footer-location.png' ; ?>" alt="footer">

            </div>

            <div class="ex-footer-img d-flex flex-column ">

                <div class="ex-footer-img-div">

                    <div class="ex-footer-img-text">

                        <h3>Είμαστε στη διάθεση σας</h3>

                        <p><?php the_field('footer_banner_text', $home_page); ?></p>

                    </div>

                </div>

                <div class="ex-btn-contact">

                    <a href="https://google.com">

                        <img class="btn-blog-all-arrow btn-contact-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/footer-arrow-long.svg' ?>" alt="όλες οι υπηρεσίες" >

                        Φορμα επικοινωνιας

                    </a>

                </div>

            </div>
            
            <div class="ex-footer-info flex-grow-1">

                <div class="ex-footer-address">

                    <p><?php the_field('address', $home_page); ?></p>

                </div>

                <div class="ex-footer-tel">

                    <p><span>Τ: </span><?php the_field('tel', $home_page); ?></p>

                    <p><span>F: </span><?php the_field('fax', $home_page); ?></p>

                    <p><span>E: </span><?php the_field('email', $home_page); ?></p>

                </div>

                <div class="ex-footer-social-icons">

                    <a href="<?php the_field('facebook_link', $home_page); ?>"><i class="fab fa-facebook-f"></i></a>

                    <a href="<?php the_field('twitter_link', $home_page); ?>"><i class="fab fa-twitter"></i></a>

                    <a href="<?php the_field('linkedin_link', $home_page); ?>"><i class="fab fa-linkedin-in"></i></a>

                </div>

            </div>

        </div>

        <div class="ex-copyrights">

            <p>Circus Design Studio for Exelixis &copy; 2020 - 2020</p>

        </div>

    </footer>

        <?php wp_footer(); ?>

</body>

</html>