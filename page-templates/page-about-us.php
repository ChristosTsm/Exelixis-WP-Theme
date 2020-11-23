<?php
/**
 * Template Name: AboutUs
 */ 

get_header( 'secondary' ); ?>

<section id="about-us">

    <div class="ex-mr ex-ml">

        <?php get_template_part( 'partials/about','top-nav' ); ?>

        <div class="row justify-content-lg-center">

            <div class="col-lg-5 about-us-inner-left-col">

                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/about-us-img.png' ?>" alt="<?php the_title(); ?>" >

                <div class="d-flex my-5 about-us-inner-text-l-c">

                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/about-us-graphic.svg' ?>" alt="<?php the_title(); ?>">

                    <p><?php _e(the_field('after_img_text'), 'exelixis-circus'); ?></p>

                </div>

                <div class="text-right about-us-l-c-footer">

                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/about-us-e.png' ?>" alt="<?php bloginfo( 'name' ); ?>">

                </div>

            </div>

            <div class="col-lg-7 about-us-inner-right-col">

                <h1><?php _e('Ποιοί<br>Είμαστε','exelixis-circus'); ?></h1>

                <hr class="w-20">

                <div class="about-us-subtitle">

                    <p><?php _e( the_field('after_title_text_1'), 'exelixis-circus' ); ?></p>

                </div>

                <hr>

                <div class="about-us-subtitle">

                    <p><?php _e(the_field('after_title_text_2'), 'exelixis-custom' ); ?></p>

                </div>

            </div>

        </div>

    </div>

</section>

<script>


</script>

<?php get_footer( ); ?>